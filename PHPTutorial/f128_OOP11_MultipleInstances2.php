<?php

	/**
	* Krijojm klasen BankAccount
	* Krijojm dy llogari bankare
	* Vlera e balancit = 0
	* Metoda qe e shfaq balancin eshte DisplayBalance() 
	* Ndertojm metoden per depozitimin e parave Deposit($amount)
	* Ndertojm metoden per terheqjen e parave Withdraw($amount)
	*/
	class BankAccount{
		public $balance = 0;
		public function DisplayBalance(){
			return '<br/>Balance: '.$this->balance;
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
				echo "<br/>Shuma e terhequr eshte:".$amount;
			}
		}
		public function Deposit($amount){
			//Ketu lejojm qe perdoruesit mund te depozitojn aq pare sa te deshirojn.
			$this->balance = $this->balance + $amount;
			echo "<br/>Shuma qe depozitojm eshte: ".$amount;
		}
	}
		//Llogaria e pare:
	$alex = new BankAccount;
		//Llogaria e dyte:
	$billy = new BankAccount;
	//Alex:
	echo "Gjendja e llogaris se Alex-it:<br/>";
		//E shfaqim balancin e llogaris se Alex-it
	echo $alex->DisplayBalance();
		//Depozitojm pare ne llogari se Alex-it:
	echo $alex->Deposit(1000);
		//Terheqim pare nga llogaria se Alex-it
	echo $alex->Withdraw(15);
		//E shfaqim balancin e llogaris se Alex-it
	echo $alex->DisplayBalance();
	//Billy:
	echo "<br/><br/>Gjendja e llogaris se Billy-it:<br/>";
		//E shfaqim bilancin e llogaris se Billy-it
	echo $billy->DisplayBalance();
		//Depozitojm pare ne llogari se Billy-it:
	echo $billy->Deposit(10);
		//Terheqim pare nga llogaria se Billy-it
	echo $billy->Withdraw(5);
		//E shfaqim balancin e llogaris se Billy-it
	echo $billy->DisplayBalance();
?>