<?php
		//Gjenerojm Sesionin qe eshte ne f122_Captcha3.php
	 

	@session_start();

		// Krijojm funksionalitetin kur te shtypet butoni SUBMIT:
	if (!isset($_POST['secure']) || empty($_POST['secure'])){
			//Nese nuk eshte shtypur butoni dhe nese inputi eshte i zbrazet,
			//ateher gjenero prap nje random numer:
		$_SESSION['secure'] = rand(1000,9999);
	}else{
		if ($_SESSION['secure'] ==$_POST['secure']){
			echo "ok";
		}else{
			echo "Incorrect, try again.";
			$_SESSION['secure'] = rand(1000,9999);
		}
	}

	$_SESSION['secure'] = rand(1000,9999);
	$file = "f122_Captcha4.php";

?>

<br/>
	<!-- Shfaqim IMAZHIN -->
<img  src="<?php echo $file; ?>" />

<!-- Krijojm nje FORM e cila bene SUBMIT ne kete faqe  f122_IndexC4_Captcha4.php.-->
<form action="f122_IndexC4_Captcha4.php" method="POST">
	<h4>Type the value you see:</h4>
	<input type="text" size="6" name="secure">
	<input type="submit" value="Submit" name="">
</form>