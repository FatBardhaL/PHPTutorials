<?php


if(isset($_GET['user_name'])&&!empty($_GET['user_name'])){
    
   echo $user_name = $_GET['user_name'];
}



?>


<form action="f74_valid_name.php" method="GET">

        Name:<input type="text" name="user_name">
                    <br>
                    <br>
        <input type="submit" value="Submit">

</form>