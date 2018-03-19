<?php

include_once('PrezzoEuro.php');
include_once('PriceDollars.php');
include_once('DollariConvertitore.php');

class CalcolaPrezzo
{
    private $_richiesta;
    private $_richiestaDollari;
    private $_dollariConvertitore;

    public function __construct()
    {
        $this->_richiesta = new PrezzoEuro();
        $this->_richiestaDollari = new PriceDollars();
        $this->_dollariConvertitore = new DollariConvertitore($this->_richiestaDollari);
    }

    public function calcolaPrezzoEuro($pezzi, $prezzo)
    {
        return $this->_richiesta->calcola($pezzi, $prezzo);
    }

    public function calcolaPrezzoDollari($pezzi, $prezzo)
    {
        return $this->_dollariConvertitore->calcola($pezzi, $prezzo);
    }
}

$calcolatore = new CalcolaPrezzo();

echo "Prezzo in euro: {$calcolatore->calcolaPrezzoEuro(20, 40)}\n";
echo "Prezzo in dollari: {$calcolatore->calcolaPrezzoDollari(20, 40)}";