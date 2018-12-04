<?php
	ob_start();
	session_start();

		//Kjo e jep fajllin ne te cilen thirret.PSH nese kjo variabel thirret (echo $current_file;) ne f115_LogOut_Index.php
		//Ateher kjo jep: D:/xampp/htdocs/thenewboston/f115_LogOut_Index.php
	//$current_file = $_SERVER['SCRIPT_FILENAME'];

		//Kjo jep emrin e fajllit nga i cili thirret (echo $current_file;) duke u nisur nga(ne f115_LogOut_Index.php)fajlli ne htdocs
		//Ateher kjo jep: thenewboston/f115_LogOut_Index.php
	$current_file = $_SERVER['SCRIPT_NAME'];
		//Kjo na tregon faqen se nga vime (f115_LogOut_Index.php):
	$http_referer = $_SERVER['HTTP_REFERER'];






?>