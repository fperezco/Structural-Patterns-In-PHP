<?php

namespace App\Structural_Patterns\Bridge_Pattern\Classes\Vehicle;

class Car extends Vehicle
{
    private int $wheels = 4;

    public function showSettings() : string
    {
        return "A Car with 4 wheels with a ".$this->getEngine()->getEngineType()." engine";
    }
}