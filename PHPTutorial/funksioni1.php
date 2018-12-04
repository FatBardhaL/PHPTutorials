<?php
	require 'f106_connect.inc.php';


	const BR = '</br>';
		
		//Ndertojm funksionin me dy parametra qe ben shumzimin e dy numrave:
	function multiply($one,$two){
		return $one * $two;
	}
	function multiply2($one,$two){
		return $one - $two;
	}
	echo BR;
	echo "Shuma 1*2=".multiply(1,2);
	echo BR;
	echo "Shuma 2*3=".multiply(2,3);



	echo BR;
	echo "Zbritja 8-4=".multiply2(8,4);
?>