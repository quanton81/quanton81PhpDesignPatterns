<?php

include_once('StatoOff.php');
include_once('StatoOn.php');

class Contesto
{
	private $statoOff;
	private $statoOn;
	private $statoCorrente;
	
	public function __construct()
	{
		$this->statoOff=new StatoOff($this);
		$this->statoOn=new StatoOn($this);
		$this->statoCorrente=$this->statoOff;
	}
	public function accendiLuce()
	{
		$this->statoCorrente->accendi();
	}
	public function spegniLuce()
	{
		$this->statoCorrente->spegni();
	}
	public function impostaStato(IStato $stato)
	{
		$this->statoCorrente=$stato;
	}
	public function ottieniStatoAcceso()
	{
		return $this->statoOn;
	}
	public function ottieniStatoSpento()
	{
		return $this->statoOff;
	}	
}
