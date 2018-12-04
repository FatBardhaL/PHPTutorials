<?php
//String shafell funksion i perzien shkronjat e atij teksti

$string = 'abcdefghijklmnop0123456789';

$string_shuffled = str_shuffle($string);

$half = substr($string_shuffled,0,strlen($string));

echo $half;




?>