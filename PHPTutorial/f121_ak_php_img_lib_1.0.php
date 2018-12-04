<?php
	//Funksioni per dimensionimin e imazheve jpg, gif ose png
function ak_img_resize($target,$newcopy,$w,$h,$ext){
		//Ketu meren width dhe height i fotos origjinale te zgjedhur
	list($w_orig,$h_orig) = getimagesize($target);
		//PSH   600/400=1.5
	$scale_ratio = $w_orig/$h_orig;
				//OSE
		//$getimagesize = getimagesize($target);
		//$w_orig =$getimagesize[0];
		//$h_orig =$getimagesize[1];

	//ketu therrasim vlerat width dhe height te madhesis qe ne ja caktojm 200 y 150= 1,33
	//sepse $w y $h jane vlera qe ja dhejme ne funksionit ,
	//ne menyr qe me ato vlera ti ndryshojm vlerat origjinale te fotos
	//if (($w/$h)>$scale_ratio)
	//if ((200 y 150= 1,33)> 600/400=1.5)
	if (($w/$h)>$scale_ratio) {
			//$w=150*1.5=225
		$w=$h*$scale_ratio;
	}else{
		//$h=200*1.5=133
		$h=$w*$scale_ratio;
	}

	$img="";
	$ext = strtolower($ext);
	if ($ext=="gif"||$ext=="GIF") {
		$img=imagecreatefromgif($target);
	}else if ($ext=="png"||$ext=="PNG") {
		$img=imagecreatefrompng($target);
	}else{
		$img=imagecreatefromjpeg($target);
	}
		//imagecreatetruecolor= krijon nje drejtkendesh me ngjyr te zez me permasa $w,$h
	$tci = imagecreatetruecolor($w,$h);
	//imagecopyresampled(dst_image, src_image, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
	imagecopyresampled($tci,$img,0,0,0,0,$w,$h,$w_orig,$h_orig);
	//imagejpeg($ImazhiIRivendosur,$PathFileName,$Quality=80);
	imagejpeg($tci,$newcopy,100);
}
?>