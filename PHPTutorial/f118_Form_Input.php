<?php
	$host = "localhost";
	$user = 'root';
	$password = '';
	$database = 'input_forma';

	$conn = mysqli_connect($host,$user,$password,$database);
	mysql_select_db('input_forma');	
	if($conn){
	}else{
		die(mysql_error());
	}
	if (isset($_POST['username'])&&isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		//echo 'Mir se vini '.$username.$password;
		if (!empty($username)&&!empty($password)) {
			$query="SELECT * FROM `input_forma` 
					WHERE `username`='".mysql_escape_string($username)."' 
					AND `password`='".mysql_escape_string($password)."'";
			$query_run = mysqli_query($conn,$query);
			if($query_run){
				$query_num_rows = mysqli_num_rows($query_run);
				if($query_num_rows==0){
					echo "Invalid username/password combination.";
				}else if($query_num_rows==1){
					while ($row = mysqli_fetch_assoc($query_run)){
						$user_id= $row['id'];
						$username= $row['username'];
						$password= $row['password'];
						echo $user_id.' '.$username.' '.$password;
					}
				}
			}else{
				echo 'Nuk ka mundur te lidhet me database. '.mysql_error();
			}
		}else{
			echo "Ju duhet ti plotesoni te gjitha fushat.";
		}
	}
?>
	<form action="f118_Form_Input.php" method="POST">
		<label>Username</label><br/>
		<input type="text" name="username"/>
				<br/><br/>
		<label>Password</label><br/>
		<input type="password" name="password"/>
				<br/><br/>
		<input type="submit" value="Submit"/>
	</form>

