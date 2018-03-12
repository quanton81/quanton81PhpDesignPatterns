<?php

include_once('CarParts.php');

class CarPartsInfo
{
    private $_carParts;
    
    public function __construct()
    {
        $this->_carParts = new CarParts();
        echo "\nCar: {$this->_carParts->getBody()->startFactory()}\n";
        echo "{$this->_carParts->getWheels()->startFactory()}\n";
        echo "{$this->_carParts->getEngine()->startFactory()}\n\n";
    }
}
