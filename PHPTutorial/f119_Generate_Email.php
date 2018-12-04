<?php
	//Ndryshojm tipin e te dhenave(e bejme vetem per foto):
	//Kjo e bene te mundur qe gjithqka te paraqitet si foto(html nuk funksionon(nuk shfaqet)):
	header('Content-type: image/jpeg');

	$conn = mysqli_connect('localhost','root','');
	mysql_select_db('email');	
	if($conn){
	}else{
		die(mysql_error());
	}
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query="SELECT `email` FROM `email_data` WHERE `id`='".mysql_real_escape_string($id)."'";
		$query_run = mysqli_query($conn,$query);
		if($query_run){
				$query_num_rows = mysqli_num_rows($query_run);
				if($query_num_rows==0){
					echo $email ='ID not found.';
				}else if($query_num_rows==1){
					while ($row = mysqli_fetch_assoc($query_run)){
						$email= $row['email'];
						echo $email.' ';
					}
				}
		}else{
				echo 'Nuk ka mundur te lidhet me database. '.mysql_error();
		}
	}else{
		$email = 'No ID specified.';
	}



		//Gjejm gjatesin e $email 
		//p.sh gjatesia=4 ku 4X5px = 20px
	$email_length = strlen($email);	//Afishon gjatesin=19
		//Caktojm fontin me te zakonshem
	$font_size = 4;  
		//ImageFontHeight() cakton lartesin e fontit
		//Height mundet me qene i njejt me $email_length sepse 
		//nuk deshirojm ta ndertojm me te madhe se vet teksti
	$image_height = ImageFontHeight($font_size);
		//Caktojm width gjersin e fotos duke e shumzuar me $email_length 
	$image_width = ImageFontWidth($font_size) * $email_length;
		//imagecreate() bene ndertimin e imazhit
	$image = imagecreate($image_width, $image_height );
		//Ndersa Image string shfaq string horizontal 
		//Caktojm ngjyren e backgound-it:
	imagecolorallocate($image, 255, 255, 255);
		//Caktojm ngjyren e tekstit:
	$font_color = imagecolorallocate($image, 0, 0, 0);
		//Ndertojm nje image nga stringu: imagestring(image, font, x, y, string, color)
	imagestring($image, $font_size, 0, 0, $email, $font_color);
		//Ne fund caktojm tipin e ketij imazhi:
	imagejpeg($image);
		
?>
