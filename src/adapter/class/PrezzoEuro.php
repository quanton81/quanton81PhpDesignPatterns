<?php

class PrezzoEuro
{
    private $_euro;

    public function calcola($prodotti, $prezzo)
    {
        $this->_euro = $prodotti * $prezzo;
        return $this->_euro;
    }
}
