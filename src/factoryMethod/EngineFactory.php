<?php

include_once('Creator.php');
include_once('EngineProduct.php');

class EngineFactory extends Creator
{

    protected function factoryMethod()
    {
        $product = new EngineProduct();
        return($product->getProperties());
    }
}
