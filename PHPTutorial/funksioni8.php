<?php
	require 'f106_connect.inc.php';


	const BR = '</br>';		
	echo BR."Funksioni qe e thirr vetveten:".BR;
		//Recursive functions:
	function recursion($a){
		if($a <= 10){
				//\n e vendosim per me pas hapsit rreth numrit
			echo "$a\n";
			recursion($a + 1);
		}
	}
	recursion(0);


?>