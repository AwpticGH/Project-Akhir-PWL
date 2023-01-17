<?php
    namespace controller;

    require_once("../../config/DBConfig.php");
    use config\DBConfig;
    require_once("../../query/DivisionsQuery.php");
    use query\DivisionsQuery;

    class DivisionsController {

        private $conn = null;

        // read division id
        public function readById($id) {
            $this -> conn = DBConfig::connect();
            $sql = DivisionsQuery::$readById;
            $stmt = mysqli_prepare($this->conn, $sql);
            $stmt -> bind_param("s", $id);
            $stmt -> execute();

            return $stmt -> get_result() -> fetch_array();
        }

    }
?>