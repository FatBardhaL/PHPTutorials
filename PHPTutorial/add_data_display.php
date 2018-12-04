<?php include "db.php"?>
<?php

	//DESC  e mer ID e fundit

	$sql = "SELECT * FROM people ORDER BY id DESC";
	$query = mysql_query($sql) or die($mysql_error);

?>