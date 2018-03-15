<?php
use PHPUnit\Framework\TestCase;

include_once('src/adapter/class/PrezzoEuro.php');
include_once('src/adapter/class/DollariConvertitore.php');

class ClassAdapterTests extends TestCase
{
    public function testPrezzoEuro()
    {
        $prezzoEuro = new PrezzoEuro();
        $this->assertSame(100, $prezzoEuro->calcola(4, 25));
    }
    
    public function testPrezzoDollari()
    {
        $dollariConvertitore = new DollariConvertitore();
        $this->assertSame(120.0, $dollariConvertitore->calcola(4, 25));
    }
}