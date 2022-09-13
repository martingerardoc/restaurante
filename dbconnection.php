<?php
	
	require("config.php");

	// Create connection
	$sqlconnection = new mysql($servername, $username, $password,$dbname);

	// Check connection
	if ($sqlconnection->connect_error) {
    	die("Connection failed: " . $sqlconnection->connect_error);
	}
	
?>