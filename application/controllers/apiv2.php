<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apiv2 extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->helper('url');
		$this->load->view('apiv2_index');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */