<?php

namespace App\Structural_Patterns\Bridge_Pattern\Classes\Engine;

class GasEngine implements EngineInterface
{
    private float $gasTank;
    private float $currentFuel;
    private const type = "Gas";

    public function __construct(float $gasCapacity)
    {
        $this->gasTank = $gasCapacity;
    }

    public function addResource(float $amount): void
    {
        if($this->currentFuel + $amount <= $this->gasTank){
            echo "added $amount liter of gas";
            $this->currentFuel = $this->currentFuel + $amount;
        }

    }

    public function consumeResource(float $amount): void
    {
        if($this->currentFuel - $amount >= 0)
        {
            echo "consumed $amount liter of gas";
            $this->currentFuel = $this->currentFuel - $amount;
        }    
       
    }

    public function getEngineType(): string
    {
        return self::type;
    }
}