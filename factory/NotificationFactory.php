<?php
include_once("EmailNotification.php");
include_once("SMSNotification.php");
include_once("PushNotification.php");

/**
 * This class is responsible to crate a notification object based on channel
 */
class NotificationFactory
{
    public function createNotification($channel)
    {
        if($channel == null || empty($channel))
            return null;

        switch ($channel)
        {
            case "SMS":
                return new SMSNotification();
            case "EMAIL":
                return new EmailNotification();
            case "PUSH":
                return  new PushNotification();
            default:
                throw new \Exception("Unknown Channel ".$channel);
        }
    }
}