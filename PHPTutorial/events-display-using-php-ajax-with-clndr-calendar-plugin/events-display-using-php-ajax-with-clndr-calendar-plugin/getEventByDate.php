<?php
   include 'db.php';
    $eventDate = $_POST['eventDate'];
    $query="select * from event where date = '" . $eventDate . "'";
    $result = mysqli_query($conn,$query) or die('Query failed: ' . mysql_error());
    $eventResult = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $eventResult[] = $row;
    }
    echo json_encode($eventResult);
 ?>