<?php

include_once('Decoratore.php');

class Luci extends Decoratore
{
    private $_descrizione;
    private $_prezzo;

	public function __construct(IComponente $elementoC) 
	{
		$this->elemento = $elementoC;
        $this->_descrizione = "Luci natalizie";
        $this->_prezzo = 15;
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
