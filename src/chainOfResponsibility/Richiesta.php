<?php

class Richiesta
{
    private $_lingua;

    public function __construct($lingua)
    {
        $this->_lingua = $lingua;
    }

    public function ottieniLingua()
    {
        return $this->_lingua;
    }
}
