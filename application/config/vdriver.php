<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
 |--------------------------------------------------------------------------
| Virtual schema connection strings
|--------------------------------------------------------------------------
|
| This is the configuration file for the virtual datasource management.
| If you have different names for the tables required for the virtual manager to work
| please enter those below.
|
*/


$config['vdriver']['client']['hostname'] = RESTCLNTHOST;
$config['vdriver']['client']['username'] = RESTCLNTUSER;
$config['vdriver']['client']['password'] = RESTCLNTPASSWORD;
$config['vdriver']['client']['database'] = RESTCLNTDATABASE;
$config['vdriver']['client']['dbdriver'] = RESTCLNTDBDRIVER; // this determines the entire connection
$config['vdriver']['client']['dbprefix'] = RESTCLNTDBPREFIX;
$config['vdriver']['client']['cache_on'] = RESTCLNTCACHEON;
$config['vdriver']['client']['cachedir'] = RESTCLNTCACHEDIR;
$config['vdriver']['client']['pconnect'] = RESTCLNTPCONNECT;
$config['vdriver']['client']['db_debug'] = RESTCLNTDEBUG;
$config['vdriver']['client']['char_set'] = RESTCLNTCHARSET;
$config['vdriver']['client']['dbcollat'] = RESTCLNTDBCOLLAT;
$config['vdriver']['client']['autoinit'] = RESTCLNTAUTOINIT;
$config['vdriver']['client']['stricton'] = RESTCLNTSTRICTON;