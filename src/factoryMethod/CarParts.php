<?php

include_once('WheelFactory.php');
include_once('EngineFactory.php');
include_once('BodyFactory.php');

class CarParts
{
    private $_wheelObject;
    private $_engineObject;
    private $_bodyObject;

    public function __construct()
    {
        $this->_wheelObject = new WheelFactory();
        $this->_engineObject = new EngineFactory();
        $this->_bodyObject = new BodyFactory();
    }
    
    public function getWheels()
    {
        return $this->_wheelObject;
    }
    
    public function getEngine()
    {
        return $this->_engineObject;
    }
    
    public function getBody()
    {
        return $this->_bodyObject;
    }
}
