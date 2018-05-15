<?php 

class Prodotto implements SplSubject 
{
	private $_nome;
	private $_valore;
	private $_compratori;
	
	public function __construct()
	{
		$this->_compratori = new SplObjectStorage();
	}
	
	public function attach(SplObserver $observer) 
	{
        $this->_compratori->attach($observer);
    }
	
	public function detach(SplObserver $observer) 
	{
        $this->_compratori->detach($observer);
    }
	
	public function notify() 
	{
        foreach ($this->_compratori as $compratore) 
		{
            $compratore->update($this);
		}
	}

	public function setDati($nome = 'Mantello', $valore = 350)
	{
		$this->_nome = isset($nome) ? $nome : NULL;
		$this->_valore = isset($valore) ? $valore : NULL;
	}
	
	public function getNome() 
	{
        return $this->_nome;
    }

	public function getValore() 
	{
        return $this->_valore;
    }
}