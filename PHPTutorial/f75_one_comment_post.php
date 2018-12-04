<?php


if(isset($_GET['user_name'])&& !empty($_GET['user_name'])){
    
   $user_name = $_GET['user_name'];
    
    //Kjo e konverton tekstin qe e shkruajm ne ne shkronja te vogla
    $user_name_lc = strtolower($user_name);

    
    /*I kemi perdor == per krahasim
       Pastaj ate fjali ne shkronja te vogla i thot nese je e njejt me fjalen bardha                                        ateher shfaqe tekstin                                 You need to learn more 
    */
    if ($user_name_lc =='bardha'){
        echo 'You need to learn more...  '.$user_name;
    }else{
        echo $user_name.'<br>';
    }
    
}







?>


<form action="f75_one_comment_post.php" method="GET">

        Name:<input type="text" name="user_name">
                    <br>
                    <br>
        <input type="submit" value="Submit">

</form>