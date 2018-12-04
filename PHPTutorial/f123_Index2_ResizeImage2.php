<?php

//Ketu ne kete code do te marim madhesin e imazhit te dhene

		//H1:Kthejm permbajtjen e faqes ne IMAZH jpeg
	header('Content-type:image/jpeg');
		//H2:Kontrollojm se a ka inpute:
	if (isset($_GET['image'])) {
			//H3:E ruajm imazhin ne nje variabel
		$image = $_GET['image'];
			//H4:Marrim madhesin e imazhit:
				//Kur perdorim GET['image'] size function
				//ne realisht ne kete rast krijojm nje array
				//vektor-array e madhesive, dimensioneve te imazhit
		$image_size = getimagesize($image);
			//Pasi $image_size eshte vektor ateher
				//$image_size[0] merr widthin e imazhit te dhene
				//$image_size[1] merr height e imazhit te dhene
		$image_width = $image_size[0];
		$image_height = $image_size[1];
			//Ricaktojm madhesin e imazhit
			//Dhe per te mos ta deformuar IMAZHIN
			//Ricaktimin e madhesis se tij e bejme duke perdorur disa llogaritje ne varjablen $new_size
		$new_size = ($image_width + $image_height)/($image_width * ($image_height/45));

		$new_width = $image_width * $new_size;
		$new_height = $image_height * $new_size;

		echo $new_width."  ".$new_height;
	}

?>