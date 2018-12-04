<?php
		//Gjenerojm Sesionin qe eshte ne f122_Captcha1.php
	// include ('f122_Captcha1.php');

	@session_start();

	$_SESSION['secure'] = rand(1000,9999);

	$file = "f122_Captcha1.php";

?>

	<!-- Shfaqim IMAZHIN -->
<img  src="<?php echo $file; ?>" />