<?php
	$host = "localhost";
	$user = 'root';
	$password = '';
	$database = 'log_in';

	$conn = mysqli_connect($host,$user,$password,$database);
	global $conn;
	
	if($conn){
		echo ".";
	}else{
		die(mysql_error());
	}
?>