<?php

use PHPUnit\Framework\TestCase;

include_once('src/decorator/Albero.php');
include_once('src/decorator/Palline.php');
include_once('src/decorator/Luci.php');
include_once('src/decorator/Stella.php');

class DecoratorTests extends TestCase
{
    public function testPrezzoCompleto()
    {
        $albero = new Albero();
        $alberoPalline = new Palline($albero);
		$alberoPallineLuci = new Luci($alberoPalline);
		$alberoCompleto = new Stella($alberoPallineLuci);

        $this->assertSame(180, $alberoCompleto->getPrezzo());
    }

    public function testPrezzoAlberoPallineLuci()
    {
        $albero = new Albero();
        $alberoPalline = new Palline($albero);
		$alberoPallineLuci = new Luci($alberoPalline);

        $this->assertSame(168, $alberoPallineLuci->getPrezzo());
    }

    public function testPrezzoAlberoPallineStella()
    {
        $albero = new Albero();
        $alberoPalline = new Palline($albero);
		$alberoPallineStella = new Stella($alberoPalline);

        $this->assertSame(165, $alberoPallineStella->getPrezzo());
    }
    
    public function testElementiCompleto()
    {
        $albero = new Albero();
        $alberoPalline = new Palline($albero);
		$alberoPallineLuci = new Luci($alberoPalline);
		$alberoCompleto = new Stella($alberoPallineLuci);

        $this->assertSame("Albero natalizio, Palline di natale, Luci natalizie, Stella di natale", $alberoCompleto->getElemento());
    }

    public function testElementiAlberoPallineLuci()
    {
        $albero = new Albero();
        $alberoPalline = new Palline($albero);
		$alberoPallineLuci = new Luci($alberoPalline);
		
        $this->assertSame("Albero natalizio, Palline di natale, Luci natalizie", $alberoPallineLuci->getElemento());
    }

    public function testElementiAlberoPallineStella()
    {
        $albero = new Albero();
        $alberoPalline = new Palline($albero);
		$alberoPallineStella = new Stella($alberoPalline);
		
        $this->assertSame("Albero natalizio, Palline di natale, Stella di natale", $alberoPallineStella->getElemento());
    }
}