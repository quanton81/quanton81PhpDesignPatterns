<?php

class Incrementatore implements IStrategia
{	
	public function operazione($valore)
	{
		return ++$valore;
	}	
}