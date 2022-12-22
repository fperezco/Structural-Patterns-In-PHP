<?php

namespace App\Tests\Structural_Patterns\Decorator_Pattern_Beverage;

use App\Structural_Patterns\Decorator_Pattern_Beverage\Classes\Beverages\Martini;
use App\Structural_Patterns\Decorator_Pattern_Beverage\Classes\Condiments\ExtraIce;
use App\Structural_Patterns\Decorator_Pattern_Beverage\Classes\Condiments\Sugar;
use PHPUnit\Framework\TestCase;

class DecoratorPatternTest extends TestCase
{
    public function test_that_total_costs_are_calculated_recursively()
    {
        //GIVEN
        $martini = new Martini();
        $martiniWithExtraIce = new ExtraIce($martini);
        $martiniWithExtraIceAndSugar = new Sugar($martiniWithExtraIce);

        //WHEN
        $expectedDescription = "Martini  + extra Ice + sugar ";
        $expectedCost = 5.4;

        //THEN
        $this->assertEquals($expectedDescription, $martiniWithExtraIceAndSugar->getDescription());
        $this->assertEquals($expectedCost, $martiniWithExtraIceAndSugar->getCost());
    }
}