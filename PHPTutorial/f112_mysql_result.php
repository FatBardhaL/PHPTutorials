<?php
		//require 'f106_connect.inc.php';

	$mysql_host = 'localhost';
	$mysql_users = 'root';
	$mysql_password = '';
	$mysql_error = 'Fajlli nuk ka mundur te lidhet me database.';
	$mysql_db = 'a_database';

		//Ketu lidhim kete fajll me databaze
		//@ i largon default erroret
	$conn = mysqli_connect($mysql_host,$mysql_users,$mysql_password,$mysql_db);
	

	if(!@$conn){
		
		die($mysql_error);

	}else{
		echo "Ju jeni lidhur me database";
	}




//..............................................FUNKSIONI:
	//$query =mysql_query("SELECT `id`,`username`,`password`,`firstname`,`lastname` FROM `users` ORDER BY `id`");
	//$query_run = mysql_query($query);
	$sql="SELECT `id`, `username`, `password`, `firstname`, `lastname` FROM `a_database`.`users`";
	if ($query = mysqli_query($conn,$sql)){
		//echo "<table border=3>
		//		<tr>
		//			<th>ID</th>
		//			<th>username</th>
		//			<th>password</th>
		//			<th>firstname</th>
		//			<th>lastname</th>
		//		</tr>";
			function TR($row,$value){
				$result ="<td>".$row[$value]."</td>";
				return $result;
			}
			while ($row=mysqli_fetch_array($query)){

				echo 	"<table border=3>
						<tr>
							<th>ID</th>
							<th>username</th>
							<th>password</th>
							<th>firstname</th>
							<th>lastname</th>
						</tr>
						<tr>"
					    .TR($row,'id')
					    .TR($row,'username')
					    .TR($row,'password')
					    .TR($row,'firstname')
					    .TR($row,'lastname')
					    ."</tr></table>";
			}

		//$this_Stud_ID = mysql_result($query,$row,'id');
		$this_Stud_ID = mysql_result(mysqli_query($conn,$sql),$row,'id');

		echo $this_Stud_ID;
			
	}else{
		die("</br>Lidhja me tabel ka deshtuar.");
	}

?>