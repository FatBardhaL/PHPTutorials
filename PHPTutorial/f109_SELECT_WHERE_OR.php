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


	$query = "SELECT food, calories FROM food WHERE healthy_unhealthy='h' OR calories='1000' ORDER BY id DESC";
		echo "Paraqesim ushqimet e shendetshme(h) dhe ushqimet me mbi 1000 kalori:<br/>";
		if(null !== ($query_run = mysqli_query($conn,$query))){

			while ($row = mysqli_fetch_assoc($query_run)){

				$food_name = $row['food'];
				$calories = $row['calories'];


				echo $food_name.' '.$calories;
				echo "<br>";
			}

		}else{
			echo mysql_error($query_run);
		}


		mysqli_close($conn);

?>
