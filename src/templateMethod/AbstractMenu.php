<?php

abstract class AbstractMenu
{
	protected $antipasto;
	protected $primo;
	protected $secondo;
	protected $prezzo;
	
	public function stampaMenu($antipasto = NULL, $primo = NULL, $secondo = NULL)
	{
		$this->antipasto=$antipasto;
		$this->primo=$primo;
		$this->secondo=$secondo;
		
		if(isset($antipasto))
		{
			$this->aggiungiAntipasto($this->antipasto);
		}
		if(isset($primo))
		{
			$this->aggiungiPrimo($this->primo);
		}
		if(isset($secondo))
		{
			$this->aggiungiSecondo($this->secondo);
		}
		$this->aggiungiPrezzo();
	}

	abstract protected function aggiungiAntipasto($antipasto);
	abstract protected function aggiungiPrimo($primo);
	abstract protected function aggiungiSecondo($secondo);
	abstract protected function aggiungiPrezzo();
}
