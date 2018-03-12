<?php

include_once('Product.php');

class WheelProduct implements Product
{
    private $product;

    public function getProperties()
    {
        $this->product = "4 Wheels";
        return $this->product;
    }
}
