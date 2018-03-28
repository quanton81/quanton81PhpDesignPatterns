<?php

include_once('IStato.php');

class StatoOn implements IStato
{
	private $contesto;
	
	public function __construct(Contesto $contestoAttuale)
	{
		$this->contesto=$contestoAttuale;
	}
	public function accendi()
	{
		echo "Luce già accesa.\n";	
	}
	public function spegni()
	{
		echo "Luce spenta.\n";
		$this->contesto->impostaStato($this->contesto->ottieniStatoSpento());
	}
}
