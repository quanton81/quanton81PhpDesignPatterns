<?php

include_once('Richiesta.php');
include_once('Italiano.php');
include_once('Francese.php');
include_once('Tedesco.php');
include_once('Inglese.php');
include_once('Spagnolo.php');

class Traduttore
{
    private $_lingua;
    private $_traduttore;

    public function __construct($lingua = 'it')
    {
        $this->_lingua = $lingua;

        $italiano = new Italiano();
        $francese = new Francese();
        $tedesco = new Tedesco();
        $inglese = new Inglese();
        $spagnolo = new Spagnolo();
        $italiano->impostaSuccessore($francese);
        $francese->impostaSuccessore($tedesco);
        $tedesco->impostaSuccessore($inglese);
        $inglese->impostaSuccessore($spagnolo);

        $richiesta = new Richiesta($this->_lingua);
        $this->_traduttore = $italiano->gestisciRichiesta($richiesta);
    }

    public function ottieniTraduttore()
    {
        return $this->_traduttore;
    }
}
