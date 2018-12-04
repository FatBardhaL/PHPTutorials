<?php
	require 'f106_connect.inc.php';


	const BR = '</br>';
		
		//Deklarimi i array para variables ben te mundur qe cdo vler te konvertohet ne array
	function print_info(array $info,$color = 'lightgrey',$cellpadding = 10){
		echo BR;
		echo "<table bgcolor='$color' border='3'"
			 		."bordercolor='black' cellpadding='$cellpadding'"
			 		."cellspacing='0'>";

			foreach ($info as $key => $value) {
				echo '<tr><td>'.ucwords($key).'</td>'
					.'<td>'.$value.'</td></tr>';
			}
		echo "</table>";
	}

	$arrayName = array('emri' => 'Bardha', 'mbiemri' => 'Lutolli','email' => 'Bardha.l', 'mb' => 'Lutolli','em' => 'Bardha.l');
	//Tabela e pare afishohet ketu:
	print_info($arrayName,'lightblue','30');





	$emri_i_funksionit = 'print_info';
	//Tabela e dyte afishohet ketu:
	echo BR;
	$emri_i_funksionit($arrayName,'pink','10');
?>