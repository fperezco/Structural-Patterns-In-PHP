<?php

namespace App\Structural_Patterns\Composite_Pattern\Classes;

use App\Structural_Patterns\Composite_Pattern\Interfaces\ElementInterface;

class HtmlImage implements ElementInterface
{
    private string $src;

    public function __construct(string $src)
    {
        $this->src = $src;
    }

    public function render(): string
    {
        return "<img src='$this->src'/>";
    }

    public function getName(): string
    {
        return $this->name;
    }
}