<?php
use PHPUnit\Framework\TestCase;

include_once('src/adapter/object/PrezzoEuro.php');
include_once('src/adapter/object/PriceDollars.php');
include_once('src/adapter/object/DollariConvertitore.php');

class ObjectAdapterTests extends TestCase
{
    public function testPrezzoEuro()
    {
        $prezzoEuro = new PrezzoEuro();
        $this->assertSame(100, $prezzoEuro->calcola(4, 25));
    }
    
    public function testPrezzoDollari()
    {
        $priceDollars = new PriceDollars();
        $dollariConvertitore = new DollariConvertitore($priceDollars);
        $this->assertSame(120.0, $dollariConvertitore->calcola(4, 25));
    }
}