<?php
		@session_start();
			//HAPI1: Ndryshojm permbajtjen e fajllit ne IMAZH
		header('Content-type: image/jpeg');

			//Variablar
			//Hapi2:Tekstin e kthejm ne IMAZH
		$_SESSION['secure'] = rand(1000,9999);
		$text = $_SESSION['secure'];
			//H3:Krijojm nje variabel per madhesin e shkronjave
		$font_size = 30;
			//H4:Gjatesia dhe gjersia e IMAZHIT
		$image_width = 100;
		$image_height = 40;
			//H5:Krijon imazhin si pjes e GD libraris
		$image = imagecreate($image_width,$image_height) or die ("Cannot Create image"); 
			//H6:Caktojm ngjyren e bardhe per prapavij #ffff;
		imagecolorallocate($image, 255, 255, 255);
			//H7:Ngjyra e tekstit  e zeze= #0000;
		$text_color = imagecolorallocate($image, 0, 0, 0);
			//H8:Perfshijm TTF fontin e tekstit te IMAZHIT
				//angle=0;	x=15;	y=30;	
				//fontfile = Cedarville-Cursive.ttf;
				//$text= teksti i Captcha
		imagettftext($image, $font_size, 0, 15, 35, $text_color,'Cedarville-Cursive.ttf', $text);

		imagejpeg($image);


?>