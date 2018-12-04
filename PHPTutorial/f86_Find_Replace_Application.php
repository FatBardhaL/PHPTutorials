<?php
/*  1.Ketu kemi me ndertu nje textarea ku do ta shtypni nje tekst.
    2.Pastaj do ta shkruani nje fjal qe deshironi ta gjeni.
    3.Pastaj fjalen qe e gjeni mund ta zavendesoni.
*/

 //       str_replace($string,$search,$replace);
//Kete funksion kemi per ta ndertuar me substring  substr_replace();
//substr_replace($string,'monkey',3,3);
/*
    if(isset($_POST['text'])&&isset($_POST['searchfor'])&&isset($_POST['replacewith']))
    
    Ky rresht do te kontrolloj kur forma te behet submit:

*/

/*
    if(!empty($text)&&!empty($search)&&!empty($replace))
    
    ku rresht tregon se a kan shtypur ata diqka ne ato fusha
*/
   //kete e kemi marr per tu nisur nga pozicioni 0 kur kemi per te ber search
         $offset = 0;
    if(isset($_POST['text'])&&isset($_POST['searchfor'])&&isset($_POST['replacewith'])){
        //ketu kemi marur te dhenat prej forme
        //Dhe secilen te dhen e kemi ruajtur ne nje variabel
        $text = $_POST['text'];
        $search = $_POST['searchfor'];
        $replace = $_POST['replacewith'];
        //Kjo kthen gjetesin e stringut(fjales qe e kerkon) ne integjer
        $search_length = strlen($search);
        
        
        if(!empty($text)&&!empty($search)&&!empty($replace)){
            while($strpos=strpos($text,$search,$offset)){
                $offset = $strpos +$search_length.'<br>'; //Kjo tregon se nga cili pozicion me vazhdu ne tentimin e dyte,tret,.....
                //shko te teksti(textarea)mere fjalin qe ki me zavendesu,nisu nga pozita $offset,fillo nga gjatesia e fjales se gjetur $search_length.
                $text = substr_replace($text,$replace,$strpos,$search_length);
           }
            
            echo $text;
            
        }else{
                echo 'Please fill in all fields.';
            }
    }
?>
<form action="f86_Find_Replace_Application.php" method="POST">
    <textarea name="text" rows="6" cols="30"></textarea>
    <br>
    <br>
    Search for: <br>
    <input type="text" name="searchfor">
    <br>
    <br>
    Replace with:<br>
    <input type="text" name="replacewith"><br><br>
    <input type="submit" value="Find and Replace">
    
    
</form>

<!--https://www.youtube.com/watch?v=Vs2B4Q1mmzI&index=51&list=PL442FA2C127377F07#t=85.629373-->
















