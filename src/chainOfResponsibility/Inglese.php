<?php

include_once('Responsabile.php');

class Inglese extends Responsabile
{

    public function __construct()
    {
        $this->traduttore = 'en';
    }

    public function impostaSuccessore($prossimo)
    {
        $this->successore = $prossimo;
    }

    public function gestisciRichiesta($richiesta)
    {
        if ($richiesta->ottieniLingua() == $this->traduttore)
        {
            return 'English translator.';
        }
        else if ($this->successore != NULL)
        {
            return $this->successore->gestisciRichiesta($richiesta);
        }
    }
}
