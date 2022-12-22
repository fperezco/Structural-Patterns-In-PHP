<?php

namespace App\Structural_Patterns\Bridge_Pattern\Classes\Engine;

interface EngineInterface
{
    public function addResource(float $amount): void;
    public function consumeResource(float $amount): void;
    public function getEngineType(): string;
}