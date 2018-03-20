<?php

abstract class Responsabile
{

    protected $successore;
    protected $traduttore;

    abstract public function gestisciRichiesta($richiesta);
    abstract public function impostaSuccessore($prossimo);
    
}
