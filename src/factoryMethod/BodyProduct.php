<?php

include_once('Product.php');

class BodyProduct implements Product
{
    private $product;

    public function getProperties()
    {
        $this->product = "Mono Volume";
        return $this->product;
    }
}
