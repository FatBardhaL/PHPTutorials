<?php
		
	$mysql_file = 'f106_connect.inc.php';
	//include $mysql_file;

	include 'f106_connect.inc.php';

	$conn = mysqli_connect($mysql_host,$mysql_users,$mysql_password,$mysql_db);
		
	if(!$conn){
		
		die('Nuk jeni lidhur me databaze.');

	}else{
		echo "<br> Eshte lidhur me ".$mysql_file.' <br>';
	}

//Pjesa e selektimit


	$query = "SELECT food, calories FROM food WHERE healthy_unhealthy='h' AND calories='200' ORDER BY id DESC";
		echo "Paraqet ushqimet qe jane te shishme dhe qe  kan 200 kalori:<br/>";
		if(null !== ($query_run = mysqli_query($conn,$query))){

			if (mysqli_num_rows($query_run)==NULL) {
				echo "Nuk eshte gjetur as nje element i perbashket";
			}else{
				while ($row = mysqli_fetch_assoc($query_run)){

					$food_name = $row['food'];
					$calories = $row['calories'];


					echo $food_name.' '.$calories;
					echo "<br>";
				}
			}

		}else{
			echo mysql_error($query_run);
		}


		mysqli_close($conn);

?>
