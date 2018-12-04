<?php
		@session_start();
		// $_SESSION['secure'] = "BardhaL";
		$_SESSION['secure'] = rand(1,9999);
		$secure = $_SESSION['secure'];
		$handle = ImageCreate (400, 400) or die ("Cannot Create image"); 
		$bg_color = ImageColorAllocate ($handle, 176, 26, 72); //green
		$font_color = ImageColorAllocate ($handle, 255, 255, 255);
		$font = 'Cedarville-Cursive.ttf';  // your font path goes here....

		header('Content-Type: image/png');
		// imagettftext($handle, 20, 0, 10, 20, $bg_color, $font, $secure);
		imagettftext($handle, 20, 7, 130, 220, $font_color, $font, $secure);

		ImagePng($handle);




?>