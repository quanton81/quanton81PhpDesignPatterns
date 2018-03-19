<?php

include_once('PriceDollars.php');
include_once('IConverter.php');

class DollariConvertitore implements IConverter
{
    private $_prezzo;
    private $_priceDollars;
    
    public function __construct(IPrice $priceDollars)
	{
        $this->_priceDollars = $priceDollars;
    }

    public function calcola($prodotti, $prezzo)
    {
        $this->_prezzo = $prezzo * 1.2;
        return $this->_priceDollars->calculate($prodotti, $this->_prezzo);
    }
}
