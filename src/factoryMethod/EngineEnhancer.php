<?php

class EngineEnhancer
{
    private $_power;

    public function addPower()
    {
        $this->_power = "V12";
        return $this->_power;
    }
}