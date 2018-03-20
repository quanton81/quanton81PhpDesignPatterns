<?php

include_once('Responsabile.php');

class Tedesco extends Responsabile
{

    public function __construct()
    {
        $this->traduttore = 'de';
    }

    public function impostaSuccessore($prossimo)
    {
        $this->successore = $prossimo;
    }

    public function gestisciRichiesta($richiesta)
    {
        if ($richiesta->ottieniLingua() == $this->traduttore)
        {
            return 'Deutscher Übersetzer.';
        }
        else if ($this->successore != NULL)
        {
            return $this->successore->gestisciRichiesta($richiesta);
        }
    }
}
