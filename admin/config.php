<?php

function dbconnect() {

	//static variable to void connecting more than once to DB
	static $con;

	define('DB_SERVER','localhost');
	define('DB_USERNAME','clandust_dk');
	define('DB_PASSWORD','Euro2018');
	define('DB_NAME','clandust_dk');

	$con = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

	//check conneciton
	if($con === false){
		return mysqli_connect_error();
	}

	return $con;
}

function close() {
	$con -> close();
}

function editNewsItem() {
	$sqledit = "UPDATE News SET '";
}

function readAll() {
	
}
?>
