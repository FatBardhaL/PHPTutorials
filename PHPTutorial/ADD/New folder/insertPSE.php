 <?php
	include('dbconnect.php');

    //Create query:

	$title = $_POST['btitle'];	
	$price = $_POST['bprice'];

	$sql = "INSERT INTO books (book_title, book_price) VALUES ('$title', '$price')";

	if (mysqli_query($conn, $sql)) {

    		echo $title." , ".$price." jane regjistruar me sukses ne databaze.";

	} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?> 