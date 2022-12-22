<?php

namespace App\Structural_Patterns\Composite_Pattern\Classes;

use App\Structural_Patterns\Composite_Pattern\Interfaces\ElementInterface;

class HtmlInput implements ElementInterface
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function render(): string
    {
        return "<input name='$this->name'></input>";
    }

    public function getName(): string
    {
        return $this->name;
    }
}