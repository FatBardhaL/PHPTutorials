<?php
	//Na duhet sepse duhet perdorur function loggedin()
	require 'f117_Core.php';
	require 'f114_LogIn_Connect.php';

	if (!loggedin()) {
		//echo "Ju duhet te regjistroheni se pari.";
		if(isset($_POST['username']) && isset($_POST['password'])&& isset($_POST['password_again']) && isset($_POST['firstname']) && isset($_POST['surname'])){

				$username = $_POST['username'];
				$password = $_POST['password'];
				$password_again = $_POST['password_again'];
				$firstname = $_POST['firstname'];
				$surname = $_POST['surname'];

			if (!empty($username) && !empty($password) && !empty($password_again) && !empty($firstname)&& !empty($surname)){
				//Kontrolla per gjatesin e te dhenes:
				if (strlen($username)>30||strlen($firstname)>40||strlen($surname)>40) {
					echo "Gjatesia e te dhenes ka kaluar limitin.Please ahear to maxlength of fields.";
				}else{
					//password dhe password_again duhet te jene te njejt:
					if ($password != $password_again) {
						echo "Password do not match.";
					}else{
						//Kontrolla per te pare se ato te dhena te shtypura a ekzistojn ne DB:
						$query = "SELECT `username`  FROM `users` WHERE `username`='$username'  ";
						$query_run = mysqli_query($conn,$query);
						if (mysqli_num_rows($query_run)==1){
							//If e perdorim per te pare a ekziston ai username i shtypur ne DB:
							echo "The username ".$username.' already exists.';
						}else{
							//echo $username." nuk ka ekzistuar me pare ne database.";
							//Nese ai username nuk eshte ne DB, ateher i regjistrojm:
							$query = "INSERT INTO `users`(`id`, `username`, `password`, `firstname`, `surname`) VALUES (NULL,'".mysql_real_escape_string($username)."','".mysql_real_escape_string($password)."','".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($surname)."')";
							$query_run = mysqli_query($conn,$query);
							if ($query_run) {
								//echo "Te dhenat u regjistruan me sukses ne DataBase.";
								echo("<script>location.href = 'f117_LogOut_Index.php?Te dhenat u regjistruan me sukses ne DataBase.';</script>");
							}else{
								echo "Te dhenat nuk u regjistruan me sukses ne DataBase.Provoni prap.";
							}
						}
					}
				}
			}else{
				echo "Ju duhet ti plotesoni te gjitha fushat.";
			}
		}
?>	
		<p>Register Form:</p>
		<form action="f117_Register_Form.php" method="POST">
			<label>Username:</label>
			<br/>
			<input type="text" name="username" maxlength="30" value="<?php if(isset($username)){echo $username;} ?>"/>
			<br/><br/>
			<label>Password:</label>
			<br/>
			<input type="password" name="password" />
			<br/><br/>
			<label>Password again:</label>
			<br/>
			<input type="password" name="password_again" />
			<br/><br/>
			<label>Firstname:</label>
			<br/>
			<input type="text" name="firstname" maxlength="40" value="<?php if(isset($firstname)){echo $firstname;} ?>"/>
			<br/><br/>
			<label>Surname:</label>
			<br/>
			<input type="text" name="surname" value="<?php if(isset($surname)){echo $surname;} ?>" maxlength="40"/>
			<br/><br/>
			<input type="submit" value="Register">
		</form>
<?php
	}else if(loggedin()){
		echo "Ju jeni te regjistruar dhe jeni logguar.";
	}


?>