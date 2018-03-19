<?php

include_once('IComponente.php');

class Albero extends IComponente
{
	public function __construct()
	{
		$this->elemento = "Albero natalizio";
	}

	public function getElemento()
	{
		return $this->elemento;
	}

	public function getPrezzo()
	{
		return 150;
	}
}
