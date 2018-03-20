<?php

include_once('Responsabile.php');

class Francese extends Responsabile
{

    public function __construct()
    {
        $this->traduttore = 'fr';
    }

    public function impostaSuccessore($prossimo)
    {
        $this->successore = $prossimo;
    }

    public function gestisciRichiesta($richiesta)
    {
        if ($richiesta->ottieniLingua() == $this->traduttore)
        {
            return 'Traducteur français.';
        }
        else if ($this->successore != NULL)
        {
            return $this->successore->gestisciRichiesta($richiesta);
        }
    }
}
