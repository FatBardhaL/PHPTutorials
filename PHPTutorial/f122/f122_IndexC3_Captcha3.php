<?php
		//Gjenerojm Sesionin qe eshte ne f122_Captcha3.php
	// include ('f122_Captcha3.php');

	@session_start();

	$_SESSION['secure'] = rand(1000,9999);

	$file = "f122_Captcha3.php";

?>

	<!-- Shfaqim IMAZHIN -->
<img  src="<?php echo $file; ?>" />
<?php
	echo $_SESSION['secure'];
?>