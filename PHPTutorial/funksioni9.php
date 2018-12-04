<?php
	require 'f106_connect.inc.php';


	const BR = '</br>';		
	echo BR."Passing function parameters by reference (bashkimi i stringjeve ne variabla te ndryshme):".BR;
		//Passing function parameters by reference:
		// pa & nuk do te funksiononte
	function add_some_extra(&$string){  //allow function to modify its arguments
	
				//add string to existing variable
			$string .='dhe permbajtja e variables se dyte.';

	}
	$str='Permbajtja e variables se pare , ';
	add_some_extra($str);
	echo $str;

?>