<?php


namespace App\Structural_Patterns\Decorator_Pattern_Beverage\Interfaces;

/**
 * ParentClass class, every drink must inheritance from this.
 * You cant instanciate it but the methods have a base now
 * Class Beverage
 * @package App\Beverage\Interfaces
 */
abstract class Beverage
{
    protected string $description = "no description";

    public function getDescription(): string{
        return $this->description."  ";
    }

    public abstract function getCost(): float;
}