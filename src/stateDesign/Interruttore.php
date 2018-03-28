<?php

include_once('Contesto.php');

class Interruttore
{
	private $contesto;
	
	public function __construct()
	{
		$this->contesto=new Contesto();
	}

	public function testaInterrutore()
	{
		$this->contesto->accendiLuce();
		$this->contesto->accendiLuce();
		$this->contesto->spegniLuce();
		$this->contesto->spegniLuce();
	}
}

$interruttore=new Interruttore();

$interruttore->testaInterrutore();
