<?php

namespace App\Tests\Structural_Patterns\Bridge_Pattern;

use App\Structural_Patterns\Bridge_Pattern\Classes\Engine\ElectricEngine;
use App\Structural_Patterns\Bridge_Pattern\Classes\Engine\GasEngine;
use App\Structural_Patterns\Bridge_Pattern\Classes\Vehicle\Car;
use PHPUnit\Framework\TestCase;

class BridgePatternTest extends TestCase
{
    public function test_can_create_a_concrete_vehicle_with_different_engines()
    {
        //GIVEN
        $electricCar  = new Car(new ElectricEngine(1500));
        $gasCar  = new Car(new GasEngine(70));

        //WHEN //THEN
        $this->assertEquals("A Car with 4 wheels with a Electric engine",$electricCar->showSettings());
        $this->assertEquals("A Car with 4 wheels with a Gas engine",$gasCar->showSettings());
    }
}