<?php
    namespace middleware;

    class GuardsMiddleware {

        public function auth($user) {
            if ($user == null) {
                header("location:../auth/index.php");
                exit;
            }
        }

        public function admin(array $user) {
            if ($user['position_id'] != "1") {
                header("location:javascript://history.go(-1)");
                exit;
            }
        }

        public function employee(array $user) {
            if ($user['position_id'] != "2") {
                header("location:javascript://history.go(-1)");
                exit;
            }
        }

    }

?>