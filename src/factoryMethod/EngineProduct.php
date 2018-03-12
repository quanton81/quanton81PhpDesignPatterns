<?php

include_once('Product.php');
include_once('EngineEnhancer.php');

class EngineProduct implements Product
{
    private $_product;
    private $_enhancer;

    public function getProperties()
    {
        $this->_enhancer = new EngineEnhancer();
        $this->_product = "{$this->_enhancer->addPower()} Engine";
        return $this->_product;
    }
}
