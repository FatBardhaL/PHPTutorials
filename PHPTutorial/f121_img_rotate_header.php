<?php
	header('Content-type: image/jpeg');
	//Krijojm apo marim foton ne nje variabel:
	$img = imagecreatefromjpeg("images.jpg");
		//imagerotate($img, 45shkall, -1);
	$img_rotated = imagerotate($img, 320, 0);
		//ndertojm imageJPEG:
	imagejpeg($img_rotated);

	
							//Por nese deshirojm qe  ate foto te kthyer ta ruajm ne ate fajll ateher perdorim:
								//imagejpeg($img_rotated,"imagesRotate.jpeg",100kualiteti);
								//imagejpeg($img_rotated,"imagesRotate.jpeg",100);
?>
