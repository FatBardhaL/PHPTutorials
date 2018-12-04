<?php
	ob_start();
	session_start();

		//Kjo e jep fajllin ne te cilen thirret.PSH nese kjo variabel thirret (echo $current_file;) ne f114_LogIn_If.php
		//Ateher kjo jep: D:/xampp/htdocs/thenewboston/f114_LogIn_If.php
	//$current_file = $_SERVER['SCRIPT_FILENAME'];

		//Kjo jep emrin e fajllit nga i cili thirret (echo $current_file;) duke u nisur nga(ne f114_LogIn_If.php)fajlli ne htdocs
		//Ateher kjo jep: thenewboston/f114_LogIn_If.php
	$current_file = $_SERVER['SCRIPT_NAME'];






?>