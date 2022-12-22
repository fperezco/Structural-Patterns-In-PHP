<?php

namespace App\Structural_Patterns\Bridge_Pattern\Classes\Interfaces;

interface ViewInterface
{
    public function __construct(ResourceInterface $resource);
    public function showDescription(): string;
}