<?php

include_once('PrezzoEuro.php');
include_once('DollariConvertitore.php');

class CalcolaPrezzo
{
    private $_richiesta;
    private $_richiestaDollari;

    public function __construct()
    {
        $this->_richiesta = new PrezzoEuro();
        $this->_richiestaDollari = new DollariConvertitore();
    }

    public function calcolaPrezzoEuro($pezzi, $prezzo)
    {
        return $this->_richiesta->calcola($pezzi, $prezzo);
    }

    public function calcolaPrezzoDollari($pezzi, $prezzo)
    {
        return $this->_richiestaDollari->calcola($pezzi, $prezzo);
    }
}

$calcolatore = new CalcolaPrezzo();

echo "Prezzo in euro: {$calcolatore->calcolaPrezzoEuro(20, 40)}\n";
echo "Prezzo in dollari: {$calcolatore->calcolaPrezzoDollari(20, 40)}";