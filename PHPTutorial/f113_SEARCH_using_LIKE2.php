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
	

	if(isset($_POST['search_name'])){
		$search_name = $_POST['search_name'];
		if (!empty($_POST['search_name'])) {
			if (strlen($search_name)>=4) {
				$query="SELECT `name` FROM `a_database`.`names` WHERE `name` LIKE '%".mysql_real_escape_string($search_name)."%'";
				if($query_run=mysqli_query($conn,$query)){  
					$mysql_num_rows=mysqli_num_rows($query_run);
					if($mysql_num_rows>=1){
						echo "<br/>".$mysql_num_rows." rezultate jane gjetur.";
						while ($row=mysqli_fetch_assoc($query_run)) {
							$name = $row['name'];
							echo '<br/>'.$name;
						}
					}else{
						echo "<br/>Nuk eshte gjetur as nje rrezultat.";
					}
				}else{
					echo "<br/>Nuk ka mundur te lidhet me tabelen ne database.";
				}
			}else{
				echo "Gjatesia e fjales duhet te jete me e madhe se 3 karaktere.";
			}
		}else{
			echo "<br/>Hapsir eshte e zbrazet.";
		}
	}else{
		//echo "<br/>Nuk eshte shtypur asgje.";
	}
?>

<form action="f113_SEARCH_using_LIKE2.php" method="POST">
	<label>Name:</label>
	<input type="text" name="search_name">
	<input type="submit" value="search">

	<p><?php  //echo $search_name;  ?></p>

</form>