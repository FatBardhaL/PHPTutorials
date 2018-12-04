<?php
		//Konstruktoret e klases jane:
			//metodat mbrenda klases qe automatikisht kompajllohen
			//kur ju e iniconi nje instanc te asaj klase
	class Example{
		public function __construct(){
			$this->SaySomethink();
		}
		public function SaySomethink(){
			echo "Something from Class Constructor f128_oop8.";
		}
	}
	$example = new Example;
?>