<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * API config
 *
 * Set pre-defined tables for model class.
 *
 * @author  	johnsonpatrickk (Patrick Johnson Jr.)
 * @license		http://developer.dol.gov
 */

/*
 |--------------------------------------------------------------------------
| Table names
|--------------------------------------------------------------------------
|
| This is the configuration file for the virtual datasource management.
| If you have different names for the tables required for the virtual manager to work
| please enter those below. 
|
*/

$config['api']['table']['daas_manager'] = "daas_manager";
$config['api']['table']['connection_strings'] = "connection_strings";

