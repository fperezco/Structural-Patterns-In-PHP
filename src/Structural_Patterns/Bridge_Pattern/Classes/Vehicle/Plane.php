<?php

namespace App\Structural_Patterns\Bridge_Pattern\Classes\Vehicle;

class Plane extends Vehicle
{
    public function showSettings(): string
    {
        return "Just a plane with a ".$this->getEngine()->getEngineType()." engine";
    }
}