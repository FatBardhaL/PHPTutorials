<!--https://www.youtube.com/watch?v=x3QH9tkoF5I&index=51&list=PL442FA2C127377F07#t=189.42288-->
<?php

    //I ndertojm dy vektor
    $find = array('Bardha','Lutolli','Fjalia');
    $replace = array('Ba***a','Lut***i','Fjal**');

    if(isset($_POST['user_input'])&&!empty($_POST['user_input'])){
        $user_input = $_POST['user_input'];
        $usre_input_new = str_ireplace($find,$replace,$user_input);//str_ireplace();-eshte keys sensitiv

        echo $usre_input_new;
    }

?>


<hr>
<!--Metoden e kemi bere post sepse kemi me quar nje verg te madh te te dhenave-->
<form action="f85_comment_area.php" method="POST">
    <textarea name="user_input" rows="20" cols="50">
        <?php
                    echo $user_input;//Kjo shkrimin e ruan edhe ne teztarea

        ?>
    </textarea>
    <br>
    <br>
    <input type="submit" value="Submit" style="margin-left:130px;">


</form>