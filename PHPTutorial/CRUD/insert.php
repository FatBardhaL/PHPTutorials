 <?php
	include 'dbconnect.php';
	//include 'index.php';

	$host = 'localhost';
	$user = 'root';
	$password = '';
	$dbname = "bookshop";


     // Create connection
	$conn = mysqli_connect($host, $user, $password, $dbname);
    // Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

    //Create query:

	$title = $_POST['btitle'];	
	$price = $_POST['bprice'];

            //Per shkak te siguris
            //$title = stripslashes($title);
            //$title = mysql_real_escape_string($title);

	$sql = "INSERT INTO books (book_title, book_price) VALUES ('$title', '$price')";

	if (mysqli_query($conn, $sql)) {

    		header("thenewboston\CRUD\index.php");
        echo("<script>location.href = 'index.php';</script>");

	} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?> 

