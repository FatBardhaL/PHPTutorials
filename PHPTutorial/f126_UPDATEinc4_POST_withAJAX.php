<?php
	mysql_connect('localhost','root','');
	mysql_select_db('thenewbostonajax');	
		//Nese eshte vendosur:
	if(isset($_POST['text'])){
		//echo "Lidhja me database eshte OK";
		$text = $_POST['text'];
			//Kontrollojm nese nuk eshte e zbrazet:
		if (!empty($text)) {
			//echo $text;
				//Tekstin e shtypur e fusim ne database:
			$query = "INSERT INTO `data` VALUES('','".mysql_real_escape_string($text)."')";
			if($query_run = mysql_query($query)){
				echo "Data inserted: ".$text;
			}else{
				echo "query_run hase faild.";
			}
		}else{
			echo "Ju lutem shtypni tekst.";
		}
	}
	
?>