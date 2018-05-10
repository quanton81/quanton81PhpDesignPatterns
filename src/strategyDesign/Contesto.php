<?php

include_once('IStrategia.php');

class Contesto 
{
    private $strategia;
 
    public function __construct(IStrategia $strategia) 
	{
        $this->strategia = $strategia;
    }
 
    public function operazione($valore) 
	{
        return $this->strategia->operazione($valore);
    }
}