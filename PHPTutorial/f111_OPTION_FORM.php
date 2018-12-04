<?php
		
	$mysql_file = 'f106_connect.inc.php';
	//include $mysql_file;

	include 'f106_connect.inc.php';



?>
								<!-- FORMA: -->
<form action="f111_OPTION_FORM.php" method="GET">
	<br>
	<br>
	<label>Choose a food type:</label>
	<br>
	<br>
	<select name="uh">
		<option value="u">Unhealthy:</option>
		<option value="h">Healthy</option>
	</select>
	<br>
	<br>
	<br>
	<input type="submit" name="" value="Submit">

</form>



<?php
	
	if (isset($_GET['uh']) && !empty($_GET['uh'])) {
	
		echo	$uh = strtolower($_GET['uh']);			//Vetem kjo po funksionon?
		 

								//Pjesa e selektimit
		$query = "SELECT `id`,`food`, `calories`,`healthy_unhealthy` FROM `food` WHERE `healthy_unhealthy`='%".$uh."%' ORDER BY id DESC";

		if($query_run = mysqli_query($conn,$query)){
			echo "<br/>We present all food witch is".$uh.' :<br/>';
			if (mysqli_num_rows($query_run)==NULL) {
				echo "Nuk eshte gjetur as nje element i perbashket";
			}else{
				while ($row = mysqli_fetch_assoc($query_run)){
						$id = $row['id'];
						$food = $row['food'];
						$calories = $row['calories'];
						$healthy_unhealthy = $row['healthy_unhealthy'];
						
						echo $id.')'.$food.' has '.$calories.' calories  and is '.$healthy_unhealthy.'. <br/>';
						//Kushti

				}//end of while
			}//end of else mysqli_num_rows

		}else{
			die();   
			echo mysql_error($query_run." .Nuk eshte duke funksionuar.");
		}//end of else $query_run

	}


?>
