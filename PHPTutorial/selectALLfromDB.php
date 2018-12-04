<!DOCTYPE html>
<html>
<head>
	<title>Konektimi dhe selektimi ne batabaze</title>
</head>
<body>
	<?php

		$con = mysql_connect('localhost','root','');
		$db = mysql_select_db('testtest');

		if ($con && $db) {
			echo "Lidhja me sql dhe database ".$db." eshte duke funksionuar.";
		}else{
			echo "Error: Konektimi me database nuk eshte bere.";
		}

	?>

			<br>
		<br>

		<?php 
			$query = mysql_query("SELECT * FROM test2");
			while ($row = mysql_fetch_array($query)) {
				$id = $row['id'];
				$name = $row['name'];
				$lastname = $row['lastname'];
				$shtesa = $row['shtesa'];
				echo 'id'.'Emri '.'Mbiemri '.'Shtesat '.'<br>';
				echo $id.':'.$name.' '.$lastname.' '.$shtesa.' '.'<br>';
			}
				echo $query;

		 ?>

<?php
$result = mysql_query('SELECT * FROM test2 WHERE id=1');
if (!$result) {
    die('Invalid query: ' . mysql_error());
}

?>

</body>
</html>





