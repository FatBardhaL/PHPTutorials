<?php


    if(isset($_POST['user_input'])&&!empty($_POST['user_input'])){
        echo $user_input = $_POST['user_input'];
    }

?>


<hr>
<hr>
<hr>
<!--Metoden e kemi bere post sepse kemi me quar nje verg te madh te te dhenave-->
<form action="f83_comment_area.php" method="POST">
    <textarea name="user_input" rows="20" cols="50">
        <?php
                    echo $user_input;//Kjo shkrimin e ruan edhe ne teztarea

        ?>
    </textarea>
    <br>
    <br>
    <input type="submit" value="Submit" style="margin-left:130px;">


</form>