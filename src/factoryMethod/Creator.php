<?php

abstract class Creator
{

    protected abstract function factoryMethod();

    public function startFactory()
    {
        $fm = $this->factoryMethod();
        return $fm;
    }
}
