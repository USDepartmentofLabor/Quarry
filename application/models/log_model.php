<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Log_model extends CI_Model
{

	private $dbmssql = NULL;
	private $db = NULL;
	
	function __construct() {
		parent::__construct();
		
		// bootstrap apiv2 mssql database
		$this->db = $this->load->database('default', TRUE);
		//$this->dbmssql = $this->load->database('mssql', TRUE);
	}
	
	public function get_logs() {
		$this->db->select('uri, method, ip_address');
		$this->db->from('logs');
		//$this->db->limit(10);
		
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	
	public function get_calllog() {
		$this->db->select('CallLog.Token, CallLog.`Call`, CallLog.Date');
		$this->db->from('CallLog');
		$this->db->where("CallLog.Date >= '2013-01-01 00:00:00'");
		//$this->db->limit(2000);
	
		$query = $this->db->get();
	
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

/*	
	function getLogs() {
		$query = $this->db->query("SELECT uri, method, ip_address FROM logs");
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
*/
}
