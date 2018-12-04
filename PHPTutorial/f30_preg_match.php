<?php
// preg_match();
//Kete funksion mund ta perdorim per te kontrolluar ekzistencen e stringut mbrenda stringut
// preg_match();   nuk te tregon se ku eshte gjetur ajo fjalo por e kthen si 1 nese eshte gjetur dhe si 0 nese nuk eshte gjetur ajo fjali ne ate tekst
$string = 'This is a string';
   
if(preg_match('/is/',$string)){
    echo 'Match found.';
}else{
    echo 'Match not found.';
}

?>