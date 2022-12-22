<?php


namespace App\Structural_Patterns\Adapter_Pattern_Notification\Interfaces;


interface Notification
{
    public function send(string $title, string $message);
}