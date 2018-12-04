<?php  
	
	$mysql_host = 'localhost';
	$mysql_users = 'root';
	$mysql_password = '';
	$mysql_error = 'Fajlli nuk ka mundur te lidhet me database.';
	$mysql_db = 'a_database';

		//Ketu lidhim kete fajll me databaze
		//@ i largon default erroret
	$conn = mysqli_connect($mysql_host,$mysql_users,$mysql_password);
	
		$select_db = mysql_select_db($mysql_db);
	



	if(!@$conn){
		
		die($mysql_error);

	}else{
		echo "Ju jeni lidhur me database";
	}
	

		
?>