<?php
    namespace middleware;

    class WebsMiddleware {

        public function dashboard(array $user) {
            header("location:" . (($user['position_id'] == "1") ? "../admin/dashboard.php" : "../employee/dashboard.php"));
        }

    }
?>