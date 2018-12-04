<?php

    $time = time();
    //Deshirojm ta paraqesim daten e nje jave perpara keshtu qe e kthejm 20 dit mbrapa
           
    $time_now = date('d m Y @ H:i:s',$time).'<br>';
    $time_modified = date('d m Y @ H:i:s',$time-(24*30*30));
    

    echo 'Koha tani eshte:  '.$time_now.' Ndersa pas 24ore e 30min e 30sec eshte: '.$time_modified;

?>