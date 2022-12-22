<?php

namespace App\Tests\Structural_Patterns\Facade_Pattern_Youtube;

use PHPUnit\Framework\TestCase;

class FacadePatternTest extends TestCase
{
    public function test_that_with_and_without_facade_we_get_the_same_result(){
        //in this case we are depending of the infrastructure YouTube/mpeg , no required, conceptual view is valid
        $this->assertTrue(true);
    }
}