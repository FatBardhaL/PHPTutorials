<?php  
	
	$mysql_host = 'localhost';
	$mysql_users = 'root';
	$mysql_password = '';
	$mysql_error = 'Fajlli nuk ka mundur te lidhet me database.';

	//Ketu lidhim kete fajll me databaze
	//@ i largon default erroret

		@mysql_connect($mysql_host,$mysql_users,$mysql_password) or die($mysql_error);

		// echo "Ju jeni lidhur me Databazen";
?>