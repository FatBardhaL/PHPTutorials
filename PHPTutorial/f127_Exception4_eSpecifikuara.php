<?php
		//Ketu do te specifikojm erroret:
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';
	$mysql_db = 'thenewbostonajax';
		//Me ane te TRY,THROW,CATCH testojm se a jemi lidhur me database.


		//Tani keto Exception i definojm apo i riemrojm me ane te CLASS qe tashme ekziston
	class ServerException extends Exception{
			//Ketu krijojm funksione me ane te te ciles i specifikojm erroret: 
		public function showSpecific(){
			//Ketu kthejm nr. e rreshtave ku kemi errore
			return 'Error thrown on line '.$this->getLine().' in '.$this->getFile();
		}
	}
	class DatabaseException extends Exception{
			//Ketu krijojm funksione me ane te te ciles i specifikojm erroret: 
		public function showSpecific(){
			//Ketu kthejm nr. e rreshtave ku kemi errore
			return 'Error thrown on line '.$this->getLine().' in '.$this->getFile();
		}
	}
	try{
		if (!@mysql_connect($mysql_host,$mysql_user,$mysql_pass)) {
			throw new ServerException();
		}else if(!@mysql_select_db($mysql_db)){
			throw new DatabaseException();
		}else{
			echo "Connected.";
		}
	}catch(ServerException $ex){
		echo $ex->showSpecific();
	}catch(DatabaseException $ex){
		echo $ex->showSpecific();
	}

?>
