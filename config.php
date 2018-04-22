<?php 
require 'environment.php';


global $config;
$config = array();
if(ENVIRONMENT == "development"){
	$config['dbname'] = 'cartaosus';
	$config['charset']= 'utf8';
	$config['host']   = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'vertrigo';
}else{
	$config['dbname'] = 'cartaosus';
	$config['host']   = 'utf8';
	$config['charset']= 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'vertrigo';
}


?>