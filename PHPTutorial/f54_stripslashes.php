<?php


//stripslashes= kjo metos i qet hjek \\ para cdo presje qe i kemi vendosur me addslashes

$string = 'This is a <img src="image.jpg"> string.';

$string_slashes = htmlentities(addslashes($string));

echo stripslashes($string_slashes);

?>