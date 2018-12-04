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

	$sql = "SELECT * FROM `food` ";

		if($result = mysqli_query($conn,$sql)){
			
		}
		while(null !== ($row = mysqli_fetch_assoc($result))){
			echo $row['id'].') '; 
		 	echo $row['food']." = "; 
		 	echo $row['calories']." kalori dhe "; 
		 	if ($row['healthy_unhealthy'] ==='h') {
		 		echo "ushqim i shendetshem.";
		 	}else{
		 		echo "ushqim jo shendetshem.";
		 	}
		 	echo "<br>";
		}

		mysqli_close($conn);

?>
