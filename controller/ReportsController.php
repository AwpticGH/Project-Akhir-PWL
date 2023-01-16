<?php
    namespace controller;

    require_once("../../config/DBConfig.php");
    use config\DBConfig;
    require_once("../../query/ReportsQuery.php");
    use query\ReportsQuery;

    class ReportsController {

        private $conn = null;

        public function create($file, $user_id) {
            $this -> conn = DBConfig::connect();
            $sql = ReportsQuery::$create;
            $stmt = mysqli_prepare($this->conn, $sql);
            $stmt -> bind_param("ss", $file, $user_id);
            
            return $stmt -> execute();
        }

        public function updateAccept($report_id) {
            $this -> conn = DBConfig::connect();
            $sql = ReportsQuery::$updateAccept;
            $stmt = mysqli_prepare($this->conn, $sql);
            $stmt -> bind_param("s", $report_id);

            return $stmt -> execute();
        }

        public function updateReject($id) {
            $this -> conn = DBConfig::connect();
            $sql = ReportsQuery::$updateReject;
            $stmt = mysqli_prepare($this->conn, $sql);
            $stmt -> bind_param("s", $id);

            return $stmt -> execute();
        }

        public function readByDivisionId($division_id) {
            $this -> conn = DBConfig::connect();
            $sql = ReportsQuery::$readByDivisionId;
            $stmt = mysqli_prepare($this->conn, $sql);
            $stmt -> bind_param("s", $division_id);
            $stmt -> execute(); 
            
            return $stmt -> get_result();
        }

        public function readAllByUserId($user_id) {
            $this -> conn = DBConfig::connect();
            $sql = ReportsQuery::$readByDivisionId;
            $stmt = mysqli_prepare($this->conn, $sql);
            $stmt -> bind_param("s", $user_id);

            return $stmt -> execute() -> get_result() -> fetch_array();
        }

    }
?>