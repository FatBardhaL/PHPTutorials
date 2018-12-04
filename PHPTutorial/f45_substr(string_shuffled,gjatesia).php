<?php
//String shafell funksion i perzien shkronjat e atij teksti

$string = 'abcdefghijklmnop0123456789';

$string_shuffled = str_shuffle($string);

//Kjo metod kthen vetem 5 karaktere te cilet zavendesohen me karaktere te tjera vazhdimisht
$half = substr($string_shuffled,0,5);

echo $half;




?>