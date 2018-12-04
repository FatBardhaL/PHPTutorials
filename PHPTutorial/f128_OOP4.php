<?php

	/**
	* Si shkruhet dhe si funksionon nje variabel public-e:
	*/
	class BankAccount{
		public $balance = 3500;
		public function DisplayBalance(){
			return 'Balance: '.$this->balance;
		}
	}
		//New instance of class
	$alex = new BankAccount;
		//E shfaqim balancin e llogaris
	//Kjo shfaqet vetem kur variabla eshte publike
	echo $alex->balance;
?>