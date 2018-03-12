<?php

include_once('IModelPrototype.php');

class Premium extends IModelPrototype
{

    public function __construct()
    {
        $this->model = __CLASS__;
        $this->internal = "Leather";
        $this->color = "Blue";
        $this->fuel = "Gasoline";
        $this->price = "30000";
        $this->_type = $this->setType();
    }

    function __clone()
    {
        
    }
}
