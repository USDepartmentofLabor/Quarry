# Quarry REST Service

# Release Information

  **Requirements**
  * PHP version 5.4 or newer is recommended (LAMP/LAPP Stack).
  * MySQL 5.5 or PostgreSQL 9.3 is recommended
  * CodeIgniter 2.2.0 or newer is recommended. This repo contains in-development code for future releases. To download the
latest stable release please visit the [CodeIgniter Downloads](http://www.codeigniter.com/download) page.

# Installation
* (CodeIgniter 2.2.0)
* Database Import (InnoDB Engine is recommended)
  * Rename **quarry_restdb.txt** to **quarry_restdb.sql**
  * Create a database: **quarry_restdb**
  * Import the SQL file to your database

* Edit the following configuration files:

  **application/config/config.php**
    * Base Site URL (Example: https://quarry.domain.tld/ or /https://www.domain.tld/quarry/)
    * Encryption Key: Generate key at: [Codeigniter Encryption Key Generator] (http://jeffreybarke.net/tools/codeigniter-encryption-key-generator/)
  
  **application/config/constants.php**
    
    REST service limit (modify)
    * `define('DAAS_GET_LIMIT', '200');`
    * `define('DAAS_READ_LIMIT', '500');`
    * `define('LOGS_READ_LIMIT', '1000');`
  
  **application/config/database.php**

    Enter database information
    * `$db['default']['hostname'] = '';`
    * `$db['default']['username'] = '';`
    * `$db['default']['password'] = '';`
    * `$db['default']['database'] = 'quarry_restdb';`

# Acknowledgement
* DOL Office of Public Affairs would like to thank EllisLab, the CodeIgniter Team at [British Columbia Institute of Technology](http://www.bcit.ca/) and all the
contributors to the CodeIgniter project.
* (Phil Sturgeon) https://github.com/philsturgeon
* (Chris Kacerguis) https://github.com/chriskacerguis


