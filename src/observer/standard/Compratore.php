<?php

class Compratore implements SplObserver 
{
	private $_utente;
	private $_valore;

	public function __construct($utente = "Osservatore", $valore = 100)
	{
		$this->_utente = $utente;
		$this->_valore = $valore;
	}

	public function setValore($valore = 100)
	{
		$this->_valore = isset($valore) ? $valore : $this->_valore;
	}

	public function getValore()
	{
		return $this->_valore;
	}

	public function update(SplSubject $subject) 
	{
		if($subject->getValore() < $this->_valore)
		{
			echo $this->_utente . ": disponibile a comprare " . $subject->getNome() . " a " . $subject->getValore() . "$\n";
		}
    }
}