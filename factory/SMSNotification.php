<?php
include_once("Notification.php");

/**
 * To notify the customers using the SMS
 */
class SMSNotification implements Notification
{
    /**
     * To send the SMS
     *
     * @return void
     */
    public function notifyUser()
    {
        echo "Sending an SMS notification";
    }
}