<?php

include_once('IModelPrototype.php');

class Exclusive extends IModelPrototype
{

    public function __construct()
    {
        $this->model = __CLASS__;
        $this->internal = "Aluminium";
        $this->color = "Gray";
        $this->fuel = "Gasoline";
        $this->price = 15000;
        $this->_type = $this->setType();
    }

    function __clone()
    {
        
    }
}
