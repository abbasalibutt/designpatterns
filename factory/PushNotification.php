<?php
include_once("Notification.php");

/**
 * To notify the customers using the SMS
 */
class PushNotification implements Notification
{
    /**
     * To send the push notification on mobile
     *
     * @return void
     */
    function notifyUser()
    {
        echo "Sending a push notification";
    }
}