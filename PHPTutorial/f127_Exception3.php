<?php
		//Ketu do te diskutojm per marrjen dhe gjuajtjen e me shume se nje Exception.
		//Ketu testojm database-n.
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';
	$mysql_db = 'thenewbostonajax';
		//Me ane te TRY,THROW,CATCH testojm se a jemi lidhur me database.


		//Tani keto Exception i definojm apo i riemrojm me ane te CLASS qe tashme ekziston
	class ServerException extends Exception{}
	class DatabaseException extends Exception{}
	try{
		if (!@mysql_connect($mysql_host,$mysql_user,$mysql_pass)) {
			throw new ServerException("Could not connect to server.");
		}else if(!@mysql_select_db($mysql_db)){
			throw new DatabaseException("Could not select database.");
		}else{
			echo "Connected.";
		}
	}catch(ServerException $ex){
		echo 'Error:'.$ex->getMessage();
	}catch(DatabaseException $ex){
		echo 'Error:'.$ex->getMessage();
	}

?>