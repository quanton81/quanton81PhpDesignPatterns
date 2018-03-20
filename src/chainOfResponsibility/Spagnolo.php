<?php

include_once('Responsabile.php');

class Spagnolo extends Responsabile
{

    public function __construct()
    {
        $this->traduttore = 'es';
    }

    public function impostaSuccessore($prossimo)
    {
        $this->successore = $prossimo;
    }

    public function gestisciRichiesta($richiesta)
    {
        if ($richiesta->ottieniLingua() == $this->traduttore)
        {
            return 'Traductor de español.';
        }
        else if ($this->successore != NULL)
        {
            return $this->successore->gestisciRichiesta($richiesta);
        }
    }
}
