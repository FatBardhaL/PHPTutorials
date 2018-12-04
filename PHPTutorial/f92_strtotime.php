<?php

    $time = time();
    //Deshirojm ta paraqesim daten e nje jave perpara keshtu qe e kthejm 20 dit mbrapa
           
    $time_now = date('d m Y @ H:i:s',$time).'<br>';
    $time_modified = date('d m Y @ H:i:s',strtotime('1 week'));
    

    echo 'Koha tani eshte:  '.$time_now.' Ndersa pas nje jave eshte: '.$time_modified;

?>