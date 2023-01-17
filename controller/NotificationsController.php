<?php
    namespace controller;

    require_once("../../config/DBConfig.php");
    use config\DBConfig;
    require_once("../../query/NotificationsQuery.php");
    use query\NotificationsQuery;

    class NotificationsController {

         private $conn = null;
        
        // function create($notifTitle, $notifText, $forUserId, $byUserId)
        public function createnotifreport($title, $notification_text, $notification_for, $notification_by) {
            $this -> conn = DBConfig::connect();
            $sql = NotificationsQuery::$createnotificationreport;
            $stmt = mysqli_prepare($this-> conn, $sql);
            $stmt -> bind_param("ssss", $title, $notification_text, $notification_by, $notification_for);
            
            return $stmt -> execute();
        }

        // function create for user
        public function createNotifUser($title, $notification_text, $notification_for, $notification_by) {
            $this -> conn = DBConfig::connect();
            $sql = NotificationsQuery::$createNotificationUser;
            $stmt = mysqli_prepare($this-> conn, $sql);
            $stmt -> bind_param("ssss", $title, $notification_text, $notification_by, $notification_for);
            
            return $stmt -> execute();
        }

        // function update($userId, $notificationId)
        
        public function updateNotificationIsRead($id) {
            $this -> conn = DBConfig::connect();
            $sql = NotificationsQuery::$notif;
            $stmt = mysqli_prepare($this-> conn, $sql);
            $stmt -> bind_param("s", $id);
            
            return $stmt -> execute();
        }
        // function readAllByUserId($id)
        public function readNotifAllByUserId($id) {
            $this -> conn = DBConfig::connect();
            $sql = NotificationsQuery::$readallnotifby_notiffor;
            $stmt = mysqli_prepare($this-> conn, $sql);
            $stmt -> bind_param("s", $id);
            $stmt -> execute();

            return $stmt -> get_result();

            
        }

        // function readAtBell($user_id)
        public function readAtBell($id){
            $this -> conn = DBConfig::connect();
            $sql = NotificationsQuery::$readatBell;
            $stmt = mysqli_prepare ($this -> conn, $sql);
            $stmt -> bind_param ("s", $id);
            $stmt -> execute();

            return $stmt -> get_result();

        }
    }
?>