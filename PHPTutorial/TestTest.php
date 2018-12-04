<?php

	$mysql_file = 'f106_connect.inc.php';

	include $mysql_file;

	$conn = mysqli_connect($mysql_host,$mysql_users,$mysql_password,$mysql_db);

	if(!$conn){
		die("Nuk jeni lidhur me databaze.");
	}else{
		echo "Eshte lidhur me ".$mysql_file.'<br>';
	}


?>
<form action="TestTest.php" method="GET">
	
</form>