<?php

class Azzeratore implements IStrategia
{	
	public function operazione($valore)
	{
		return ($valore * 0);
	}	
}