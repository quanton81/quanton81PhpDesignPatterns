<?php

include_once('AbstractMenu.php');
include_once('Prodotto.php');

class MenuNatale extends AbstractMenu
{
	function __construct()
	{
		$this->prezzo=0;
	}

	protected  function aggiungiAntipasto($antipasto)
	{		
		$this->antipasto=$antipasto->getDescrizione();
		$this->prezzo += $antipasto->getPrezzo();
		echo "Antipasto: {$this->antipasto}\n";								
	}
	protected  function aggiungiPrimo($primo)
	{		
		$this->primo=$primo->getDescrizione();
		$this->prezzo += $primo->getPrezzo();
		echo "Primo: {$this->primo}\n";								
	}
	protected  function aggiungiSecondo($secondo)
	{		
		$this->secondo=$secondo->getDescrizione();
		$this->prezzo += $secondo->getPrezzo();
		echo "Secondo: {$this->secondo}\n";								
	}
	protected  function aggiungiPrezzo()
	{		
		if(!empty($this->prezzo))
		{
			echo "************\n";
			echo "Prezzo cena di Natale: {$this->prezzo} Euro\n";
			echo "************\n\n";	
		}
	}
}
