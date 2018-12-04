<?php

	include 'dbconnect.php';


	$conn = mysqli_connect($host, $user, $password, $dbname);

	if (!$conn) {
	    		die("Connection failed: " . mysqli_connect_error());
	}


	$id = $_GET['bookid'];
	$title = $_GET['btitle'];
	$price = $_GET['bprice'];

	$sql = "UPDATE books SET book_title='$title', book_price='$price' WHERE book_id='$id'";

	if (mysqli_query($conn, $sql)) {

		//redirect your page from edit.php to index.php

    		header("Location:index.php");

	} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);


?>