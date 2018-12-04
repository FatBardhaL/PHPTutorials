<?php

//require = eshte metod e cila ben futjen e headerit apo thirrjen e ndonje fajlli tjeter
//Por dallimi i san perkunder include qendron se ne require nuk shfaqet asgje nese ky fajll nuk mund te lidhet me fjallin e headerit apo ndonje fajlli tjeter qe deshirojm ta lidhim


require 'f64_permbajtjaEfajllit.php';


$mysql_file = 'f106_connect.inc.php';

require $mysql_file;

echo "<br> Eshte lidhur me ".$mysql_file;


?>