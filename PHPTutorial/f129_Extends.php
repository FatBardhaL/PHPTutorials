<?php

	/**
	* Krijojm klasen BankAccount
	* Krijojm dy llogari bankare
	* Vlera e balancit = 0
	* Metoda qe e shfaq balancin eshte DisplayBalance() 
	* Ndertojm metoden per depozitimin e parave Deposit($amount)
	* Ndertojm metoden per terheqjen e parave Withdraw($amount)
	* Ndertojm klasen SavingAccount per llogarin ruajtese duke i perdorur metodat e klases BankAccount
	* Dhe kete e arrijm duke bere Extends(shfrytezojm)klasen BankAccount
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
	//Kjo klase nderton llogarin ruajtese:
	class SavingAccount extends BankAccount{

	}
		//Llogaria e pare:
	$alex = new BankAccount;
		//Llogaria e dyte:
	$alex_savingAccount = new BankAccount;
	//Alex:
	echo "Gjendja e llogaris rrjedhese te Alex-it:<br/>";
		//E shfaqim balancin e llogaris se Alex-it
	echo $alex->DisplayBalance();
		//Depozitojm pare ne llogari se Alex-it:
	echo $alex->Deposit(1000);
		//Terheqim pare nga llogaria se Alex-it
	echo $alex->Withdraw(15);
		//E shfaqim balancin e llogaris se Alex-it
	echo $alex->DisplayBalance();
	//Llogaria ruajtese:
	echo "<br/><br/>Gjendja e llogaris ruajtese te Alex-it:<br/>";
		//E shfaqim bilancin e llogaris ruajtese te Alex-it
	echo $alex_savingAccount->DisplayBalance();
		//Depozitojm pare ne llogari se Alex-it:
	echo $alex_savingAccount->Deposit(10);
		//Terheqim pare nga llogaria se Alex-it
	echo $alex_savingAccount->Withdraw(5);
		//E shfaqim balancin e llogaris se Alex-it
	echo $alex_savingAccount->DisplayBalance();
?>