<?php
		//Exception=jane disa perjashtime qe merren me trajtimin e erroreve.
		//Exception=zakonisht e ndryshojn rrjedhjen e programit.
	
	//Paraqesim nje funksion qe merret me pjestimin e dy numrave:
	function divide($num1,$num2){
		//Ketu te pjestimi kemi problen me pjestimin e nr. me 0
		//$num2 nuk mund te jet = 0
		//Dhe kete e rregullojm me Exception
		if ($num2==0) {
			throw new Exception("Can not divide by zero.");
		}else{
			return $num1/$num2;
		}
	} 

	echo divide(10,0);


?>