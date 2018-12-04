<?php
		//Ketu nuk do te gjuajm vetem perjashtime,
		//por se pari do ta marim(catch),analizojm(try)
		//dhe ne fund e leshojm perjashtimin(throw)
	$age = 16;

	try{
		if($age>18){
			echo "Old enough.";
		}else{
			throw new Exception("Not old enough.");
		}
	}catch(Excaption $ex){
				//catch(marimExcaptin=$EruajmNeNjeVariabel){}
						//->getMessage()= e thirr mesazhin e 
										//throw new Exception("Not old enough.", 1);
		echo "Error:".$ex->getMessage();
	}
?>