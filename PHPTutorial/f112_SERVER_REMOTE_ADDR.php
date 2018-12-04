<?php
	require 'f106_connect.inc.php';

					//Duhet ndertuar nje metod per ti ruajtur IP, e pastaj ti krahasojm nese ekziston IP e ardheshme ne kete list.
					//Nese nuk ekziston numri i IP shtohet per ++1

	//Per te marur nje user IP:
	$user_ip = $_SERVER['REMOTE_ADDR'];

	echo '<br/>IP e juaj eshte: '.$user_ip;

?>