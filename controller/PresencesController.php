<?php
    namespace controller;

    require_once("../../config/DBConfig.php");
    use config\DBConfig;
    require_once("../../query/PresencesQuery.php");
    use query\PresencesQuery;

    class PresencesController {
        
        private $conn = null;

        // function create

        // function update

        // function readAllByUserId

        // count score
        public function countScoreByUserId($user_id) {
            $this -> conn = DBConfig::connect();
            $sql = PresencesQuery::$countScoreByUserId;
            $stmt = mysqli_prepare($this->conn, $sql);
            $stmt -> bind_param("s", $user_id);
            $stmt -> execute();

            return $stmt -> get_result();
        }
    }
?>