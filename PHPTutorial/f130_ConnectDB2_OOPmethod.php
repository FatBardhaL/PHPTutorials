<?php
		//Ketu bejm lidhjen me database permes klases:
		//Inicojm disa variabla permes konstruktorit
	class DatabaseConnect{
		//Ketu konstruktori mer ($mysql_host,$mysql_user,$mysql_pass) dhe do ti aplikoj ne nje metod te klases.
		//Dhe kjo metod do te ndihmoj ne lidhjen me database-en.
		public function __construct($db_host,$db_username,$db_password){
			if (!@$this->Connect($db_host,$db_username,$db_password)) {
				echo "Connection failed.";
			}else if($this->Connect($db_host,$db_username,$db_password)){
				echo "Connected to ".$db_host;
				echo "<br/>Localhost: ".$db_host."<br/>Username: ".$db_username."<br/>Password: ".$db_password;

			}
		}
		public function Connect($db_host,$db_username,$db_password){
			return true;
		}
	}
	$connection = new DatabaseConnect('localhost','root','');
?>