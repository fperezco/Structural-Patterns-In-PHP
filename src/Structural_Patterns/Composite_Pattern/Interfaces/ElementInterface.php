<?php

namespace App\Structural_Patterns\Composite_Pattern\Interfaces;

interface ElementInterface
{
    public function render(): string;
    public function getName(): string;
}