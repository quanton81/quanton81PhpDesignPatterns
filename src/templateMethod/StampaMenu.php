<?php

include_once('MenuNatale.php');
include_once('MenuCapodanno.php');

class StampaMenu
{
	private $_menuNatale;
	private $_menuCapodanno;

	function __construct()
	{
		$this->_menuNatale=new MenuNatale();
		$this->_menuCapodanno=new MenuCapodanno();
	}

	public function stampaMenuNatale()
	{
		$this->_menuNatale->stampaMenu(new Prodotto("Tagliere misto formaggi e affettati", 15),new Prodotto("Tagliatelle al ragu", 7.5),new Prodotto("Stinco di maiale", 7.5));
	}

	public function stampaMenuCapodanno()
	{
		$this->_menuCapodanno->stampaMenu(new Prodotto("Tagliere di crostini misti", 8.5),new Prodotto("Caramelle ricotta e spinaci", 8.5),new Prodotto("Tagliata rucola e grana", 13));
	}
}

$stampante=new StampaMenu();

$stampante->stampaMenuNatale();
$stampante->stampaMenuCapodanno();
