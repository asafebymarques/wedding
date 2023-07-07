<?php
require 'environment.php';

global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {
     define("BASE_URL", "http://localhost/chacozinha/");
	 $config['dbname'] = 'chacozinha';
	 $config['host'] = 'localhost';
	 $config['dbuser'] = 'root';
	 $config['dbpass'] = '';
} else {
	 define("BASE_URL", "http://localhost/chacozinha/");
	 $config['dbname'] = 'chacozinha';
	 $config['host'] = 'localhost';
	 $config['dbuser'] = '';
	 $config['dbpass'] = '';
}
$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);