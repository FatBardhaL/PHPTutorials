<?php
/*  str_replace();= marin 3 argumente
    3.stringu qe e permban fjalen
    1.fjala specifike qe do ta kerkosh
    2.fjala qe deshirosh ta zavendesosh
    Keshtu qe:
                str_replace(looking for, to replace, string);
    
*/
        $string = 'This is a string, and is an example.';
        $new_string = str_replace('is',' FjalaZe ',$string);

        echo $new_string;


?>