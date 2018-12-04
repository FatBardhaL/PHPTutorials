<?php

	if(isset($_POST['search'])){
		$ValueSearch = $_POST['value'];
		$query = "SELECT * FROM `items` 
			  WHERE CONCAT(`item_number`,`make`,`model`,`price`,`quantity`)
			  LIKE '%".$ValueSearch."%'
			 ";
		$SearchResult = filterTable($query);
	}else{
			//Paraqet te gjitha te dhenat ne fillim para se te shtypim search
		$query ="SELECT * FROM `items`";
		$SearchResult = filterTable($query);
	}
	function filterTable($query){
		$username = "root";
		$password = "";
		$database = "product";	
		$connect = mysqli_connect("localhost",$username,$password,$database);
		$filter_Result = mysqli_query($connect,$query);
		return $filter_Result;
	}
?>


<!doctype html>
<html>
	<head>
		<title>Filter and Search using PHP & HTML</title>
		<style>
			table,tr,th,td{
				border: 1px solid black;
			}
		</style>
	</head>
	<body>
		<form action="f111_OPTION_FilterData.php" method="POST">
			<p>Please Select a make:</p>
			<select name='value'>
				<option value=''>All</option>
				<option value='Yamaha'>Yamaha</option>
				<option value='Matin'>Matin</option>
				<option value='Fender'>Fender</option>
				<option value='Honda'>Honda</option>
			</select>
			<br/>
			<br/>
			<input type='submit' name='search' value='Search' />
			<br/>
			<br/>	
			<hr>
			<table>
				<tr>
					<th>Item Number</th>
					<th>Make</th>
					<th>Model</th>
					<th>Price</th>
					<th>Quantity</th>
				</tr>

				<?php  while($row=mysqli_fetch_array($SearchResult));  ?>

				<tr>
					<td>
						<?php  echo $row['item_number'];       ?>
					</td>
					<td>
						<?php  echo $row['make'];       ?>
					</td>
					<td>
						<?php  echo $row['model'];       ?>
					</td>
					<td>
						<?php  echo $row['price'];       ?>
					</td>
					<td>
						<?php  echo $row['quantity'];       ?>
					</td>
				</tr>
				
				<?php  //endwhile;      ?>
	
			</table>			 

		</form>
			<!--test-->
	</body>
</html>
