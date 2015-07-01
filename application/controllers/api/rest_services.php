<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * APIv2 REST Services Controller
 *
 * @package	REST Services Controller
 */

// REST parent class include
require APPPATH.'/libraries/REST_Controller.php';

class Rest_services extends REST_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
		// the limit access is logged when the required REST key feature is activated
        $this->methods['daas_read_get']['limit'] = DAAS_READ_LIMIT; // 500 requests per hour per user/key
        $this->methods['logs_get']['limit'] = LOGS_READ_LIMIT; // 1000 requests per hour per user/key
	}
	   
    public function daas_read_get()
    {   	
    	$this->load->model('daas_model');
    	
    	$filter = array(
    		'limit' => $this->get('limit'),
    		'offset' => $this->get('offset'),
    		'source' => $this->get('source'),
    		'datatable' => $this->get('datatable'),
    		'column' => $this->get('column'),
    		'columns' => $this->get('columns'),
    		'orderby' => $this->get('orderby'),
    		'date_column' => $this->get('date_column'),
    		'start_date' => $this->get('start_date'),
    		'end_date' => $this->get('end_date'),
    		'sort_by' => $this->get('sort_by')
    	);
    	
    	// execute the date validation method if the requestor supplies a start/end date
    	$date_filter = array(
    			'start_date' => $this->get('start_date'),
    			'end_date' => $this->get('end_date')
    	);
		/*     	
    	// check if date is unixtime stamp, then convert to 18F standard
    	$is_unix_time = $this->is_unix_timestamp($string = $filter['start_date']);
    	if ($is_unix_time) // convert unix timestamp to 18F
    	{
    		date('Y-m-d H:i:s', $filter['start_date']);
    	}
    	*/ 	
    	if (!empty($filter['start_date']) && !empty($filter['end_date']))
	    {
	    	$this->date_validate($start_date = $this->get('start_date'), $end_date = $this->get('end_date'));
    	}
    	elseif (!empty($filter['start_date']))
    	{
    		$this->start_date_validate($start_date = $this->get('start_date'));
    	}
    	elseif (!empty($filter['end_date']))
    	{
    		$this->end_date_validate($end_date = $this->get('end_date'));
    	}
    	
    	$daas_get = $this->daas_model->get_daas($filter);
    
    	if($daas_get)
    	{
    		$this->response($daas_get, 200); // 200 being the HTTP response code
    	}
    	elseif ($daas_get === FALSE)
    	{
    		$this->response(array('status' => 0, 'error' => 'Invalid dataset value! Check suggested format.'), 500); // 500 = Internal Server Error
    	}  
    	else
    	{
    		$this->response(array('error' => 'No data available!'), 404);
    	}
    }
    
    // get metadata for the requested source
    public function structure_get()
    {
    	$this->load->model('daas_model');
    	
    	$filter = array('metadata' => $this->get('metadata'));
    	
    	$daas_get = $this->daas_model->get_metadata($filter);
    	
    	if($daas_get)
    	{
    		$this->response($daas_get, 200); // 200 being the HTTP response code
    	}
    	
    	else
    	{
    		$this->response(array('error' => 'No metadata available!'), 404);
    	}
    }
    
    public function logs_get()
    {    	 
    	$this->load->model('log_model');
    	$logs = $this->log_model->get_logs($this->get('limit'));
    	 
    	if ($logs)
    	{
    		$this->response($logs, 200); // 200 being the HTTP response code
    	}
    	else
    	{
    		$this->response(array('error' => 'Couldn\'t find any log entries!'), 404);
    	}
    }
    
    // validate requestor date input format
    public function date_validate($start_date, $end_date)
    {
    	$date_regex = '/^(19|20)\d\d[\-\/.](0[1-9]|1[012])[\-\/.](0[1-9]|[12][0-9]|3[01])$/';
    	
    	if (!preg_match($date_regex, $start_date))
    	{
    		$this->response(array('error' => 'Invalid start date format supplied! Try this format: YYYY-MM-DD'), 404);
    	}
    	elseif (!preg_match($date_regex, $end_date))
    	{
    		$this->response(array('error' => 'Invalid end date format supplied! Try this format: YYYY-MM-DD'), 404);
    	}
    }
    
    public function start_date_validate($start_date)
    {
    	$date_regex = '/^(19|20)\d\d[\-\/.](0[1-9]|1[012])[\-\/.](0[1-9]|[12][0-9]|3[01])$/';
    	 
    	if (!preg_match($date_regex, $start_date))
    	{
    		$this->response(array('error' => 'Invalid start date format supplied! Try this format: YYYY-MM-DD'), 404);
    	}
    }
    
    public function end_date_validate($end_date)
    {
    	$date_regex = '/^(19|20)\d\d[\-\/.](0[1-9]|1[012])[\-\/.](0[1-9]|[12][0-9]|3[01])$/';
    
    	if (!preg_match($date_regex, $end_date))
    	{
    		$this->response(array('error' => 'Invalid end date format supplied! Try this format: YYYY-MM-DD'), 404);
    	}
    }
    
    // determine if string is unix timestamp
    public function is_unix_timestamp($string)
    {
    	return (1 === preg_match('~^[1-9][0-9]*$~',$string));
    }    
}
