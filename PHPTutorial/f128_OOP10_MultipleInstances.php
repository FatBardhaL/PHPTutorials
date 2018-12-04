<?php

	/**
	* Krijojm klasen BankAccount
	* Vlera e balancit = 0
	* Metoda qe e shfaq balancin eshte DisplayBalance() 
	* Ndertojm metoden per depozitimin e parave Deposit($amount)
	* Ndertojm metoden per terheqjen e parave Withdraw($amount)
	*/
	class BankAccount{
		public $balance = 0;
		public function DisplayBalance(){
			return 'Balance: '.$this->balance;
		}
			//Kjo metod bene terheqjen e pareve:
		public function Withdraw($amount){
				//Kontrollojm nese mund te terheqim para:
			if (($this->balance)<$amount) {
				echo "<br/>Nuk keni te holla per shumen qe deshironi te terheqni.<br/>";
			}else{
					//balance = balance - $amount;
					//$this e perdorim pasi qe po punojm mbrenda nje klase
				$this->balance = $this->balance - $amount;
				echo "<br/>Shuma e terhequr eshte:".$amount."<br/>";
			}
		}
		public function Deposit($amount){
			//Ketu lejojm qe perdoruesit mund te depozitojn aq pare sa te deshirojn.
			$this->balance = $this->balance + $amount;
			echo "<br/>Shuma qe depozitojm eshte: ".$amount;
		}
	}
		//New instance of class
	$alex = new BankAccount;
		//E shfaqim balancin e llogaris
	echo $alex->DisplayBalance();
		//Depozitojm pare ne llogari:
	echo $alex->Deposit(500);
		//Terheqim pare nga llogaria
	echo $alex->Withdraw(20);
		//E shfaqim balancin e llogaris
	echo $alex->DisplayBalance();
?>