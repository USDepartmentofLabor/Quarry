<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Quarry APIv2 REST Version Model
 *
 * @package	Version Model
 * @author	Daniel Jeanniton
 * @link	
 * @version 0.1.0
 */

class Version_model extends CI_Model {
	
	private $version_table_name = "version";
	private $version_major = '';
	private $version_minor = '';
	private $version_update = '';
	private $offical_name = '';
	private $product = 'REST';
	private $build = '';
	private $schema = '';
	private $start_of_product = '';

	//The $product variable must be set beforehand in order to retrieve the correct record.
	
	function __construct()
	{
		parent::__construct();
	}
	
	/*
	|--------------------------------------------------------------------------
	| All getters for displaying version information
	|--------------------------------------------------------------------------
	|
	*/
	
	/**
	 * get_version
	 *
	 * @param	string	$label	The version suffix label.. for example, 'v' is an abbr.
	 * @param	string	$delim	Delimiter
	 * @return	string	
	 * @author
	 *
	 */
	public function get_version($label = 'v', $delim = '.')
	{
		$this->db->where('product', $this->product);
		$version_data = $this->db->get($this->version_table_name)->row();
		$this->version_major = $version_data->version_major;
		$this->version_minor = $version_data->version_minor;
		$this->version_update = $version_data->version_update;
		$this->offical_name = $version_data->name;
		$this->build = $version_data->build;
		$this->schema_major = $version_data->schema_major;		
		$this->schema_minor = $version_data->schema_minor;
		$this->schema_update = $version_data->schema_update;
		$this->revision = $version_data->revision;		
		$this->start_of_product = $version_data->start_of_product;		
		$this->end_of_product = $version_data->end_of_product;	
				
		return $label.$delim.$this->version_major.$delim.$this->version_minor.$delim.$this->version_update;
	}

	public function get_version_major()
	{
		return $this->version_major;
	}
	
	public function get_version_minor()
	{
		return $this->version_minor;
	}
	
	public function get_version_update()
	{
		return $this->version_update;
	}

	public function get_name()
	{
		return $this->offical_name;
	}

	public function get_product(){
		return $this->product;
	}
	public function get_build()
	{
		return $this->build;
	}	
	
	public function schema_major()
	{
		return $this->schema_major;
	}
	
	public function schema_minor()
	{
		return $this->schema_minor;
	}
	
	public function schema_update()
	{
		return $this->schema_update;
	}
	
	public function get_revision()
	{
		return $this->revision;
	}
	
	
	// Not formatted
	public function get_start_of_product()
	{
		return $this->start_of_product;
	}
	// Not formatted
	public function get_end_of_product()
	{
		return $this->end_of_product;
	}	
	
}