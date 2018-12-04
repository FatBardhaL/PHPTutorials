<!DOCTYPE html>
<html>
<head>
	<title>Konektimi dhe selektimi ne batabaze</title>
</head>
<body>
	<?php

		$con = mysql_connect('localhost','root','');
		$db = mysql_select_db('my_db');

		if ($con && $db) {
			echo "Lidhja me sql dhe database ".$db." eshte duke funksionuar.";
		}else{
			echo "Error: Konektimi me database nuk eshte bere.";
		}

	?>

			<br>
		<br>

		<?php 
			$query = "SELECT `id`,`firstname` FROM `my_db`.`myguests`";

			$query_run=mysql_query($query);

			while ($row = mysql_fetch_assoc($query_run)) {

				$id = $row['id'];
				$name = $row['firstname'];

				echo $id.':'.$name.'<br>';
			}
				echo $query;

		 ?>
</body>
</html>





