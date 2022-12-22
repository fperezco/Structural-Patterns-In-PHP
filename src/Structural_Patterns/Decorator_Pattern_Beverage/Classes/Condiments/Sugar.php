<?php


namespace App\Structural_Patterns\Decorator_Pattern_Beverage\Classes\Condiments;


use App\Structural_Patterns\Decorator_Pattern_Beverage\Classes\Condiments\Traits\CostAndDescriptionTrait;
use App\Structural_Patterns\Decorator_Pattern_Beverage\Interfaces\Beverage;
use App\Structural_Patterns\Decorator_Pattern_Beverage\Interfaces\CondimentDecorator;

/**
 * A condiment class, it will wrap a beverage, for calculate cost will add its cost to the parent cost
 * and for the description it will add itself after call the parent description.
 * If another condiment wrap it the recursivity will do the job by the same way
 * Class Sugar
 * @package App\Beverage\Classes\Condiments
 */
class Sugar extends CondimentDecorator
{
    use CostAndDescriptionTrait;

    private Beverage$beverage;
    private float $cost;
    public function __construct(Beverage $beverage)
    {
        $this->description="sugar";
        $this->cost = 0.2;
        $this->beverage=$beverage;
    }

}