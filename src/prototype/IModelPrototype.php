<?php

abstract class IModelPrototype
{
    protected $model;
    protected $type;
    protected $internal;
    protected $color;
    protected $fuel;
    protected $price;

    public function setModel($value)
    {
        $this->model = $value;
    }

    public function getModel()
    {
        return $this->model;
    }
    
    public function setType($fuel = NULL)
    {
        switch ($fuel)
        {
            case "Metane":
                $this->type = "M";
                break;
            case "Gasoline":
                $this->type = "G";
                break;
            case "Diesel":
                $this->type = "D";
                break;
            case "Electric":
                $this->type = "E";
                break;
            default:
                $this->type = "i";
                break;
        }
        
    }

    public function getType()
    {
        return $this->type;
    }
    
    public function setInternal($value)
    {
        $this->internal = $value;
    }

    public function getInternal()
    {
        return $this->internal;
    }
    
    public function setColor($value)
    {
        $this->color = $value;
    }

    public function getColor()
    {
        return $this->color;
    }
    
    public function setFuel($value)
    {
        $this->fuel = $value;
    }

    public function getFuel()
    {
        return $this->fuel;
    }
    
    public function setPrice($value)
    {
        $this->price = $value;
    }

    public function getPrice()
    {
        return $this->price;
    }

    abstract function __clone();
}
