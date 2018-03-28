<?php

class Prodotto
{
    private $_prezzo;
    private $_descrizione;

    function __construct($descrizione, $prezzo)
	{
		$this->_prezzo=$prezzo;
        $this->_descrizione=$descrizione;
	}
    public function setPrezzo($prezzo)
    {
        $this->_prezzo = $prezzo;
    }
    public function setDescrizione($descrizione)
    {
        $this->_descrizione = $descrizione;
    }
    public function getPrezzo()
    {
        return $this->_prezzo;
    }
    public function getDescrizione()
    {
        return $this->_descrizione;
    }
}
