<?php  
	
	$mysql_host = 'localhost';
	$mysql_users = 'root';
	$mysql_password = '';
	$dbname = "myDB";
	$mysql_error = '<br/>Fajlli nuk ka mundur te lidhet me database.';

	//Ketu lidhim kete fajll me databaze

		@mysql_connect($mysql_host,$mysql_users,$mysql_password,$dbname) or die($mysql_error);

		echo "Ju jeni lidhur me Databazen.<br>";
		echo $first_name." ".$last_name." ".$age;
		
?>