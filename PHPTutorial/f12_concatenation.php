<!--Concatenation eshte bashkim i diqkaje pran diqkaje tjeter-->

<?php
        $day = 'Thursday';
        $date = '31';
        $year = 2011;
        
echo 'RR1: The date is Thursday 31 2011<br>';
//Ose
echo 'RR2: The date is '.$day.' '.$date.' '.$year.'<br>';
echo 'RR3: The date is <strong>'.$day.' '.$date.' '.$year.'</strong>';
echo '<br>';
//Nese i vendosim '' ateher shfaqet The date is $day $date $year
//Per kete arsye vendosim ""
echo "RR4: The date is $day $date $year";


?>