<?php

//&&

$number = 654;
    $upper = 1000;
    $lower = 500;

    if($number >=$lower && $number<=$upper){
        echo 'OK';
    }else{
           echo 'Number must be between '.$lower.' and '.$upper;
        
    }

echo '<br><br><br>';
//  '||'    
    $number = 4;
    $canbe1 = 2;
    $canbe2 = 4;

    if(!($number==$canbe1) || !($number == $canbe2)){
        echo 'OK';
    }else{
        echo 'Not OK';
    }

?>