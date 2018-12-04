<?php
/* strpos zakonisht i mer tri argumente
    1.stringu qe deshirojm ta kerkojm
    2.fjala kyqe qe deshirojm ta gjem ne string
    3.offset = tregon se nga duhet me u nis, by defaoul do te niset nga 0
*/
    $offset = 0;
    $find = $_GET['tofind'];//Fjalen qe deshirojm ta gjem e marum prej inputit
    $find_length = strlen($find);
    $string = 'This is a string, and it is an example.';
    
    //tani per ta gjetur fjalen is i jepim tri parametrat
    //Kjo na shfaq 2 qe dmth fillon ne pozicionin e dyte te shkruhet is
    //Por kjo nuk na tregon se ku jane is tjere, por tregon vetem per te parin
    while($string_position = strpos($string,$find,$offset)){
        
        echo '<strong>'.$find.'</strong> found at '.$string_position.'<br>';
        
        //Kete e bejm qe te vazhdoj ta kerkoj fjalen edhe me poshte.
        $offset = $string_position + $find_length;
        
    }


?>

<form action="f78_strpos_find_inForm.php" method="GET">

    <input type='text' name="tofind">


</form>