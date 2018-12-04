<?php
	include 'f106_connect.inc.php';

?>

<form action="f111_OPTION_FORM_Injection.php" method="GET">
	<p>Choose a food type:</p>
	<select name="uh">
		<option value="u">Unhealthy</option>
		<option value="h">Healthy</option>
	</select>
	<input type="submit" value="submit" />

</form>

<?php
		//Nese eshte caktuar uh:
	if(isset($_GET['uh']) && !empty($_GET['uh'])){
		echo $uh=strtolower($_GET['uh']);
			//Kete lloj kushti e formojm si lloj ingjeksioni per shkak te siguris
			//Kjo bene te mundur qe te mos te funksionoj per vlera te tjera por vetem per u dhe h
		if($uh=='u' || $uh=='h'){
				//Pjesa e thirrjes se databazes:
			$query ="SELECT `id`, `food`, `calories`, `healthy_unhealthy` FROM `food`
				 WHERE 	`healthy_unhealthy`='%".$uh."%'
				 ORDER BY `id`
				 ASC";
			$query_run = mysql_query($query);
			
			if($query_run){
				echo "<br/>Ne prezantojm te gjith ushqimin e ".$uh."<br/>";
				if(mysql_num_rows($query_run)==NUL){
					echo "No result found";
				}else{
					while($row=mysql_fetch_assoc($query_run)){
						$id = $row['id'];
						$food = $row['food'];
						$calories = $row['calories'];
						$healthy_unhealthy = $row['healthy_unhealthy'];
							//Paraqitja e te dhenave:
						echo $id.") ".$food." ka ".$calories.$healthy_unhealthy;
					}
				}
			}else{
				die($mysql_error);
			}
		}else{
			echo "<br/>Duhet te jete u ose h";
		}	
	}//end of if isset





?>