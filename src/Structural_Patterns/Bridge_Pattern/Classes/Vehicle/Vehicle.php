<?php

namespace App\Structural_Patterns\Bridge_Pattern\Classes\Vehicle;

use App\Structural_Patterns\Bridge_Pattern\Classes\Engine\EngineInterface;

abstract class Vehicle
{
    private EngineInterface $engine;

    public function __construct(EngineInterface $engine)
    {
        $this->engine = $engine;
    }

    public function  accelerate(float $engineResource): void
    {
        $this->engine->addResource($engineResource);
        $this->engine->consumeResource($engineResource);
    }

    public function stop(): void
    {
        echo "Vehicle stopped";
    }

    public function getEngine(): EngineInterface
    {
        return $this->engine;
    }


    public abstract function showSettings(): string;
}