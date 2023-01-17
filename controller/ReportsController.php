<?php
    namespace controller;

    require_once("../../config/DBConfig.php");
    use config\DBConfig;
    require_once("../../query/ReportsQuery.php");
    use query\ReportsQuery;

    class ReportsController {

        private $conn = null;
        public $message = "";

        public function create($title, $description, $user_id) {
            $this -> conn = DBConfig::connect();
            $sql = ReportsQuery::$create;
            $stmt = mysqli_prepare($this->conn, $sql);
            $stmt -> bind_param("sss", $title, $description, $user_id);
            
            return $stmt -> execute();
        }

        public function updateAccept($report_id) {
            $this -> conn = DBConfig::connect();
            $sql = ReportsQuery::$updateAccept;
            $stmt = mysqli_prepare($this->conn, $sql);
            $stmt -> bind_param("s", $report_id);

            return $stmt -> execute();
        }

        public function updateReject($report_id) {
            $this -> conn = DBConfig::connect();
            $sql = ReportsQuery::$updateReject;
            $stmt = mysqli_prepare($this->conn, $sql);
            $stmt -> bind_param("s", $report_id);

            return $stmt -> execute();
        }

        public function readApprovedReportsByDivisionId($division_id) {
            $this -> conn = DBConfig::connect();
            $sql = ReportsQuery::$readApprovedReportsByDivisionId;
            $stmt = mysqli_prepare($this->conn, $sql);
            $stmt -> bind_param("s", $division_id);
            $stmt -> execute(); 
            
            return $stmt -> get_result();
        }

        public function searchApprovedReportsByDivisionId($division_id, $search) {
            $this -> conn = DBConfig::connect();
            $sql = ReportsQuery::$searchApprovedReportsByDivisionId;
            $stmt = mysqli_prepare($this->conn, $sql);
            $stmt -> bind_param("ss", $division_id, $search);
            $stmt -> execute(); 
            
            return $stmt -> get_result();
        }

        public function readPendingReportsByDivisionId($division_id) {
            $this -> conn = DBConfig::connect();
            $sql = ReportsQuery::$readPendingReportsByDivisionId;
            $stmt = mysqli_prepare($this->conn, $sql);
            $stmt -> bind_param("s", $division_id);
            $stmt -> execute(); 
            
            return $stmt -> get_result();
        }

        public function readAllByUserId($user_id) {
            $this -> conn = DBConfig::connect();
            $sql = ReportsQuery::$readAllByUserId;
            $stmt = mysqli_prepare($this->conn, $sql);
            $stmt -> bind_param("s", $user_id);
            $stmt -> execute();

            return $stmt -> get_result();
        }

        public function countScoreByUserId($user_id) {
            $this -> conn = DBConfig::connect();
            $sql = ReportsQuery::$countScoreByUserId;
            $stmt = mysqli_prepare($this->conn, $sql);
            $stmt -> bind_param("ss", $user_id, $user_id);
            $stmt -> execute();

            return $stmt -> get_result();
        }
        
        public function readPendingReportByTitle($title) {
            $this -> conn = DBConfig::connect();
            $sql = ReportsQuery::$readByTitle;
            $stmt = mysqli_prepare($this->conn, $sql);
            $stmt -> bind_param("s", $title);
            $stmt -> execute();
    
            return $stmt -> get_result();
        }

    }
?>