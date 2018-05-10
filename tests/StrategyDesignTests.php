<?php

use PHPUnit\Framework\TestCase;

include_once('src/strategyDesign/Cliente.php');

class StrategyDesignTests extends TestCase
{
    public function testInizializza()
    {
        $contatore=new Cliente();
        
        return $contatore;
        
    }

    /**
     * @depends testInizializza
     */
    public function testStampa(Cliente $contatore)
    {
        $contatore->stampa();
        $this->expectOutputString("Ultima operazione: [Ho inizializzato]  - Valore corrente: [0]\n");

        return $contatore;
    }

    /**
     * @depends testInizializza
     */
    public function testIncrementa(Cliente $contatore)
    {
        $contatore->incrementa();
        $contatore->stampa();
        $this->expectOutputString("Ultima operazione: [Ho incrementato]  - Valore corrente: [1]\n");

        return $contatore;
    }

    /**
     * @depends testIncrementa
     */
    public function testIncrementa2(Cliente $contatore)
    {
        $contatore->incrementa();
        $contatore->stampa();
        $this->expectOutputString("Ultima operazione: [Ho incrementato]  - Valore corrente: [2]\n");

        return $contatore;
    }

    /**
     * @depends testIncrementa2
     */
    public function testDecrementa(Cliente $contatore)
    {
        $contatore->decrementa();
        $contatore->stampa();
        $this->expectOutputString("Ultima operazione: [Ho decrementato]  - Valore corrente: [1]\n");

        return $contatore;
    }

     /**
     * @depends testDecrementa
     */
    public function testAzzera(Cliente $contatore)
    {
        $contatore->azzera();
        $contatore->stampa();
        $this->expectOutputString("Ultima operazione: [Ho azzerato]  - Valore corrente: [0]\n");

        return $contatore;
    }
}