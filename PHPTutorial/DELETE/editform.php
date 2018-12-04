<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width,initial-scale=1">
     <title>Crud App</title>
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
     <style>
	.edit{padding:20px;}
     </style>
  </head>
  <body>
	<?php
		$id = $_GET['id'];

		include 'dbconnect.php';


		$conn = mysqli_connect($host, $user, $password, $dbname);

		if (!$conn) {
	    		die("Connection failed: " . mysqli_connect_error());
		}


		//Create query

		$sql = "SELECT * FROM books WHERE book_id='$id'";




	?>

	<div class="container col-md-offset-3 col-md-6 bg-success edit">

					<!--Add record from index.php to edit form.php using book_id-->
		<form role="form" action="edit.php" method="get">

		    <?php    
				$result = mysqli_query($conn,$sql);
				while($row = mysqli_fetch_assoc($result)){
	
		    ?>
			<h3>Edit Book Form:</h3>
			<input type="hidden" name="bookid" value="<?php echo $row['book_id'];?>">
			<div class="form-group">
				<label>Book Title</label>
				<input type="text" name="btitle" class="form-control" value="<?php echo $row['book_title'];?>">
			</div>
			<div class="form-group">
				<label>Book Price</label>
				<input type="text" name="bprice" class="form-control" value="<?php echo $row['book_price'];?>">
			</div>
			<button type="submit" name="Submit" class="btn btn-info btn-block">Add Books</button>

			<?php

			  }

			  mysqli_close($conn);
			?>
		</form>



	</div>
    <script src="js/jquery.js"></script> 
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>