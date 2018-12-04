<?php
		//Ndryshojm tipin e faqes ne foto:
	header('Content-type: image/jpeg');

		//Marja e parametrave nga perdoruesit:
	//if (isset($_GET['source'])) {
		echo $source=$_GET['source'];
			//Ndertojm foton images.jpeg:
		$watermark = imagecreatefrompng('f121_uploadsDesert.jpg');
			//imagesx()=mer width-in e imazhit:
		$watermark_width = imagesx($watermark);
			//imagesy()=mer height-in e imazhit:
		$watermark_height = imagesy($watermark);

		//Ketu e vendosim canvas-in:

			//imagecreatetruecolor()= e nderton ngjyren e imazhit:
		$image = imagecreatetruecolor($watermark_width, $watermark_height);
			//Ndertojm foton nga burimi i juaj:
		$image = imagecreatefromjpeg($source);
			// getimagesize()= mer madhesin e imazhit
			//getimagesize() nuk eshte GD funksion por funksionon edhe pa GD :
		$image_size = getimagesize($source);

		//Caktojm pozicionin:

			//10px bottom:
		$x = $image_size[0] - $watermark_width -10;
		$y = $image_size[1] - $watermark_height -10;

			//Kombinimi i imazheve:
			//imagecopymerge(dst_im, src_im, dst_x, dst_y, src_x, src_y, src_w, src_h, pct)
		//imagecopymerge($image, $watermark, $x, $y, $watermark_width, $watermark_height, 60);
		imagecopymerge($image, $watermark, $x, $y, $watermark_width, $watermark_height, 60);
			//imagejpeg()=vendos foton ne faqe:
		imagejpeg($image);
				//OSE 
		//imagejpeg($image, $source.'.watermark.jpg.');
	//}




?>
