<?php


namespace App\Structural_Patterns\Adapter_Pattern_Notification\Classes;


use App\Structural_Patterns\Adapter_Pattern_Notification\Interfaces\Notification;

/**
 * A class that implements the correct interface
 * Class EmailNotification
 * @package App\Adapter_Pattern_Notification\Classes
 */
class EmailNotification implements Notification
{
    private $adminEmail;

    public function __construct(string $adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }

    public function send(string $title, string $message): void
    {
        //mail($this->adminEmail, $title, $message);
        echo "Sent email with title '$title' to '{$this->adminEmail}' that says '$message'.";
    }
}