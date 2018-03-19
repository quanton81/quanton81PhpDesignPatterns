<?php

include_once('Decoratore.php');

class Luci extends Decoratore
{
    private $_elemento;
    private $_prezzo;

	public function __construct(IComponente $elementoC) 
	{
		$this->elemento = $elementoC;
        $this->_elemento = "Luci natalizie";
        $this->_prezzo = 15;
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
