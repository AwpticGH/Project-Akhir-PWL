<?php
    namespace query;

    class NotificationsQuery {
        //create notification
        public static $createnotigication = "INSERT INTO notifications SET
                                            title = ?,
                                            notification_text = ?,
                                            notification_by = ?,
                                            notification_for = ? ";
        //update notification has been read
        public static $notif_is_read = "UPDATE notifications SET
                                        is_read = '1'
                                        WHERE notifications.id = ?";
        //read all notification by notification_for
        public static $readallnotifby_notiffor ="SELECT * FROM notifications WHERE notification_for= ?";
    }
?>