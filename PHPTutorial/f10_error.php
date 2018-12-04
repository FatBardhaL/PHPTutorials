<!--Duhet shkruar te xammp dhe ta hapim follderin php, pastaj fajllin php.ini
Ne kete fajll duhet lypur teksti :
    error_reporting = 0;
dhe duhet ta ndryshojm ate ne error_reporting = E_ALL-->


<?php

    error_reporting(E_ALL);
//ose
    ini_set('error_reporting',E_ALL);

    echo    $var = 'Bardha';
            $var = 'Lutolli';
?>