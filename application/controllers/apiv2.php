<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apiv2 extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->model("version_model");		
	}

	function index()
	{
		$this->version = $this->version_model->get_version();
		$this->version_title = $this->version_model->get_name();
		$this->version_product = $this->version_model->get_product();
		$this->super_title = $this->version_model->get_name().' '.$this->version_model->get_product().' '.$this->version;
				
		$this->load->helper('url');
		
		$data["version_official_name"] = $this->version_title;
		$data["version_product"] = $this->version_product;
		$this->load->view('apiv2_index', $data);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */