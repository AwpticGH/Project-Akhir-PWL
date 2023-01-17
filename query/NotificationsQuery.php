<?php
    namespace query;

    class NotificationsQuery {
        //create notification
        public static $createnotification = "INSERT INTO notifications SET
                                            title = ?,
                                            notification_text = ?,
                                            notification_by = ?,
                                            notification_for = ? ";
        //update notification has been read
        public static $notif = "UPDATE notifications SET
                                        is_read = '1'
                                        WHERE notifications.id = ?";

        //read all notification by notification_for
        public static $readallnotifby_notiffor ="SELECT users.first_name,
                                                    users.last_name,
                                                    CAST(notifications.datetime as DATE) as datetime,
                                                    title,
                                                    notification_text
                                                FROM notifications
                                                INNER JOIN users ON notifications.notification_by = users.id
                                                WHERE notification_for = ?";

        public static $readall ="SELECT * FROM notifications WHERE notification_for =?";

        public static $readatBell = "SELECT COUNT(*) AS jumlah FROM notifications WHERE is_read = '0' AND notification_for = ?";
    }
?>