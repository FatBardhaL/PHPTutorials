<?php  
	
	$mysql_host = 'localhost';
	$mysql_users = 'root';
	$mysql_password ='';
	$mysql_error = 'Fajlli nuk ka mundur te lidhet me database.';
	$mysql_db = 'mydb';

	//Ketu lidhim kete fajll me databaze
	//@ i largon default erroret


	if(!mysql_connect($mysql_host,$mysql_users,$mysql_password) || !mysql_select_db($mysql_db)){
		
		die($mysql_error);

	}else{
		echo "Ju jeni lidhur me database";
	}		
?>
<br><br><br><br>
		<?php 
			$query = mysql_query("SELECT * FROM guests");
			while ($row = mysql_fetch_array($query)) {
				$firstname = $row['firstname'];
				$lastname = $row['lastname'];

				echo $firstname.':'.$lastname.'<br>';
			}
				echo $query;

		 ?>