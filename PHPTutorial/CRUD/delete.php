<?php



   //Lidhja me databaze:
	include 'dbconnect.php';
	
	$conn = mysqli_connect($host, $user, $password, $dbname);
	if(!$conn){
	     
	    die('Konektimi ka deshtuar '. mysqli_connect_error());

	}

	$id=$_GET['id'];

   //Create query:
	$sql = "DELETE FROM books WHERE book_id='$id'";

	if(mysqli_query($conn,$sql)){
		echo "Record is delete";
	
		//redirect your page from edit.php to index.php

    		header("Location:index.php");
        echo("<script>location.href = 'index.php';</script>");

	} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);





?>