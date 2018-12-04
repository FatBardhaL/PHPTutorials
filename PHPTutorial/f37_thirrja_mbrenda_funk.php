<?php
//Vendosim IP adresen
 $user_ip = $_SERVER['REMOTE_ADDR'];

function emri(){
 global  $user_ip;                                          //rreshti qe ta mundeson qasjen mbrenda funksionit
 $string = 'Your IP address is:'.$user_ip;
    echo $string;
}

    emri();

?>