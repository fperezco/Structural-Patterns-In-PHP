<?php

namespace App\Structural_Patterns\Bridge_Pattern\Classes\Vehicle;

class Boat extends Vehicle
{
    private int $metersLong = 15;

    public function showSettings(): string
    {
        return "Boat of $this->metersLong with a ".$this->getEngine()->getEngineType()." engine";
    }
}