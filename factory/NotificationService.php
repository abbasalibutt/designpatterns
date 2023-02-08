<?php

include_once("NotificationFactory.php");
include_once("Notification.php");
class NotificationService
{
    public function main()
    {
        $notificationFactory = new NotificationFactory();
        $notification = $notificationFactory->createNotification("PUSH");
        $notification->notifyUser();
    }
}