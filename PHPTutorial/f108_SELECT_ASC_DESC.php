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

		//ASC(ascend)=Bene radhitjen e elementeve ato qe filloj te parat i radhit te parat e pastaj tjerat teposht.
		//DESC(descend)=Bene radhitjen e elementeve ato qe filloj te fundit i radhit te parat e pastaj tjerat teposht.
	$query = "SELECT food, calories FROM food ORDER BY id ASC";
	// $query = "SELECT * FROM `food` ORDER BY id DESC";

		if(null !== ($query_run = mysqli_query($conn,$query))){
			//echo "Query success";

			while ($row = mysqli_fetch_assoc($query_run)){

				$food_name = $row['food'];
				$calories = $row['calories'];


				echo $food_name.' '.$calories;
				echo "<br>";
			}

		}else{
			//echo mysql_error($query_run);
			echo mysql_error();
		}


		mysqli_close($conn);

?>
