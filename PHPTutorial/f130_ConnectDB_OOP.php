<?php
		//Ketu bejm lidhjen e database permes klases:
		//Inicojm disa variabla permes konstruktorit
	class DatabaseConnect{
		//Ketu konstruktori mer ($mysql_host,$mysql_user,$mysql_pass) dhe do ti aplikoj ne nje metod te klases.
		//Dhe kjo metod do te ndihmoj ne lidhjen me database-en.
		public function __construct($db_host,$db_username,$db_password){
			echo "Localhost: ".$db_host."<br/>Username: ".$db_username."<br/>Password: ".$db_password;
		}
	}
	$connection = new DatabaseConnect('localhost','root','');
?>