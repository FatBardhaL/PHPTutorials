<?php
/*
substr_replace(); = ben gjetjen dhe zavencimin e fjales
substr_replace(); mer 4 argumente
1.stringun e pare qe deshirojm ta gjejm
2.stringun qe deshirojm ta zavendesojm
3.nga ku deshirojm te startojm
4.ku deshirojm te perfundojm


substr_replace(); eshte kombinim i 
        substr(kthen vendodhen e stringut); dhe 
        str_replace(e cila e gjen stringun dhe e zavendeson)
*/


    $string = 'This part don\'t search.This part search.';
    

    /*
      1. vetem e shkruajm at string qe eshte fjala
      2. Pastaj fjalen qe kemi per ta kerkuar
      3. Dhe nga te fillojm.Kemi cek qe mbas fjales se dyte this qe i bjen 28
      4. Gjatesin e fjales qe jemi duke e kerkuar.Ne rastin tone fjala part=4
    
    
    */

    $string_new = substr_replace($string,'FjalaZavendesuesE',28,4);   
                                    
    echo $string_new;


?>