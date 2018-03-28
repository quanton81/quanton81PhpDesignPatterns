<?php

include_once('IStato.php');

class StatoOff implements IStato
{
	private $contesto;
	
	public function __construct(Contesto $contestoAttuale)
	{
		$this->contesto=$contestoAttuale;
	}
	public function accendi()
	{
		echo "Luce accesa.\n";
		$this->contesto->impostaStato($this->contesto->ottieniStatoAcceso());
		
	}
	public function spegni()
	{
		echo "Luce già spenta.\n";
	}
}
