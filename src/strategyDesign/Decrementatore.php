<?php

class Decrementatore implements IStrategia
{	
	public function operazione($valore)
	{
		return --$valore;
	}	
}