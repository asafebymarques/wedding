<?php
require 'environment.php';

global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {
     define("BASE_URL", "https://asafeehevelin.com.br/");
	 $config['dbname'] = 'chacozinha';
	 $config['host'] = 'localhost';
	 $config['dbuser'] = 'wpuser';
	 $config['dbpass'] = '0612!@aA';
} else {
	 define("BASE_URL", "https://asafeehevelin.com.br/");
	 $config['dbname'] = 'chacozinha';
	 $config['host'] = 'localhost';
	 $config['dbuser'] = 'wpuser';
	 $config['dbpass'] = '0612!@aA';
}
$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);