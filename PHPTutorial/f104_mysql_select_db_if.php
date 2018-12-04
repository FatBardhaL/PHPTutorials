<?php  
	
	$mysql_host = 'localhost';
	$mysql_users = 'root';
	$mysql_password = '';
	$mysql_error = 'Fajlli nuk ka mundur te lidhet me database.';
	$mysql_db = 'test';

	//Ketu lidhim kete fajll me databaze
	//@ i largon default erroret


	if(@mysql_connect($mysql_host,$mysql_users,$mysql_password)){
		if(@mysql_select_db($mysql_db)){
			echo "Ju jeni lidhur me Databazen ".$mysql_db;
		}
	}
		
?>