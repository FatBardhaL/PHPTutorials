<?php
		
	$mysql_host = 'localhost';
	$mysql_users = 'root';
	$mysql_password = '';
	$mysql_error = 'Fajlli nuk ka mundur te lidhet me database.';
	$mysql_db = 'a_database';

		//Ketu lidhim kete fajll me databaze
		//@ i largon default erroret
	$conn = mysqli_connect($mysql_host,$mysql_users,$mysql_password);
	
		$select_db = mysql_select_db($mysql_db);
	



	if(!@$conn){
		
		die($mysql_error);

	}else{
		echo "Ju jeni lidhur me database";
	}
	

					//Duhet ndertuar nje metod per ti ruajtur IP, e pastaj ti krahasojm nese ekziston IP e ardheshme ne kete list.
					//Nese nuk ekziston numri i IP shtohet per ++1

	//Per te marur nje user IP:
	$user_ip = $_SERVER['REMOTE_ADDR'];

	echo '<br/>IP e juaj eshte: '.$user_ip;



			//Ndertojm nje funksion per te pare se ajo IP a eshte e ruajtur ne databaze
			//	ip_exists('127.0.0.1');  ose   ip_exists($user_ip);
	function ip_exists($ip){
		//global bene te mundur qe variablen qe eshte e deklaruar jasht keti funksioni
		//ta perdorim mbrenda ketij funksioni
		global $user_ip;
		global $conn;
		$query = "SELECT `ip` FROM `hits_ip` WHERE `ip`='$user_ip'";
			if($query_run = mysqli_query($conn,$query)){
				$mysql_num_rows = mysqli_num_rows($conn,$query_run);
				if($mysql_num_rows == 0){
					return false;
				}else if($mysql_num_rows >= 1){
					return true;
				}
			}else{
				echo "</br>Kodi ka ngecut te ip_exists";
			}
	}
	function ip_add($ip){
		global $conn;
		global $user_ip;
		$query = "INSERT INTO `a_database`.`hits_ip`(`ip`) VALUES ('$ip')";	
		@$query_run = mysqli_query($conn,$query);
	}
			//Se pari ndertojm nje funksion per te gjetur IP dhe ate pastaj e ruajm ne database
	function update_count(){
		global $conn;
			//Ky funksion ka per detyr te mer vleren e IP dhe ta ruaj ne database
			$query = "SELECT `count` FROM `a_database`.`hits_count`";
				//$query_run=mysql_query($query);
			if($query_run=mysqli_query($conn,$query)){
				$count = mysqli_result((mysqli_query($conn,$query)),0,'count');
				$count_inc = $count	+ 1;
				$query_update = "UPDATE `hits_count` SET `count`='%".$count_inc."%'";		
				//Ekzekutojm:
				@$query_update_run =mysqli_query($conn,$query_update);
			}else{
				echo "</br> Nuk eshte selektuar count nga tabela hits_count ne database.";
			}
	}

	if (!ip_exists($user_ip)) {
		update_count();
		ip_add($user_ip);
	}

?>