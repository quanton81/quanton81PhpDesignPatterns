<?php

include_once('PriceDollars.php');
include_once('IConverter.php');

class DollariConvertitore extends PriceDollars implements IConverter
{
    private $_prezzo;

    public function calcola($prodotti, $prezzo)
    {
        $this->_prezzo = $prezzo * 1.2;
        return $this->calculate($prodotti, $this->_prezzo);
    }
}
