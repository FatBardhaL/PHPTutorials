<?php
include 'db.php';
$query = "select * from event";
$result = mysqli_query($conn, $query) or die('Query failed: ' . mysql_error());
$eventResult = array();
while ($row = mysqli_fetch_assoc($result)) {
    $eventResult[] = $row;
}
echo json_encode($eventResult);
?>