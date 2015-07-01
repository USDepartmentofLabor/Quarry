<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Log_model extends CI_Model
{

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
}