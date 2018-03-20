<?php

include_once('Responsabile.php');

class Italiano extends Responsabile
{

    public function __construct()
    {
        $this->traduttore = 'it';
    }

    public function impostaSuccessore($prossimo)
    {
        $this->successore = $prossimo;
    }

    public function gestisciRichiesta($richiesta)
    {
        if ($richiesta->ottieniLingua() == $this->traduttore)
        {
            return 'Traduttore Italiano.';
        }
        else if ($this->successore != NULL)
        {
            return $this->successore->gestisciRichiesta($richiesta);
        }
    }
}
