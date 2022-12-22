<?php


namespace App\Structural_Patterns\Decorator_Pattern_Beverage\Classes\Condiments\Traits;


trait CostAndDescriptionTrait
{
    public function getCost(): float
    {
        return $this->beverage->getCost() + $this->cost;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . "+ " . $this->description. " ";
    }
}