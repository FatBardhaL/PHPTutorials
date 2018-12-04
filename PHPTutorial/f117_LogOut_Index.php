<?php
	require 'f117_Core.php';
	require 'f114_LogIn_Connect.php';

	//Nese perdoruesi ka mundur te llogohet:
	if (loggedin()){
		$getuserfield = getuserfield('firstname');
		echo 'You are logged in.'
			 .'<br/>'
			 .'Wellcome|Mirsevini '
			 .$getuserfield
			 .'<br/>'
			 .'<a href="f117_LogOut_Button.php">Log Out</a>'
			 .'<br/>';
		//getuserfield();
						//Terheq firstname te perdoruesit
		//echo "Mirsevini ".getuserfield('firstname');
	}else{
		//Perndryshe llogohu prap:
		include 'f117_LogOut_Form.php';
	}

	
	//echo $current_file;




?>