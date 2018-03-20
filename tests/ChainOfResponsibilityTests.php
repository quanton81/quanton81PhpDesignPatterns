<?php

use PHPUnit\Framework\TestCase;

include_once('src/chainOfResponsibility/Traduttore.php');

class ChainOfResponsibilityTests extends TestCase
{
    public function testTraduttoreItEuro()
    {
        $traduttore = new Traduttore('it');
        $this->assertSame('Traduttore Italiano.', $traduttore->ottieniTraduttore());
    }
    
    public function testTraduttoreEnEuro()
    {
        $traduttore = new Traduttore('en');
        $this->assertSame('English translator.', $traduttore->ottieniTraduttore());
    }

    public function testTraduttoreEsEuro()
    {
        $traduttore = new Traduttore('es');
        $this->assertSame('Traductor de español.', $traduttore->ottieniTraduttore());
    }

    public function testTraduttoreFrEuro()
    {
        $traduttore = new Traduttore('fr');
        $this->assertSame('Traducteur français.', $traduttore->ottieniTraduttore());
    }

    public function testTraduttoreDeEuro()
    {
        $traduttore = new Traduttore('de');
        $this->assertSame('Deutscher Übersetzer.', $traduttore->ottieniTraduttore());
    }
}