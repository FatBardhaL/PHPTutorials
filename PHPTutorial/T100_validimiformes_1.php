<?php

    if(isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text'])){
        echo $contact_name = $_POST['contact_name'];
        echo $contact_email = $_POST['contact_email'];
        echo $contact_text = $_POST['contact_text'];
    }
    if(!empty($contact_name) && !empty($contact_email) && !empty($contact_text)){
        echo 'OK';
    }
?>
<form action="T100_validimiformes_1.php"  method="POST">

    Name:<br>
    <input type="text" name="contact_name"><br/><br/>
    Email address:<br>
     <input type="email" name="contact_email"><br/><br/>
    Message:<br>
    <textarea name="contact_text" rows="6" cols="30"></textarea><br/><br/>
    
    <input type="submit" value="Send">
    
</form>













