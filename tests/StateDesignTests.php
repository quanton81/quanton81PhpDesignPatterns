<?php

use PHPUnit\Framework\TestCase;

include_once('src/stateDesign/Contesto.php');

class StateDesignTests extends TestCase
{
    public function testAccendiSpento()
    {
        $contesto=new Contesto();
        $contesto->accendiLuce();
        $this->expectOutputString("Luce accesa.\n");

        return $contesto;
        
    }

    /**
     * @depends testAccendiSpento
     */
    public function testAccendiAcceso(Contesto $contesto)
    {
        $contesto->accendiLuce();
        $this->expectOutputString("Luce già accesa.\n");

        return $contesto;
    }

    /**
     * @depends testAccendiAcceso
     */
    public function testSpegniAcceso(Contesto $contesto)
    {
        $contesto->spegniLuce();
        $this->expectOutputString("Luce spenta.\n");

        return $contesto;
    }

    /**
     * @depends testSpegniAcceso
     */
    public function testSpegniSpento(Contesto $contesto)
    {
        $contesto->spegniLuce();
        $this->expectOutputString("Luce già spenta.\n");

        return $contesto;
    }
}