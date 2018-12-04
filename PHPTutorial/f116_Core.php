<?php
	ob_start();
	session_start();

		//Kjo e jep fajllin ne te cilen thirret.PSH nese kjo variabel thirret (echo $current_file;) ne f116_LogOut_Index.php
		//Ateher kjo jep: D:/xampp/htdocs/thenewboston/f116_LogOut_Index.php
	//$current_file = $_SERVER['SCRIPT_FILENAME'];

		//Kjo jep emrin e fajllit nga i cili thirret (echo $current_file;) duke u nisur nga(ne f116_LogOut_Index.php)fajlli ne htdocs
		//Ateher kjo jep: thenewboston/f116_LogOut_Index.php
	$current_file = $_SERVER['SCRIPT_NAME'];
		//Kjo na tregon faqen se nga vime (f116_LogOut_Index.php):
	$http_referer = $_SERVER['HTTP_REFERER'];

	function loggedin(){
		if(isset($_SESSION['user_id'])&& !empty($_SESSION['user_id'])){
			return true;
		}else{
			return false;
		}
	}

	//funksioni qe mer disa fusha nga databaza varesisht nga ID
	//Ketu na duhet emri i fushes:
	function getuserfield($field){
		//echo $_SESSION['user_id'];
			//Mer fushen e id se selektuar:
		$query = "SELECT `$field`,`id`,`firstname`,`surname`
				  FROM `users`
				  WHERE `id`='".$_SESSION['user_id']."'
				  ";
		global $conn;
		if($query_run =mysqli_query($conn,$query)){
			//return mysql_result($query_run,0,$field);
			while ($row=mysqli_fetch_assoc($query_run)){
				//$field = $row['$field'];
				$id = $row['id'];
				$firstname = $row['firstname'];
				$surname = $row['surname'];
				//return $field.$id.$firstname.$surname;
				return $firstname.' '.$surname;
			}
		}else{
			echo "query_run nuk funksionon.";
		}
	}


?>