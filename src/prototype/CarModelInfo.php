<?php

include_once('CarModel.php');

class CarModelInfo
{
    private $_carModel;

    public function __construct()
    {
        $this->_carModel = new CarModel();
        $vars = get_object_vars($this->_carModel);
        foreach ($vars as $value)
        {
            $this->_carModel->modelInfo($value);
        }
    }
}

$carModelInfo = new CarModelInfo();

