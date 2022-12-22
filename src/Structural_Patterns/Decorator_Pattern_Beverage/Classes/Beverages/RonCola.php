<?php


namespace App\Structural_Patterns\Decorator_Pattern_Beverage\Classes\Beverages;


use App\Structural_Patterns\Decorator_Pattern_Beverage\Interfaces\Beverage;

class RonCola extends Beverage
{
    private float $cost;

    public function __construct(){
        $this->description = "Martini";
        $this->cost= 5;
    }

    public function getCost(): float
    {
        return $this->cost;
    }
}