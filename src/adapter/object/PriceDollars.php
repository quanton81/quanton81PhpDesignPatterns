<?php

include_once('IPrice.php');

class PriceDollars implements IPrice
{
    private $_dollars;

    public function calculate($products, $price)
    {
        $this->_dollars = $products * $price;
        return $this->_dollars;
    }
}
