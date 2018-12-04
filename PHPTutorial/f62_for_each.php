<?php
    
//for each= eshte diqka qe kalon neper secilin element

$food =array('Healthy:'=>
                            array('Pasta','Salad'),
             'Unhealthy:'=>
                            array('Pizza','Ice Cream','Popcom'));                

//Ketu ndertojm kushtin foreach  
//$food eshte vektori me te gjitha elementet
//$element eshte (Healthy dhe Unhealthy)
//$inner_array eshte komplet array('Pasta','Salad') dhe array('Pizza')
//$item i perfaqeson elementet:Pasta,Salad dhe Pizza

foreach($food as $element => $inner_array){
    echo '<strong>'.$element.'</strong><br>';
    //echo $inner_array.'<br>';//Ketu na shfaqet vetem 2 array-jat por jo edhe elementet mbrenda saj.Keshtu qe per kete ndertojm edhe nje foreach tjeter
    
    foreach($inner_array as $item){
        echo $item.'<br>';
        
    }
}


?>