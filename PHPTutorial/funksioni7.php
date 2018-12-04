<?php
	require 'f106_connect.inc.php';


	const BR = '</br>';

	function multiply($one,$two){
		return $one * $two;
	}



		
		//Deklarimi i nje variable globale:
	function print_info(array $info,$color = 'lightgrey',$cellpadding = 10){
		global $variabla_globale;
		$variabla_globale ="</br>Kjo eshte nje variabel globale.";

		$local = '$local: I live only inside the function!';
		echo BR;
		echo "<table bgcolor='$color' border='3'"
			 		."bordercolor='black' cellpadding='$cellpadding'"
			 		."cellspacing='0'>";

			foreach ($info as $key => $value) {
				echo '<tr><td>'.ucwords($key).'</td>'
					.'<td>'.$value.'</td></tr>';
			}

			if ($info['age']>21) {
				echo  '<tr>'
					 .'<td>Alcohol</td>'
					 .'<td>Alcohol</td>'
					 .'</tr>';
					 //3)Calling function from within a function(functions have global scope)
				echo  '<tr>'
					 .'<td>Random</td>'
					 .multiply(rand(1,50),rand(1,50))
					 .'</td>'
					 .'</tr>';
			}
		echo "</table>";
		echo $local;
	}

	$arrayName = array('emri' => 'Bardha', 'mbiemri' => 'Lutolli','email' => 'Bardha.l', 'mb' => 'Lutolli','age' => '50');
	//Tabela e pare afishohet ketu:
	print_info($arrayName,'lightblue','30');





	$emri_i_funksionit = 'print_info';
	//Tabela e dyte afishohet ketu:
	echo BR;
	$emri_i_funksionit($arrayName,'pink','10');
	echo BR.$variabla_globale;
?>