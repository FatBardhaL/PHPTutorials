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

			//Se pari ndertojm nje funksion per te gjetur IP dhe ate pastaj e ruajm ne database
	function update_count(){
			//Ky funksion ka per detyr te mer vleren e IP dhe ta ruaj ne database
		
			$query = "SELECT `count` FROM `a_database`.`hits_count`";

				//$query_run=mysql_query($query);
			if(@$query_run=mysql_query($query)){
				//mysql_result($query_run,$row,$emri_i_tabeles) 
				//perdoret per gjetur rezultatin nga databaza
				//while ($row=mysql_fetch_assoc($query_run)) {
					//$count = $row['count'];
					//echo $count;

					$count = mysql_result($query_run,0,'count');
					echo $count;
				//}
				//$count = mysql_result($query_run,0,'count_ip');
				//	echo $count;

			}//else{
			//	die("<br/> Nuk ka mundur te lidhet me hits_count ");
			//}
	}

update_count();

?>