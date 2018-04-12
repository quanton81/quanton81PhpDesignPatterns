<?php

use PHPUnit\Framework\TestCase;

include_once('src/factoryMethod/WheelFactory.php');
include_once('src/factoryMethod/EngineFactory.php');
include_once('src/factoryMethod/BodyFactory.php');

class FactoryMethodTest extends TestCase
{
    public function testWheelFactory()
    {
        $wheelFactory = new WheelFactory();
        $this->assertSame("4 Wheels", $wheelFactory->startFactory());
    }
    
    public function testEngineFactory()
    {
        $engineFactory = new EngineFactory();
        $this->assertSame("V12 Engine", $engineFactory->startFactory());
    }
    
    public function testBodyFactory()
    {
        $bodyFactory = new BodyFactory();
        $this->assertSame("Roadster", $bodyFactory->startFactory());
    }
}