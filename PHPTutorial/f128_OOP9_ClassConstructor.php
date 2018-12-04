<?php
		//Konstruktoret e klases jane:
			//metodat mbrenda klases qe automatikisht kompajllohen
			//kur ju e iniconi nje instanc te asaj klase
	class Example{
		public function __construct($something){
			$this->SaySomethink($something);
		}
		public function SaySomethink($something){
			echo $something;
		}
	}
	$example = new Example("Teksti qe nga instanca kalon ne konstruktor e pastaj ne metod.");
?>