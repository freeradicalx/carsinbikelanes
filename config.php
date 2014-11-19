<?php

//----------------------------------------------//
// CONFIGURATION
//----------------------------------------------//

//MySQL
$hostname 	= "mysql_hostname";
$username 	= "mysql_user";
$password 	= "mysql_password";
$database 	= "database_name";
$table 		= "table_name";

//Mapbox
$access_token = "paste_your_mapbox_access_token_here";

//Preferences
$max_view = 50;

//----------------------------------------------//

$connection = mysqli_connect($hostname,$username,$password,$database);

if (mysqli_connect_errno()) {
  	error("mysql issue...");
}

?>