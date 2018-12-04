<?php
//T139
	if(isset($_POST['username']) && isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password_hash = md5($_POST['password']);
		if(!empty($username) && !empty($password)){
			$query = "SELECT `id` 
					  FROM `users` 
					  WHERE `username`='$username'	
					  AND `password`='$password' ";
			$query_id = "SELECT `id` 
					  FROM `users`";
			if($query_run = mysqli_query($conn,$query)){
				//Nese 0 rreshta nuk jane selektuar do te thot se te dhenat nuk perputhen dhe nuk vazhdon me tutje:
				$query_num_rows = mysqli_num_rows($query_run);
				if($query_num_rows==0){
					echo "Invalid username/password combination.";
				}else if($query_num_rows==1){
					//$query_num_rows=1 nenkupton qe eshte gjetur nje id apo nje rresht qe ekzistojn keto te dhena:
					echo "Passwordi eshte OK:";

					//While eshte perdorur pasi qe nuk ka funksioniar  $user_id = mysql_result($query_run,0,'id');
					while ($row = mysqli_fetch_assoc($query_run)){
						$user_id= $row['id'];
						//echo $id;

						//Ketu e ruajm $user_id(apo ID e selektuar) dhe pastaj e dergojm ne f114_LogIn_Index.php
						$_SESSION['user_id']=$user_id;
						if (isset($_SESSION['user_id'])) {
							//header('Location: f114_LogIn_Index.php');
							echo("<script>location.href = 'f114_LogIn_Index.php';</script>");
						}else{
							echo "Nuk eshte marur ID";
						}
					}
					//Nuk po funksionon  mysql_result dhe per kete eshte perdorur lart while
					//$user_id = mysql_result($query_run,0,'id');   
					//echo $user_id;
				}
			}else{
				echo 'Nuk ka mundur te lidhet me database. '.mysql_error();
			}
		}else{
			echo "You must supply a username and password.";
		}
	}




?>
<!-- <?php // echo $current_file;?> kjo lidhet me  f114_LogIn_Index.php -->
<!-- sepse ne f114_LogIn_Index.php gjendet include 'f114_LogIn_Form.php';-->
<form action="<?php  echo $current_file;   ?>" method="POST">
	<label>UserName:</label>
	<input type="text" name="username" />
		<br/><br/>
	<label> Password:</label>
	<input type="password" name="password"/>
		<br/><br/>
	<input type="submit" value="Log in">
	<?php //echo $username.$password;  ?>
</form>