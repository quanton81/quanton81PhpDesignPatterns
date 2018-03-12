<?php

include_once('Creator.php');
include_once('BodyProduct.php');

class BodyFactory extends Creator
{

    protected function factoryMethod()
    {
        $product = new BodyProduct();
        return($product->getProperties());
    }
}
