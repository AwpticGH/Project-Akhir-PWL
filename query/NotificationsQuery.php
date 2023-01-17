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
        public static $readallnotifby_notiffor ="SELECT notifications.id as notif_id,
                                                        users.id as user_id,
                                                        reports.id as report_id,
                                                        CAST(notifications.datetime as DATE) as datetime,
                                                        notifications.type as type,
                                                        notifications.title as title,
                                                        notifications.notification_text as notification_text
                                                FROM notifications
                                                INNER JOIN users ON notifications.notification_by = users.id
                                                INNER JOIN reports ON notifications.notification_by = reports.user_id
                                                WHERE notification_for = ?";

        public static $readall ="SELECT * FROM notifications WHERE notification_for =?";

        public static $readatBell = "SELECT COUNT(*) AS jumlah FROM notifications WHERE is_read = '0' AND notification_for = ?";
    }
?>