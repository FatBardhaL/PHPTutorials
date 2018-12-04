<?php
		//Gjenerojm Sesionin qe eshte ne f122_Captcha1.php
	session_start();
	$_SESSION['secure'] = rand(1000,9999);


		//Shfaqim IMAZHIN
	<img  src="f122_Captcha1.php"/>

