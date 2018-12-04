<?php

    $time = time();
    //Deshirojm ta paraqesim daten e nje jave perpara keshtu qe e kthejm 20 dit mbrapa
           
    $time_now = date('d m Y @ H:i:s',$time).'<br>';
    $time_modified = date('d m Y @ H:i:s',$time-60);
    

    echo 'Koha tani eshte:  '.$time_now.' Ndersa koha e modifikuar(60sec=1min) eshte '.$time_modified;

?>