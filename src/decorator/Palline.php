<?php

include_once('Decoratore.php');

class Palline extends Decoratore
{
    private $_elemento;
    private $_prezzo;

	public function __construct(IComponente $elementoC) 
	{
		$this->elemento = $elementoC;
        $this->_elemento = "Palline di natale";
        $this->_prezzo = 3;
	}

	public function getElemento() 
	{
		return $this->elemento->getElemento() . ", " . $this->_elemento;
	}

	public function getPrezzo() 
	{
		return $this->elemento->getPrezzo() + $this->_prezzo;
	}
}
