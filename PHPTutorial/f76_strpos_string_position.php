<?php
/* strpos zakonisht i mer tri argumente
    1.stringu qe deshirojm ta kerkojm
    2.fjala kyqe qe deshirojm ta gjem ne string
    3.offset = tregon se nga duhet me u nis, by defaoul do te niset nga 0
*/
    
    $find = 'is';//E cekim se cilen fjal kemi per ta gjetur
    $find_length = strlen($find);
    $string = 'This is a string, and it is an example.';
    
    //tani per ta gjetur fjalen is i jepim tri parametrat
    //Kjo na shfaq 2 qe dmth fillon ne pozicionin e dyte te shkruhet is
    //Por kjo nuk na tregon se ku jane is tjere, por tregon vetem per te parin
    echo    strpos($string,$find,0);


?>