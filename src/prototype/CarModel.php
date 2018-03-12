<?php

include_once('Executive.php');
include_once('Exclusive.php');
include_once('Premium.php');

class CarModel
{
    public $_executive;
    public $_exclusive;
    public $_premium;
    public $_executiveMetane;
    public $_exclusiveDiesel;
    public $_premiumElectric;

    public function __construct()
    {
        $this->_executive = new Executive();
        $this->_exclusive = new Exclusive();
        $this->_premium = new Premium();

        $this->_executiveMetane = clone $this->_executive;
        $this->_exclusiveDiesel = clone $this->_exclusive;
        $this->_premiumElectric = clone $this->_premium;

        $this->_executiveMetane->setFuel("Metane");
        $this->_executiveMetane->setPrice($this->_executiveMetane->getPrice() + 3000);
        $this->_executiveMetane->setType($this->_executiveMetane->getFuel());
        
        $this->_exclusiveDiesel->setFuel("Diesel");
        $this->_exclusiveDiesel->setPrice($this->_exclusiveDiesel->getPrice() + 5000);
        $this->_exclusiveDiesel->setType($this->_exclusiveDiesel->getFuel());
        
        $this->_premiumElectric->setFuel("Electric");
        $this->_premiumElectric->setPrice($this->_premiumElectric->getPrice() + 10000);
        $this->_premiumElectric->setType($this->_premiumElectric->getFuel());
        
    }

    public function modeInfo(IModelPrototype $model)
    {
        echo "\nModel: {$model->getModel()} {$model->getType()} - {$model->getPrice()} $\n";
        echo "Internal: {$model->getInternal()}\n";
        echo "Color: {$model->getColor()}\n";
        echo "Fuel: {$model->getFuel()}\n\n";
    }
}
