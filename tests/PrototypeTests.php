<?php

use PHPUnit\Framework\TestCase;

include_once('src/prototype/CarModel.php');

class PrototypeTest extends TestCase
{

    public function testCarModel()
    {

        $carModel = new CarModel();
        $vars = get_object_vars($carModel);

        $this->assertCount(6, $vars);

        foreach ($vars as $value)
        {
            switch ($value->getType())
            {
                case "G":
                    if ($value->getModel() == "Executive")
                    {
                        $this->assertSame($value->getPrice(), 10000);
                    }
                    else if ($value->getModel() == "Exclusive")
                    {
                        $this->assertSame($value->getPrice(), 15000);
                    }
                    else if ($value->getModel() == "Premium")
                    {
                        $this->assertSame($value->getPrice(), 30000);
                    }
                    break;
                case "M":
                    if ($value->getModel() == "Executive")
                    {
                        $this->assertSame($value->getPrice(), 13000);
                    }
                    break;
                case "D":
                    if ($value->getModel() == "Exclusive")
                    {
                        $this->assertSame($value->getPrice(), 20000);
                    }
                    break;
                case "E":
                    if ($value->getModel() == "Premium")
                    {
                        $this->assertSame($value->getPrice(), 40000);
                    }
                    break;
            }
        }
    }
}
