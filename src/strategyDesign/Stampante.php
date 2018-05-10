<?php

class Stampante implements IStrategia
{	
	public function operazione($valore)
	{
		return $valore;
	}	
}