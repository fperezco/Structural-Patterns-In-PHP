<?php

namespace App\Structural_Patterns\Composite_Pattern\Classes;

use App\Structural_Patterns\Composite_Pattern\Interfaces\ElementInterface;

abstract class ElementComposite implements ElementInterface
{
    public abstract function add(ElementInterface $e);
    public abstract function remove(ElementInterface $e);
    public abstract function render(): string;

}