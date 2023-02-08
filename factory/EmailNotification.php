<?php
include_once("Notification.php");

/**
 * To notify the customers using the SMS
 */
class EmailNotification implements Notification
{
    /**
     * To send the email
     *
     * @return void
     */
    function notifyUser()
    {
        echo "Sending an e-mail notification";
    }
}