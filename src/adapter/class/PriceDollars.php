<?php

class PriceDollars
{
    private $_dollars;

    public function calculate($products, $price)
    {
        $this->_dollars = $products * $price;
        return $this->_dollars;
    }
}
