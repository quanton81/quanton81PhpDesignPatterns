<?php

include_once('Compratore.php');
include_once('Prodotto.php');

class Client
{
	public function __construct()
	{
		echo "Asta per cimeli SuperMan, Mantello SuperMan, si parte con 100$:\n";
		// 3 compratori
		$comp1 = new Compratore("IronMan", 350);
		$comp2 = new Compratore("BatMan", 250);
		$comp3 = new Compratore("SpiderMan", 150);
		// Primo prodotto
		$prodotto = new Prodotto();
		$prodotto->setDati("Mantello", 100);
		// 3 compratori disponibili
		$prodotto->attach($comp1);
		$prodotto->attach($comp2);
		$prodotto->attach($comp3);
		$prodotto->notify();
		
		echo "Mantello SuperMan chi offre, 200$:\n";
		$prodotto->setDati("Mantello", 200);
		$prodotto->notify();

		echo "Mantello SuperMan chi offre, 300$:\n";
		$prodotto->setDati("Mantello", 300);
		$prodotto->notify();
		
		echo "Asta per cimeli SuperMan, Cintura SuperMan, si parte con 200$:\n";
		$prodotto->setDati("Cintura", 200);
		$prodotto->detach($comp3);
		$prodotto->notify();

		echo "Cintura SuperMan chi offre, 300$:\n";
		$prodotto->setDati("Cintura", 300);
		$prodotto->notify();	
	}
}

$worker=new Client();