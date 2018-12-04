<?php
	$imageURL = "BardhaLLogo5Shine.png";
		list($width,$height) = getimagesize($imageURL);
	$imageProperties = imagecreatetruecolor($width, $height);
	$targetLayer = imagecreatefrompng($imageURL);
		imagecopyresampled($imageProperties, $targetLayer, 0, 0, 0, 0, $width, $height, $width, $height);
	$WaterMarkText = 'BardhaL';
	$watermarkColor = imagecolorallocate($imageProperties, 191,191,191);
		imagestring($imageProperties, 5, 330, 317, $WaterMarkText, $watermarkColor);
		header('Content-type: image/jpeg');
		imagepng ($imageProperties);
		imagedestroy($targetLayer);
		imagedestroy($imageProperties);
?>