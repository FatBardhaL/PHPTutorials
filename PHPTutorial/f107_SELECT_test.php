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

	$query = "SELECT `id`,`food`,`calories`,`healthy_unhealthy` FROM `food`";

		//Kur perdorim mysqli_query duhet qe parametrin e pare ta vendosim $conn e pastaj $query
	$query_run = mysqli_query($conn,$query);

		if($query_run){

			echo 'Permbajtja e tabeles: <br/>';	

			While($row = mysqli_fetch_assoc($query_run)){
				$id = $row['id'];
				$food = $row['food'];
				$calories = $row['calories'];
				$hu = $row['healthy_unhealthy'];
					//Paraqitja:
				echo $id.')'.$food." ka ".$calories." kalori ";
						
					 if($hu=='h'){
						echo "- dhe ushqimi eshte i shendetshem.";
					 }else{
						echo "- dhe ushqimi nuk eshte i shendetshem.";
					 }

					//Pas cdo while dil ne rreshtin e ri :
				echo '<br/>';
			}
					
		}else{
			echo 'JO';
		}
		

		mysqli_close($conn);

?>
