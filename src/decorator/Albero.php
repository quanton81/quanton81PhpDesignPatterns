<?php

include_once('IComponente.php');

class Albero extends IComponente
{
	private $_descrizione;
    private $_prezzo;

	public function __construct()
	{
		$this->_descrizione = "Albero natalizio";
		$this->_prezzo = 150;
	}

	public function getDescrizione()
	{
		return $this->_descrizione;
	}

	public function getPrezzo()
	{
		return $this->_prezzo;
	}
}
