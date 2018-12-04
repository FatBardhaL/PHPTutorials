<?php

	/**
	* Krijojm klasen BankAccount
	* Vlera e balancit = 0
	* Metoda qe e shfaq balancin eshte DisplayBalance()
	*Qka ndodh nese deshirojm ta modifikojm variablen $balance 
	*/
	class BankAccount{
		public $balance = 11;
		public function DisplayBalance(){
			return 'Balance: '.$this->balance;
		}
			//Krijojm nje funksion qe i thirr metodat:
			//Kjo metod bene terheqjen e pareve:
		public function Withdraw($amount){
				//Kontrollojm nese mund te terheqim para:
			if (($this->balance)<$amount) {
				echo "Nuk keni te holla per shumen qe deshironi te terheqni.<br/>";
			}else{
					//balance = balance - $amount;
					//$this e perdorim pasi qe po punojm mbrenda nje klase
				$this->balance = $this->balance - $amount;
			}
		}
	}
		//New instance of class
	$alex = new BankAccount;
		//Terheqim pare nga llogaria
	$alex->Withdraw(15);
		//E shfaqim balancin e llogaris
	echo $alex->DisplayBalance();
?>