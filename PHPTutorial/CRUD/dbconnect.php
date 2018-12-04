<?php

	$host = 'localhost';
	$user = 'root';
	$password = '';
	$dbname = "bookshop";


	$conn = mysql_connect($host,$user,$password,$dbname);

	if (!$conn) {
    		die("Connection failed: " . mysqli_connect_error());
	}else{
	    //echo '.';
	}

?>