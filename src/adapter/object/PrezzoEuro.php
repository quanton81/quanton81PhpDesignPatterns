<?php

include_once('IConverter.php');

class PrezzoEuro implements IConverter
{
    private $_euro;

    public function calcola($prodotti, $prezzo)
    {
        $this->_euro = $prodotti * $prezzo;
        return $this->_euro;
    }
}
