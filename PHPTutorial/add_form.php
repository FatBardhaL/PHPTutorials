<?php include "db.php"?>


<?php
	if (isset($_POST[create])) {

		// mysql_real_escape_string= i mbron inputet tona nga sequel injection
		$first_name =mysql_real_escape_string($_POST['first_name']);
		$last_name = mysql_real_escape_string($_POST['last_name']);
		$age = mysql_real_escape_string($_POST['age']);


		//echo $first_name." ".$last_name." ".$age;
		//die();

		$sql = "INSERT INTO guests (firstname, lastname,age) VALUES ($first_name,$last_name,$age)";



		$query = mysql_query($sql) or die();

		
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="content">
			<h1>The dynamic application</h1>
		</div>
	</div>
	<div class="container">
		<div class="content">
			<div class="toolbar">
				<a href="#">Return to the main page</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="content">
			<div class="separator"></div>
			<h2>Create new record form</h2>
			<div class="separator"></div>
			<form method="post" name="frmAdd">
				<p>First Name</p>
				<p>
					<input type="text" name="first_name" id="first_name" placeholder="Input the first name here:">
				</p>
				<!--  -->
				<p>Last Name</p>
				<p>
					<input type="text" name="last_name" id="last_name" placeholder="Input the last name here:">
				</p>
				<!--  -->
				<p>Age</p>
				<p>
					<input type="text" name="age" id="age" placeholder="Input the age here:">
				</p>
				<!-- Butoni -->
				<p>
					<input type="submit" name="create" id="create" value="Create new record">	
				</p>
			</form>
			<div class="separator"></div>
		</div>
	</div>
</body>
</html>