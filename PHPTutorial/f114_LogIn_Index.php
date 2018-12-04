<?php
	require 'f114_Core.php';
	require 'f114_LogIn_Connect.php';

	//Nese perdoruesi ka mundur te llogohet:
	if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
		echo 'You are logged in.';
	}else{
		//Perndryshe llogohu prap:
		include 'f114_LogIn_Form.php';
	}

	
	//echo $current_file;




?>