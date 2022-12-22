<?php

namespace App\Structural_Patterns\Bridge_Pattern\Classes\Engine;

class ElectricEngine implements EngineInterface
{
    private float $batteryCapacity;
    private float $currentBatteryLevel;
    private const type = "Electric";

    public function __construct(float $batteryCapacity)
    {
        $this->batteryCapacity = $batteryCapacity;
    }

    public function addResource(float $amount): void
    {
        if($this->currentBatteryLevel + $amount <= $this->batteryCapacity){
            echo "added $amount liter of water";
            $this->currentBatteryLevel = $this->currentBatteryLevel + $amount;
        }

    }

    public function consumeResource(float $amount): void
    {
        if($this->currentBatteryLevel - $amount >= 0)
        {
            echo "consumed $amount liter of water";
            $this->currentBatteryLevel = $this->currentBatteryLevel - $amount;
        }    
       
    }

    public function getEngineType(): string
    {
        return self::type;
    }
}