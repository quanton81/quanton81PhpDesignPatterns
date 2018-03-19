<?php

include_once('IComponente.php');
include_once('Albero.php');
include_once('Palline.php');
include_once('Luci.php');
include_once('Stella.php');

class Compratore
{	
	private $albero;
	
	public function __construct()
	{		
		$this->albero = new Albero();
		$this->albero = $this->wrapComponente($this->albero);
	}
	
	private function wrapComponente(IComponente $componente)
	{
		$componente = new Palline($componente);
		$componente = new Luci($componente);
		$componente = new Stella($componente);

		return $componente;
	}

	public function getElementi()
	{
		return $this->albero->getElemento();
	}

	public function getPrezzo()
	{
		return $this->albero->getPrezzo();
	}
}

$compratore = new Compratore();

echo "Elementi comprati: {$compratore->getElementi()}\n";
echo "Elementi Prezzo: {$compratore->getPrezzo()}";