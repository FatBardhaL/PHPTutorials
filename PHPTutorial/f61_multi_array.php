<?php
    
//https://www.youtube.com/watch?v=TFDALOr-JKg&list=PL442FA2C127377F07&index=38#t=325.924093
                
    //Ketu do ti ndertojm dy kategori
    //Healthy: Salad,Pasta
    //Unhealthy: Pica

$food =array('Healthy'=>
                            array('Pasta','Salad'),
             'Unhealthy'=>
                            array('Pizza'));                

//Ketu permes qelesit e therrasim nje vektor
    
echo $food['Healthy'][0];


?>