<?php
	require 'f106_connect.inc.php';


	const BR = '</br>';
		
		//Deklarimi i array para variables ben te mundur qe cdo vler te konvertohet ne array
	function print_info(array $info){
		echo BR;
		echo "<table bgcolor='pink' border='3'"
			 		."bordercolor='black' cellpadding='10'"
			 		."cellspacing='0'>";

			foreach ($info as $key => $value) {
				echo '<tr><td>'.ucwords($key).'</td>'
					.'<td>'.$value.'</td></tr>';
			}
		echo "</table>";
	}

	$arrayName = array('emri' => 'Bardha', 'mbiemri' => 'Lutolli','email' => 'Bardha.l');
	print_info($arrayName);
?>