<?php

include_once('IModelPrototype.php');

class Executive extends IModelPrototype
{

    public function __construct()
    {
        $this->model = __CLASS__;
        $this->internal = "Fabric";
        $this->color = "White";
        $this->fuel = "Gasoline";
        $this->price = 10000;
        $this->_type = $this->setType();
    }

    function __clone()
    {
        
    }
}
