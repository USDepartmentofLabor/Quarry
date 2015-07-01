<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Daas_model extends CI_Model {
	
	private $db = NULL;
	private $_vconn;
	private $_config;
	private $rdbms_table = "rdbms";
	private $drv_mssql = "mssql";
	private $drv_mysql = "mysql";
	private $drv_oci8 = "oci8";
	private $drv_postgre = "postgre";
	private $connect_strng_tbl = "connection_strings";
	
	function __construct()
	{
		parent::__construct();
		
		// bootstrap apiv2 mssql database
		$this->db = $this->load->database("default", TRUE);
		$this->_config = (object)$this->config->item("api");
		$this->_vconn = (object)$this->config->item("vdriver");
		
		// bootstrap the adminui virtual client connection
		$this->_vconn->client["dbprefix"];
		$this->_vconn->client["pconnect"];
		$this->_vconn->client["db_debug"];
		$this->_vconn->client["cache_on"];
		$this->_vconn->client["cachedir"];
		$this->_vconn->client["char_set"];
		$this->_vconn->client["dbcollat"];
		$this->_vconn->client["autoinit"];
		$this->_vconn->client["stricton"];
	}
	
	//
	public function get_daas($filter)
	{
		$this->db->select($this->_config->table["connection_strings"] . ".*, tbl2.*");
		$this->db->join("api_rdbms AS tbl2", $this->_config->table["connection_strings"] . ".daas_rdbms = tbl2.db_id");
		$this->db->where($this->_config->table["connection_strings"] . ".daas_table_alias", $filter['source']);
		
		$query = $this->db->get($this->connect_strng_tbl);
		
		if ($query->num_rows > 0)
		{
			if ($query->row("db_driver") == $this->drv_mssql)
			{
				// initiate viratual varaibles from the database
				// before initiating an mssql connection, verify if an instance is available
				if ($query->row('daas_instance') != NULL)
				{
					$hostname = $query->row('daas_host')."\\".$query->row('daas_instance');
				}
				else
				{
					$hostname = $query->row('daas_host');
				}
				
				$this->_vconn->client['hostname'] = $hostname;
				$this->_vconn->client["username"] = $query->row("daas_user");
				$this->_vconn->client["password"] = $query->row("daas_passwd");
				$this->_vconn->client["database"] = $query->row("daas_dbname");
				$this->_vconn->client["dbdriver"] = $query->row("db_driver"); // this determines the entire connection

			}
			elseif ($query->row("db_driver") == $this->drv_mysql)
			{
				// initiate viratual varaibles from the database
				$this->_vconn->client['hostname'] = $query->row("daas_host");
				$this->_vconn->client["username"] = $query->row("daas_user");
				$this->_vconn->client["password"] = $query->row("daas_passwd");
				$this->_vconn->client["database"] = $query->row("daas_dbname");
				$this->_vconn->client["dbdriver"] = $query->row("db_driver"); // this determines the entire connection
			}
			elseif ($query->row("db_driver") == $this->drv_postgre)
			{
				// initiate viratual varaibles from the database
				$this->_vconn->client['hostname'] = $query->row("daas_host");
				$this->_vconn->client["username"] = $query->row("daas_user");
				$this->_vconn->client["password"] = $query->row("daas_passwd");
				$this->_vconn->client["database"] = $query->row("daas_dbname");
				$this->_vconn->client["dbdriver"] = $query->row("db_driver"); // this determines the entire connection
			}
			elseif ($query->row("db_driver") == $this->drv_oci8)
			{				
				$tnsname = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = {$query->row("daas_host")})(PORT = {$query->row("daas_port")}))
				(CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = {$query->row("daas_sname")})))";
				$this->_vconn->client["hostname"] = $tnsname;
				$this->_vconn->client["username"] = $query->row("daas_user");
				$this->_vconn->client["password"] = $query->row("daas_passwd");
				$this->_vconn->client["database"] = $query->row("daas_dbname");
				$this->_vconn->client["dbdriver"] = $query->row("db_driver"); // this determines the entire connection
				
				//print_r($this->_vconn->client["cachedir"]); exit;
			}
		}
		// load the virtual database
		if (!$query->row("daas_table"))
		{
			return FALSE;
		}
		
		// connect to virtual datasource
		$this->apidb = $this->load->database($this->_vconn->client, TRUE);
		$this->apidb->from($query->row("daas_table"));
		
		/*
		|--------------------------------------------------------------------------
		| Filtering
		|--------------------------------------------------------------------------
		|
		| in this filter, the max data is set for any and all queries.
		| order by and column sorting.
		|
		*/
			
		// data limit
		$max_data = DAAS_GET_LIMIT;
		$start_date = $filter['start_date'];
		$end_date = $filter['end_date'];
		$columns = $filter['columns'];
		$date_column = $filter['date_column'];
		$order_by = $filter['orderby'];
		$limit = $filter['limit'];
		$offset = $filter['offset'];
		$sort_order = "";
		$sort_by = "";
		$sort_order = ($sort_order == 'desc') ? 'desc' : $filter['orderby'];
			
		// this function replaces the spaces in a multi-column request...
		$columns = str_replace("{", "", $columns);
		$columns = str_replace("}", "", $columns);
		
		$columns =(explode(":", $columns));
		$sort_by = (in_array($sort_by, $columns)) ? $sort_by : array_values($columns)[0];
				
		$this->apidb->limit($max_data);
		
		if (!empty($date_column)) // checks the datasource date column format 
		{
			// request for date range search
			if (!empty($start_date) && !empty($end_date))
			{
				$this->apidb->where("$date_column BETWEEN '$start_date' AND '$end_date'");
				// enforce return data limit control...
				(empty($limit) == $this->apidb->limit($max_data, $offset)) ? $this->apidb->limit($max_data, $offset) : $this->apidb->limit($limit, $offset);
			}
			elseif (!empty($start_date)) // this filter will provide the start date requested and greater
			{
				$this->apidb->where("$date_column >=", $start_date);
				// enforce return data limit control...
				(empty($limit) == $this->apidb->limit($max_data, $offset)) ? $this->apidb->limit($max_data, $offset) : $this->apidb->limit($limit, $offset);
			}
			elseif (!empty($end_date))
			{
				$this->apidb->where("$date_column <=", $end_date);
				//$this->apidb->order_by($date_column, $sort_order);
				// enforce return data limit control...
				(empty($limit) == $this->apidb->limit($max_data, $offset)) ? $this->apidb->limit($max_data, $offset) : $this->apidb->limit($limit, $offset);			
			}
		}
		if (!empty($columns))
		{	
			// get specific column request. parse orderby criteria from user, asc|desc
			$this->apidb->select($columns);
			$this->apidb->order_by($sort_by, $sort_order);
			// enforce return data limit control...
			(empty($limit) == $this->apidb->limit($max_data, $offset)) ? $this->apidb->limit($max_data, $offset) : $this->apidb->limit($limit, $offset);		
		}
		// check limit request if greater than 200 rows
		if ($limit > $max_data)
		{
			$this->apidb->order_by($sort_by, $sort_order);
			$this->apidb->limit($max_data, $offset);
			$query = $this->apidb->get();
		}
		else
		{
			$query = $this->apidb->get();
		}
		
		//print $this->apidb->last_query(); exit;
		if (!$query)
		{
		     return FALSE;
		}
		else
		{
			$connect = array();
			if ($query->num_rows() > 0)
			{
				foreach ($query->result() as $row)
				{
					$connect[] = $row;
				}
				
				return $connect;
			}
		}
	}
	/*
	 * this method provides a description of dataset/datasource
	 * without pulling the data 
	 */
	public function get_metadata($filter)
	{
		$this->db->select($this->_config->table["connection_strings"] . ".*, tbl2.*");
		$this->db->join("api_rdbms AS tbl2", $this->_config->table["connection_strings"] . ".daas_rdbms = tbl2.db_id");
		$this->db->where($this->_config->table["connection_strings"] . ".daas_table_alias", $filter['source']);
	
		$query = $this->db->get($this->connect_strng_tbl);

		if ($query->num_rows > 0)
		{
			if ($query->row("db_driver") == $this->drv_mssql)
			{
				// initiate viratual varaibles from the database
				// before initiating an mssql connection, verify if an instance is available
				if ($query->row('daas_instance') != NULL)
				{
					$hostname = $query->row('daas_host')."\\".$query->row('daas_instance');
				}
				else
				{
					$hostname = $query->row('daas_host');
				}
	
				$this->_vconn->client['hostname'] = $hostname;
				$this->_vconn->client["username"] = $query->row("daas_user");
				$this->_vconn->client["password"] = $query->row("daas_passwd");
				$this->_vconn->client["database"] = $query->row("daas_dbname");
				$this->_vconn->client["dbdriver"] = $query->row("db_driver"); // this determines the entire connection
	
			}
			elseif ($query->row("db_driver") == $this->drv_mysql)
			{
				// initiate viratual varaibles from the database
				$this->_vconn->client['hostname'] = $query->row("daas_host");
				$this->_vconn->client["username"] = $query->row("daas_user");
				$this->_vconn->client["password"] = $query->row("daas_passwd");
				$this->_vconn->client["database"] = $query->row("daas_dbname");
				$this->_vconn->client["dbdriver"] = $query->row("db_driver"); // this determines the entire connection
			}
			elseif ($query->row("db_driver") == $this->drv_postgre)
			{
				// initiate viratual varaibles from the database
				$this->_vconn->client['hostname'] = $query->row("daas_host");
				$this->_vconn->client["username"] = $query->row("daas_user");
				$this->_vconn->client["password"] = $query->row("daas_passwd");
				$this->_vconn->client["database"] = $query->row("daas_dbname");
				$this->_vconn->client["dbdriver"] = $query->row("db_driver"); // this determines the entire connection
			}
			elseif ($query->row("db_driver") == $this->drv_oci8)
			{
				$tnsname = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = {$query->row("daas_host")})(PORT = {$query->row("daas_port")}))
				(CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = {$query->row("daas_sname")})))";
				$this->_vconn->client["hostname"] = $tnsname;
				$this->_vconn->client["username"] = $query->row("daas_user");
				$this->_vconn->client["password"] = $query->row("daas_passwd");
				$this->_vconn->client["database"] = $query->row("daas_dbname");
				$this->_vconn->client["dbdriver"] = $query->row("db_driver"); // this determines the entire connection
			}
		}
		
		// load the virtual database
		$this->apidb = $this->load->database($this->_vconn->client, TRUE);
		$this->apidb->from($query->row("daas_table"));

		// request for dataset description
		if (!empty($filter['source']))
		{
			$fields = $this->apidb->field_data($query->row("daas_table"));
			
			foreach ($fields as $row)
			{
				$connect[] = $row;
			}
			return $connect;
		}
	}
}
