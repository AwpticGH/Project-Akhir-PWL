<?php
    namespace query;

    class NotificationsQuery {
        //create notification report
        public static $createnotificationreport = "INSERT INTO notifications SET
                                                                type = 'Report',
                                                                title = ?,
                                                                notification_text = ?,
                                                                notification_by = ?,
                                                                notification_for = ?";

        // create notification user
        public static $createNotificationUser = "INSERT INTO notifications SET
                                                                type = 'User',
                                                                title = ?,
                                                                notification_text = ?,
                                                                notification_by = ?,
                                                                notification_for = ?";

        //update notification has been read
        public static $notif = "UPDATE notifications SET
                                        is_read = '1'
                                        WHERE notifications.id = ?";

        //read all notification by notification_for
        public static $readallnotifby_notiffor ="SELECT * 
                                                    FROM notifications
                                                    WHERE notification_for = ?
                                                    AND is_read = '0'";

        public static $readall ="SELECT * FROM notifications WHERE notification_for =?";

        public static $readatBell = "SELECT COUNT(*) AS jumlah FROM notifications WHERE is_read = '0' AND notification_for = ?";

        public static $deleteNotificationById = "DELETE FROM notifications WHERE id = ?";
    }
?>