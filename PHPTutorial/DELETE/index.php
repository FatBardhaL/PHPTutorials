<?php
	include 'dbconnect.php';


     // Create connection
	$conn = mysqli_connect($host, $user, $password, $dbname);

    // Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
?>
<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width,initial-scale=1">
     <title>Crud App</title>
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
     <style>
	.permbajtja{
		width:100%;
		margin-left:auto;
		margin-right:auto;
		padding-top:20px;
		padding-bottom:20px;
	}
     </style>
  </head>
  <body>

	<?php		
    		//Create query:
		
		$sql = "SELECT * FROM `books` ";
		if($result = mysqli_query($conn,$sql)){

		}

	?>
	<div class="container permbajtja bg-success">
		<h3>Bootstrap and php crud app.</h3>
		<div class="row">
			<div class="col-sm-4">
				<h3>Insert Books Form:</h3>
				<form role="form" action="insert.php" method="post">
					<div class="form-group">
						<label>Book Title</label>
						<input type="text" name="btitle" class="form-control">
					</div>
					<div class="form-group">
						<label>Book Price</label>
						<input type="text" name="bprice" class="form-control">
					</div>
					<button type="submit" name="Submit" class="btn btn-info btn-block">Add Books</button>
				</form>
			</div>
			<div class="col-sm-8">
				<h3>Display All Record Table:</h3>
				<table class="table">
					<thead>
						<tr>
							<th>Book title</th>
							<th>Book Price</th>
							<th>Crud Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php

							while(null !== ($row = mysqli_fetch_assoc($result))){

						?>

						<tr>
							<td>
								<?php
									 echo $row['book_title']; 
								?>
							</td>
							<td>
								<?php 
									 echo $row['book_price']; 
								?>
							</td>
							<td>
								<a href="editform.php?id=<?php echo $row['book_id']; ?>" class="btn btn-success" role="button">Edit Book</a>
								<a href="delete.php?id=<?php echo $row['book_id']; ?>" class="btn btn-danger" role="button">Delete Book</a>
							</td>
							<td></td>
						</tr>

						<?php
							

							}
							mysqli_close($conn);
						?>						

					</tbody>
				</table>
			</div>
		</div>
	</div>

    <script src="js/jquery.js"></script> 
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>