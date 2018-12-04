<?php
		//Cdo klas i ka vlerat e veta(properti-ose-variablat).
		//Property jan sikurse variablat.
		//Kemi variabla STATIC-e qe nuk ndryshojn dhe jo-statike qe ndryshojn.

		//Ne OOP kemi 3 lloje te klasave,metodave,objekteve,variablave:
			//public=Publike d.m.th mund te shihet kudo.
			//protected=dmth mund te shihet vetem mbrenda klases dhe mund ti qasemi permes metodave.
			//private=dmth s'mund ti qasemi jasht klases.
	/**
	* Krijojm klasen BankAccount
	* Vlera e balancit = 0
	* Metoda qe e shfaq balancin eshte DisplayBalance()
	*
	*/
	class BankAccount{
			//Vlera e balancit = 0
		public $balance = 0;
			//Krijojm metoden per shfaqjen e balancit:
		public function DisplayBalance(){
				//Shfaq nga kjo (this) metod bilancin
			echo 'Balance: '.$this->balance;
		}
	}
	//Per te krijuar nje llogari bankare per dikend
	//duhet krijuar nje instanc e klases BankAccount
	//ne kete menyr kemi qasje ne klasen BankAccount
	//dhe ajo llogari e krijuar do te kete bilancin=0 
	//sepse mer vlera nga BankAccount

	//P.sh. Llogaria bankare e Alex-it:
	$alex = new BankAccount;
		//shfaqim bilancin e alex-it:
	$alex->DisplayBalance();


?>