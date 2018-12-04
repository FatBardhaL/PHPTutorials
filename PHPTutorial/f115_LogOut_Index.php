<?php
	require 'f115_Core.php';
	require 'f114_LogIn_Connect.php';

	//Nese perdoruesi ka mundur te llogohet:
	if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		echo 'You are logged in.'
			 .'<br/>'
			 .'<a href="f115_LogOut_Button.php">Log Out</a>';
	}else{
		//Perndryshe llogohu prap:
		include 'f115_LogOut_Form.php';
	}

	
	//echo $current_file;




?>