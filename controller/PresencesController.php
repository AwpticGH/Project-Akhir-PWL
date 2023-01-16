<?php
    namespace controller;

    require_once("../../config/DBConfig.php");
    use config\DBConfig as DBConfig;
    require_once("../../query/PresencesQuery.php");
    use query\PresencesQuery as PresencesQuery;

    class PresencesController {

        public $error = "";
        private $conn = null;        
        
        // function create
        public function create($date_of_presence, $t ) {
            $this -> conn = DBconfig::connect();
            $sql = PresencesQuery::$createabsen;
            $stmt = mysqli_prepare($this -> conn, $sql);
            $stmt -> bind_param("ss", $date_of_presence, $t);

            return $stmt -> execute();
        }
        // function update
        public function updateAccept($presences_acc) {
            $this -> conn = DBConfig::connect();
            $sql = PresencesQuery::$accabsen;
            $stmt = mysqli_prepare($this-> conn, $sql);
            $stmt -> bind_param("s", $presences_acc);

            return $stmt -> execute();
        }

        public function updateReject($presences_rjc) {
            $this -> conn = DBConfig::connect();
            $sql = PresencesQuery::$rjcabsen;
            $stmt = mysqli_prepare($this-> conn, $sql);
            $stmt -> bind_param("s", $presences_rjc);

            return $stmt -> execute();
        }
        // function readAllByUserId
        public function readByDivisionId($division_id) {
            $this -> conn = DBConfig::connect();
            $sql = PresencesQuery::$readByDivisionId;
            $stmt = mysqli_prepare($this->conn, $sql);
            $stmt -> bind_param("s", $division_id);
            $stmt -> execute(); 
            
            return $stmt -> get_result();
        }
        public function readByUserId($user_id) {
            $this -> conn = DBConfig::connect();
            $sql = PresencesQuery::$readByUserId;
            $stmt = mysqli_prepare($this->conn, $sql);
            $stmt -> bind_param("s", $user_id);
            $stmt -> execute(); 
            
            return $stmt -> get_result();
        }
        
        
        // count score absen
        public static $countScoreByUserId = "SELECT (
            SELECT COUNT(*) 
            FROM `presences` 
            WHERE user_id = ?
            AND presences.date_of_presence < STR_TO_DATE(CONCAT(YEAR(CURRENT_DATE), '-', MONTH(CURRENT_DATE), '-25'), '%Y-%m-%e')
            AND presences.date_of_presence > STR_TO_DATE(CONCAT(IF(MONTH(CURRENT_DATE) = 1, YEAR(DATE_ADD(CURRENT_DATE, INTERVAL -1 YEAR)), YEAR(CURRENT_DATE)), '-', MONTH(DATE_ADD(CURRENT_DATE, INTERVAL -1 MONTH)), '-25'), '%Y-%m-%e')
            ) / 30 * 100
            AS total_score";
}
        
?>