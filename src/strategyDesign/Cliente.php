<?php

include_once('Contesto.php');
include_once('Stampante.php');
include_once('Incrementatore.php');
include_once('Decrementatore.php');
include_once('Azzeratore.php');

class Cliente 
{	
	private $_valore;
	private $_ultimaOperazione;

	public function __construct() 
	{
        $this->_valore = 0;
		$this->_ultimaOperazione = "Ho inizializzato";
    }

	public function stampa()
	{
		$context=new Contesto(new Stampante());
		$this->_valore = $context->operazione($this->_valore);
		echo "Ultima operazione: [{$this->_ultimaOperazione}]  - Valore corrente: [{$this->_valore}]\n";
	}
	
	public function incrementa()
	{
		$context=new Contesto(new Incrementatore());
		$this->_valore = $context->operazione($this->_valore);
		$this->_ultimaOperazione = "Ho incrementato";
	}
	
	public function decrementa()
	{
		$context=new Contesto(new Decrementatore());
		$this->_valore = $context->operazione($this->_valore);
		$this->_ultimaOperazione = "Ho decrementato";
	}
	
	public function azzera()
	{
		$context=new Contesto(new Azzeratore());
		$this->_valore = $context->operazione($this->_valore);
		$this->_ultimaOperazione = "Ho azzerato";
	}
}