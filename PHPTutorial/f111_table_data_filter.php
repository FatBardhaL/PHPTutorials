<?php
	if(isset($_POST['search'])){

		$valueToSearch = $_POST['valueToSearch'];
													//'%".$valueToSearch."%' nuk duhet gabuar ne thonjeza
		$query = "SELECT * FROM `users` WHERE CONCAT(`id`, `fname`, `lname`, `age`) LIKE '%".$valueToSearch."%'";
		$search_result = filterTable($query);

	}else{
		$query="SELECT * FROM `users`";
		$search_result = filterTable($query);
	}

	function filterTable($query){
								//host,user,password,database,port,socket
		$connect=mysqli_connect("localhost","root","","test_db");
		$filter_Result = mysqli_query($connect,$query);
		return $filter_Result;
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>PHP Table data search</title>
	<style> 
		table,tr,th,td{
			border:1px solid #000;
			width:450px;
			height:50px;
		}
	</style>
</head>
<body>

	<form action="f111_table_data_filter.php" method="POST">
		<input  type="text" name="valueToSearch" placeholder="Type a Value" /> <br/><br>
		<input  type="submit" name="search" value="Filter" /> <br/><br/>
		<table> 
			<tr> 
				<th>Id</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Age</th>
			</tr>
			<?php 	
				while ($row = mysqli_fetch_array($search_result)){
			?>	
			<tr> 
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['fname']; ?></td>
				<td><?php echo $row['lname']; ?></td>
				<td><?php echo $row['age']; ?></td>
			</tr>
			<?php
				}		
			?>
		</table>
	</form>

</body>
</html>