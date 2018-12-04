<?php

//addslashes= kjo metos i qet \\ para cdo presje
$string = 'This is a <img src="image.jpg"> string.';

$string_slashes = htmlentities(addslashes($string));

echo $string_slashes;

?>