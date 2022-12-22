<?php

namespace App\Structural_Patterns\Bridge_Pattern\Classes\Engine;

class HydrogenEngine implements EngineInterface
{
    private float $hydrogenTank;
    private float $currentHydrogen;
    private const type = "Hydrogen";

    public function __construct(float $hydrogenTankCapacity)
    {
        $this->hydrogenTank = $hydrogenTankCapacity;
    }

    public function addResource(float $amount): void
    {
        if($this->currentHydrogen + $amount <= $this->hydrogenTank){
            echo "added $amount m3 of hydrogen";
            $this->currentHydrogen = $this->currentHydrogen + $amount;
        }

    }

    public function consumeResource(float $amount): void
    {
        if($this->currentHydrogen - $amount >= 0)
        {
            echo "consumed $amount m3 of hydrogen";
            $this->currentHydrogen = $this->currentHydrogen - $amount;
        }
    }

    public function getEngineType(): string
    {
        return self::type;
    }
}