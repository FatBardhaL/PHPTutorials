<?php
//If this day is weekend day
    $day = 'Monday';
    
    switch($day){
            case 'Saturday';
            case 'Sunday';
                echo 'It\'s a weekend day';
            break;
            default;
                echo 'Not a weekend';
            break;
    }
?>