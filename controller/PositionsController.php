<?php
    namespace controller;

    require_once("../../config/DBConfig.php");
    use config\DBConfig;
    require_once("../../query/PositionsQuery.php");
    use query\PositionsQuery;

    class PositionsController {

        private $conn = null;

        // read division id
        public function readById($id) {
            $this -> conn = DBConfig::connect();
            $sql = PositionsQuery::$readById;
            $stmt = mysqli_prepare($this->conn, $sql);
            $stmt -> bind_param("s", $id);
            $stmt -> execute();
            
            return $stmt -> get_result() -> fetch_array();
        }

    }
?>