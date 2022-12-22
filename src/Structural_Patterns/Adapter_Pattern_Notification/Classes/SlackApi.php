<?php


namespace App\Structural_Patterns\Adapter_Pattern_Notification\Classes;

/**
 * An example of third-part class, for example, that maybe lives
 * in vendor, you can't change it
 * Class SlackApi
 * @package App\Adapter_Pattern_Notification\Classes
 */
class SlackApi
{
    private $login;
    private $apiKey;

    public function __construct(string $login, string $apiKey)
    {
        $this->login = $login;
        $this->apiKey = $apiKey;
    }

    public function logIn(): void
    {
        // Send authentication request to Slack web service.
        echo "Logged in to a slack account '{$this->login}'.\n";
    }

    public function sendMessage(string $chatId, string $message): void
    {
        // Send message post request to Slack web service.
        echo "Posted following message into the '$chatId' chat: '$message'.\n";
    }
}