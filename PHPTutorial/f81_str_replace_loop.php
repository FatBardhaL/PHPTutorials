<?php
/*  str_replace();= marin 3 argumente
    3.stringu qe e permban fjalen
    1.fjala specifike qe do ta kerkosh
    2.fjala qe deshirosh ta zavendesosh
    Keshtu qe:
                str_replace(looking for, to replace, string);
    
*/
//zakonisht kjo menyr sherben per ti larguar fjalet e ndyta nga chat-i

        $find = array('is','string','example');
        $replacee = array('IS','STRING','');
        
        $string = 'This is a string, and is an example.';
        $new_string = str_replace($find,$replacee,$string);

        echo $new_string;


?>