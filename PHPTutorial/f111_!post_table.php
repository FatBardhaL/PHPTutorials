<?php
//...........................................LIDHJA ME DATABASE:
	$host = "localhost";
	$users = "root";
	$password = "";
	$db_name="a_database";

	$conn = mysqli_connect($host,$users,$password,$db_name);
	if($conn){
		echo "Lidhja me database funksionon.";
	}else{
		die($mysql_error);
		echo "Jo";
	}

//...........................................Selektimi i DATABASE:
	$query = "SELECT `id`, `food`, `calories`, `healthy_unhealthy` FROM `food`";
	$i=0;
	$sql = mysqli_query($conn,$query);

	if($sql){

		//$dyn_table =  '<table border="1" cellpadding="10">';

		
			
			
				




?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style> 
		text{color:#000;}
	</style>
</head>
<body>

	<form action="f111_post_table.php" method="POST">
		<table border="1" cellpadding="10">
<?php
			while ($row = mysql_fetch_array($sql)){
				$id =$row['id'];
				$member_name=$row['food'];
				//$i tregon se tabela do ti kete 3 kolona
				if($i%3==0){
?>
					<tr>
						<td><?php $member_name;?></td>
						<td><?php $member_name;?></td>
<?php
				}else{
?>
						<td><?php $member_name; ?></td>
						<td><?php $member_name;?></td>
<?php
				}
			}
				$i++;
?>
 					<tr>
						<td><?php  $member_name  ?></td>
<?php

			}else{
				echo "<br/>databaza nuk u selektua.";
			}
		?>
					<?php 
						//echo $dyn_table;
					?>
			</tr> 
		</table>
</form>
</body>
</html>