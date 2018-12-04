<?php


//Teksti qe ka per tu kontrolluar
    $string ='This have a space';


//Funksioni 1
    function has_space(){

        if(preg_match('/ /',$string)){

            return true;
        }else{
            return false;
        }
    }


//Teksti qe ka per tu kontrolluar
    $string ='This have a space ';

//Thirrja e atij funksioni
        if (has_space($string)){
            echo 'Has at least one space.';
        }else{
            echo 'Has no spaces.';
        }

?>