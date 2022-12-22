<?php

namespace App\Structural_Patterns\Bridge_Pattern\Classes\Interfaces;

interface ResourceInterface
{
    public function getDescription(): string;
    public function getPicture(): string;
}