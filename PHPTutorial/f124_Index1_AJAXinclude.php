<?php
		//Tani deshirojm ta bejme INCLUDE nje fajll
		//por jo me php: include('include.inc.php');
		//por nje include form me AJAX:

	if (isset($_GET['show'])) {
		include $_GET['show'];
	}
?>

<input type="submit" name=""  onclick="window.location='f124_Index1_AJAXinclude.php?show=f124_Include.inc.php'">