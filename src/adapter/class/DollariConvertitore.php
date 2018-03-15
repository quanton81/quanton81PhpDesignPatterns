<?php

include_once('PriceDollars.php');
include_once('ITarget.php');

class DollariConvertitore extends PriceDollars implements ITarget
{
    private $_prezzo;

    public function calcola($prodotti, $prezzo)
    {
        $this->_prezzo = $prezzo * 1.2;
        return $this->calculate($prodotti, $this->_prezzo);
    }
}
