<?php

use PHPUnit\Framework\TestCase;

include_once('src/observer/standard/Compratore.php');
include_once('src/observer/standard/Prodotto.php');

class ObserverTests extends TestCase
{
    public function testMantello100()
    {
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
        $this->expectOutputString("IronMan: disponibile a comprare Mantello a 100$\nBatMan: disponibile a comprare Mantello a 100$\nSpiderMan: disponibile a comprare Mantello a 100$\n");
    }

    public function testMantello200()
    {
        $comp1 = new Compratore("IronMan", 350);
		$comp2 = new Compratore("BatMan", 250);
		$comp3 = new Compratore("SpiderMan", 150);
		// Primo prodotto
		$prodotto = new Prodotto();
		$prodotto->setDati("Mantello", 200);
		// 3 compratori disponibili
		$prodotto->attach($comp1);
		$prodotto->attach($comp2);
		$prodotto->attach($comp3);
		$prodotto->notify();
        $this->expectOutputString("IronMan: disponibile a comprare Mantello a 200$\nBatMan: disponibile a comprare Mantello a 200$\n");
    }

    public function testMantello300()
    {
        $comp1 = new Compratore("IronMan", 350);
		$comp2 = new Compratore("BatMan", 250);
		$comp3 = new Compratore("SpiderMan", 150);
		// Primo prodotto
		$prodotto = new Prodotto();
		$prodotto->setDati("Mantello", 300);
		// 3 compratori disponibili
		$prodotto->attach($comp1);
		$prodotto->attach($comp2);
		$prodotto->attach($comp3);
		$prodotto->notify();
        $this->expectOutputString("IronMan: disponibile a comprare Mantello a 300$\n");
    }
}