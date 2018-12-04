<?php
	move_uploaded_file($_FILES['file']['tmp_name'],'f121_uploads'.$_FILES['file']['name']);
	$orgfile='f121_uploads'.$_FILES['file']['name'];
	list($width,$height)=getimagesize($orgfile);
	$newfile=imagecreatefromjpeg($orgfile);
	$newwidth=$width*0.25;
	$newheight=$height*0.25;
	$thumb = 'f121_uploads'.$_FILES['file']['name'];
	$truecolor = imagecreatetruecolor($newwidth, $newwidth);
	imagecopyresampled($truecolor, $newfile, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
	imagejpeg($truecolor,$thumb,100);

	echo '<img src="'.$thumb.'"  > ';

?>