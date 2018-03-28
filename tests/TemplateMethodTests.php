<?php

use PHPUnit\Framework\TestCase;

include_once('src/templateMethod/MenuNatale.php');
include_once('src/templateMethod/MenuCapodanno.php');

class TemplateMethodTests extends TestCase
{
    public function testPrezzoMenuNatale1()
    {
        $menuNatale=new MenuNatale();
        $menuNatale->stampaMenu(new Prodotto("Tagliere misto formaggi e affettati", 15));
        $this->expectOutputString("Antipasto: Tagliere misto formaggi e affettati\n************\nPrezzo cena di Natale: 15 Euro\n************\n\n");
    }

    public function testPrezzoMenuNatale2()
    {
        $menuNatale=new MenuNatale();
        $menuNatale->stampaMenu(null, new Prodotto("Tagliatelle al ragu", 7.5));
        $this->expectOutputString("Primo: Tagliatelle al ragu\n************\nPrezzo cena di Natale: 7.5 Euro\n************\n\n");
    }

    public function testPrezzoMenuNatale3()
    {
        $menuNatale=new MenuNatale();
        $menuNatale->stampaMenu(null, null, new Prodotto("Stinco di maiale", 7.5));
        $this->expectOutputString("Secondo: Stinco di maiale\n************\nPrezzo cena di Natale: 7.5 Euro\n************\n\n");
    }

    public function testPrezzoMenuNatale4()
    {
        $menuNatale=new MenuNatale();
        $menuNatale->stampaMenu(new Prodotto("Tagliere misto formaggi e affettati", 15), null, new Prodotto("Stinco di maiale", 7.5));
        $this->expectOutputString("Antipasto: Tagliere misto formaggi e affettati\nSecondo: Stinco di maiale\n************\nPrezzo cena di Natale: 22.5 Euro\n************\n\n");
    }

    public function testPrezzoMenuCapodanno1()
    {
        $menuCapodanno=new MenuCapodanno();
        $menuCapodanno->stampaMenu(new Prodotto("Tagliere di crostini misti", 8.5));
        $this->expectOutputString("Tagliere di crostini misti - Antipasto a buffet\n------------\nPrezzo pranzo di Capodanno: 8.5 Euro\n------------\n\n");
    }

    public function testPrezzoMenuCapodanno2()
    {
        $menuCapodanno=new MenuCapodanno();
        $menuCapodanno->stampaMenu(null, new Prodotto("Caramelle ricotta e spinaci", 8.5));
        $this->expectOutputString("Caramelle ricotta e spinaci - Primo a buffet\n------------\nPrezzo pranzo di Capodanno: 8.5 Euro\n------------\n\n");
    }

    public function testPrezzoMenuCapodanno3()
    {
        $menuCapodanno=new MenuCapodanno();
        $menuCapodanno->stampaMenu(null, null, new Prodotto("Tagliata rucola e grana", 13));
        $this->expectOutputString("Tagliata rucola e grana - Secondo servito\n------------\nPrezzo pranzo di Capodanno: 13 Euro\n------------\n\n");
    }

    public function testPrezzoMenuCapodanno4()
    {
        $menuCapodanno=new MenuCapodanno();
        $menuCapodanno->stampaMenu(new Prodotto("Tagliere di crostini misti", 8.5), null, new Prodotto("Tagliata rucola e grana", 13));
        $this->expectOutputString("Tagliere di crostini misti - Antipasto a buffet\nTagliata rucola e grana - Secondo servito\n------------\nPrezzo pranzo di Capodanno: 21.5 Euro\n------------\n\n");
    }
}