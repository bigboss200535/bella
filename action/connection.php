<?php 
// include("../initialise.php");
	define('DB_HOST','localhost');		//hostname 
	define('DB_USER','root');			//username
	define('DB_PASS','');		//password
	define('DB_NAME','bellas_db');	//database name 
	define('DB_CHARSET', 'utf8');

try{       // Establish database connection.
	$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
	}
catch (PDOException $e){ //checking for connectivity Error
	exit("Database Error: " .$e->getMessage());
}

// include("../initialise.php");