<?php

include_once('Creator.php');
include_once('WheelProduct.php');

class WheelFactory extends Creator
{

    protected function factoryMethod()
    {
        $product = new WheelProduct();
        return($product->getProperties());
    }
}
