<?php

	/**
	* Krijojm klasen BankAccount
	* Vlera e balancit = 0
	* Metoda qe e shfaq balancin eshte DisplayBalance()
	*
	*/
	class BankAccount{
			//Vlera e balancit = 0
		public $balance = 10;
			//Krijojm metoden per shfaqjen e balancit:
		public function DisplayBalance(){
				//OSE echo 'Balance: '.$this->balance;
			return 'Balance: '.$this->balance;
		}
	}

	//P.sh. Llogaria bankare e Alex-it:
	$alex = new BankAccount;
	//shfaqim bilancin e alex-it:
		//$alex->DisplayBalance(); shkruhet ne rast se
				// echo 'Balance: '.$this->balance;
	echo $alex->DisplayBalance();






?>