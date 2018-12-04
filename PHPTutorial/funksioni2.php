<?php
	require 'f106_connect.inc.php';


	const BR = '</br>';
		
		//Deklarimi i array para variables ben te mundur qe cdo vler te konvertohet ne array
	function print_info(array $info){
		echo BR;
		print_r($info);
	}

	$arrayName = array('emri' => 'Bardha', 'mbiemri' => 'Lutolli','email' => 'Bardha.l');
	print_info($arrayName);
?>