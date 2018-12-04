<!--      
	***Ne do te perdorim funksionin move_uploaded_file($tempFile,$uploadTo);
			Ky funksion eshte funksion i fajllave te sistemit dhe nuk eshte pjes e GD libraris:
	***Do te perdorim variablen globale $_FILES per fajllat qe do te uplodohen
	***Do te ndertojm variabla lokale nga $_FILES array(vektori) per ato informata
-->
<?php
		//The file name:
	$fileName = $_FILES["uploaded_file"]["name"];
		//File in the PHP tmp folder
	$fileTmpLoc = $_FILES["uploaded_file"]["tmp_name"];
		//The type of file
	$fileType = $_FILES["uploaded_file"]["type"];
		//File size in bytes
	$fileSize = $_FILES["uploaded_file"]["size"];
		//0=false dhe 1=true
	$fileErrorMsg = $_FILES["uploaded_file"]["error"];
//--------------------------Start PHP Image Upload Error Handling---------------------------------
	if (!$fileTmpLoc) {
		//Kur nuk selektohet nje fajll
		echo "ERROR:Please browse for a file before clicking the upload button.";
		exit();
	}else if ($fileSize > 5242880) {
		//Ketu e caktojm se sa duhet me qene madhesia per uploadim
		//if file size is larger than 5 Megabytes
		echo "ERROR:Your file was larger than 5 Megabytes in size.";
		//Remove the uploaded file from the PHP temp folder
		unlink($fileTmpLoc);
		exit();
	}else if (!preg_match('/\.(gif|jpg|png)$/i', $fileName)) {
		//This condition is only if you wish to allow uploading of specific file types
		echo "ERROR:You image was not .gif , .jpg , .png";
		//Remove the uploaded file from the PHP temp folder
		unlink($fileTmpLoc);
		exit();
	}else if ($fileErrorMsg==1) {
		//if file upload error key is equal to 1
		echo "ERROR:An error occured while processing the file.Try again.";
		exit();
	}
//End PHP Image Upload ERROR Handling---------------------------------
//Place it into your 'uploads' folder now useing the move_uploaded_file($tempFile,$uploadTo); function
//move_uploaded_file($tempFile,$uploadTo) zhvendos fajllin nga $tempFile ne "f121_uploads/$fileName"
	//dhe kthen TRUE nese kjo arrihet perndryshe FAULSE
	//por se pari ndertojm follderin f121_uploads
	//si default nje follder ka 7552 mod setings file attribute
	//default nje follder ka 2GB hapsir per upload dhe kete mund ta ndryshoni duke perdorur SET
//$move_Result =move_uploaded_file($tempFile,$uploadTo);
	$move_Result =move_uploaded_file($fileTmpLoc,"f121_uploads/$fileName");
//Check to make sure the move result is true before continuing
	if ($move_Result != true) {
		echo "ERROR:File not uploaded.Try again.";
		//Remove the uploaded file from the PHP temp folder
		unlink($fileTmpLoc);
		exit();
	}
	//Remove the uploaded file from the PHP temp folder
	//unlink($fileTmpLoc);

//Display things to the page so you can see what is happening for testing purposes
echo "The file named<strong> $fileName </strong>, uploaded successfuly.<br/><br/>";
echo "The file size is <strong>$fileSize</strong>, uploaded successfuly.<br/><br/>";
echo "It is an <strong>$fileType</strong> type of file.<br/><br/>";
echo "The ERROR Message output for this upload is:$fileErrorMsg";



?>