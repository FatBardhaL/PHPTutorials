<?php
//Krahasimi i dy stringjeve per te kerkuar ngjajshmeri


//Se pari ndertojm dy stringje
$string_one = 'This is my essay. I\'m going to be talking about php.';
$string_two = 'This is my essay. I will be talking about the subject php.';


similar_text($string_one, $string_two, $result);

echo 'The similarity between is: '.$result; //Ketu e jep rezultatin se sa perqind jan te ngjejshem

?>