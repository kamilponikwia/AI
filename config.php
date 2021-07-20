<?php

define('_SERVER_NAME', 'localhost');
define('_SERVER_URL', 'http://' . _SERVER_NAME);
define('_APP_ROOT', '/php_kalkulator_kredytowy');
define('_APP_URL', _SERVER_URL . _APP_ROOT);
define("_ROOT_PATH", dirname(__FILE__));

<<<<<<< OURS
$conf->server_name = 'localhost';
$conf->server_url = 'http://' . $conf->server_name;
$conf->app_root = '/php_kalkulator_kredytowy';
$conf->action_root = $conf->app_root . '/app/ctrl.php?action=';

$conf->action_url = $conf->server_url . $conf->action_root;
$conf->app_url = $conf->server_url . $conf->app_root;
$conf->root_path = dirname(__FILE__);


function out(&$param){
	if (isset($param)){
		echo $param;
	}
}
?>

