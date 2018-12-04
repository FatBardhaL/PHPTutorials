<?php
	require 'f106_connect.inc.php';

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
		
	}
	function ip_add($ip){
		global $user_ip;
		$query = "INSERT INTO `a_database`.`hits_ip`(`ip`) VALUES ('$ip')";	
		@$query_run = mysql_query($query);
	}
			//Se pari ndertojm nje funksion per te gjetur IP dhe ate pastaj e ruajm ne database
	function update_count(){
			//Ky funksion ka per detyr te mer vleren e IP dhe ta ruaj ne database
		
			$query = "SELECT `count` FROM `a_database`.`hits_count`";

				//$query_run=mysql_query($query);
			if(@$query_run=mysql_query($query)){
	
					$count = mysql_result($query_run,0,'count');
					$count_inc = $count	+ 1;
					$query_update = "UPDATE `hits_count` SET `count`='$count_inc'";
					@$query_update_run = mysql_query($query_update);
					echo $count;

			}
	}
ip_add($user_ip);
update_count();

?>