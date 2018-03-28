<?php

include_once('AbstractMenu.php');
include_once('Prodotto.php');

class MenuCapodanno extends AbstractMenu
{
	function __construct()
	{
		$this->prezzo=0;
	}

	protected  function aggiungiAntipasto($antipasto)
	{		
		$this->antipasto=$antipasto->getDescrizione();
		$this->prezzo += $antipasto->getPrezzo();
		echo "{$this->antipasto} - Antipasto a buffet\n";								
	}
	protected  function aggiungiPrimo($primo)
	{		
		$this->primo=$primo->getDescrizione();
		$this->prezzo += $primo->getPrezzo();
		echo "{$this->primo} - Primo a buffet\n";								
	}
	protected  function aggiungiSecondo($secondo)
	{		
		$this->secondo=$secondo->getDescrizione();
		$this->prezzo += $secondo->getPrezzo();
		echo "{$this->secondo} - Secondo servito\n";								
	}
	protected  function aggiungiPrezzo()
	{		
		if(!empty($this->prezzo))
		{
            echo "------------\n";
		    echo "Prezzo pranzo di Capodanno: {$this->prezzo} Euro\n";
		    echo "------------\n\n";
		}
	}
}
