<?php  

	//if there is no constant defined named __CONFIG__ do not load this file
	if(!defined('__CONFIG__')){
		exit("you don't have a config file.");
	}

	// Our config is below

	//include the db.php file
	include_once "inc/classes/DB.php";

	$con = DB::getConnection();

?>