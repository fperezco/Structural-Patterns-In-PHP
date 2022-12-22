<?php

namespace App\Tests\Structural_Patterns\Adapter_Pattern_Notification;

use App\Structural_Patterns\Adapter_Pattern_Notification\Classes\EmailNotification;
use App\Structural_Patterns\Adapter_Pattern_Notification\Classes\SlackApi;
use App\Structural_Patterns\Adapter_Pattern_Notification\Classes\SlackNotification;
use App\Structural_Patterns\Adapter_Pattern_Notification\Interfaces\Notification;
use Exception;
use PHPUnit\Framework\TestCase;

class AdapterPatternTest extends TestCase
{

    public function test_class_returned_by_email_notification_fits_Notification_interface()
    {
        //GIVEN - WHEN
        $targetMail = "developers@dev.com";
        $emailNotification = new EmailNotification($targetMail);

        //THEN
        $this->assertObjectFitNotificationInterface($emailNotification);
    }

    public function test_class_returned_by_slack_notification_fits_Notification_interface()
    {
        //GIVEN - WHEN
        $slackUser = "user";
        $slackPassword = " balbal";
        $slackChatId = "564864";
        $slackApi = new SlackApi($slackUser, $slackPassword);
        $slackNotification = new SlackNotification($slackApi, $slackChatId);

        //THEN
        $this->assertObjectFitNotificationInterface($slackNotification);

    }

    public function test_that_client_code_can_use_both_implementations_via_interface_without_problems()
    {
        //GIVEN - WHEN
        $targetMail = "developers@dev.com";
        $emailNotification = new EmailNotification($targetMail);
        $slackUser = "user";
        $slackPassword = " balbal";
        $slackChatId = "564864";
        $slackApi = new SlackApi($slackUser, $slackPassword);
        $slackNotification = new SlackNotification($slackApi, $slackChatId);

        //WHEN
        $error = false;
        try{
            $this->clientCode($emailNotification);
            $this->clientCode($slackNotification);
        }
        catch(Exception $e){
            $error = true;
        }

        //THEN
        $this->assertFalse($error);

    }

    private function assertObjectFitNotificationInterface(Notification $notification)
    {
        //THEN
        $this->assertTrue(
            method_exists($notification, 'send')
        );
    }

    private function clientCode(Notification $notification)
    {
        echo $notification->send("Example Message",
            "blablablbalbal message content");

    }
}