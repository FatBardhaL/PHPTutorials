<?php

//Se pari marim tekstin e dhene nga inputi:
	if (isset($_GET['search_text'])) {
		$search_text = $_GET['search_text'];
	}

	if(mysql_connect('localhost','root','')){
		if (mysql_select_db('thenewbostonajax')) {
			echo "Lidhja me database eshte: OK.<br/>";	
				//Nese deshirojm ti shfaqim te gjith emrat qe kan ndonje a:
					//search_text=a => LIKE %$search_text%
				//Nese deshirojm ti shfaqim te gjith emrat qe fillojn me a e pastaj me shkronja tjera:
					//search_text=a => LIKE  $search_text%
			$query = "SELECT `name` FROM `names` WHERE `name` LIKE '".mysql_real_escape_string($search_text)."%' ";
			$query_run = mysql_query($query);
				//Per ti shfaqur rezultatet e arritura perdorim While loop:
			while ($query_row = mysql_fetch_assoc($query_run)) {
				$name = $query_row['name'].'<br/>';
				echo $name;
			echo	$name = '<a href="anotherpage.php?search_text='.$query_row['name'].'">'.$query_row['name'].'</a><br/>';
			}
		}
	}


?>