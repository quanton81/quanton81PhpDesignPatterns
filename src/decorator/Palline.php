<?php

include_once('Decoratore.php');

class Palline extends Decoratore
{
    private $_descrizione;
    private $_prezzo;

	public function __construct(IComponente $elementoC) 
	{
		$this->elemento = $elementoC;
        $this->_descrizione = "Palline di natale";
        $this->_prezzo = 3;
	}

	public function getDescrizione() 
	{
		return $this->elemento->getDescrizione() . ", " . $this->_descrizione;
	}

	public function getPrezzo() 
	{
		return $this->elemento->getPrezzo() + $this->_prezzo;
	}
}
