<?php
    namespace controller;

    require_once("../../config/DBConfig.php");
    use config\DBConfig as DBConfig;
    require_once("../../query/UsersQuery.php");
    use query\UsersQuery as UsersQuery;

    class UsersController {

        public $error = "";
        private $conn = null;

        public function __construct() {
            // EMPTY CONSTRUCTOR
        }
        
        public function login($username, $password) {
            $this -> conn = DBConfig::connect();
            $sql = UsersQuery::$login;
            $stmt = mysqli_prepare($this -> conn, $sql);
            $stmt -> bind_param("s", $username);
            $stmt -> execute();
            $user = $stmt -> get_result() -> fetch_array();

            if ($user != null) {
                if ($user['date_of_admission'] != null) {
                    if ($user['password'] == $password) {
                        return $user;
                    }
                    else {
                        $this -> error = "Username atau Password Salah";
                    }
                }
                else {
                    $this -> error = "Login Failed, Please Contact Your Head Division For More Information";
                }
            }
            else {
                $this -> error = "Username atau Password Salah";
            }
            
            return null;
        }

        public function register(array $user) {
            $this -> conn = DBConfig::connect();
            $sql = UsersQuery::$register;
            $stmt = mysqli_prepare($this -> conn, $sql);
            $stmt -> bind_param("ssssssss", $user['username'], $user['password'], $user['first_name'], $user['last_name'], $user['address'], $user['date_of_birth'], $user['position_id'], $user['division_id']);
            $success = $stmt -> execute();

            

            return $success;
        }

        public function logout() {
            session_start();
            session_unset();
            session_destroy();

            header("location:../auth/index.php");
        }

        public function updateWithPicture(array $user, $username, $password, $picture) {
            if ($picture == null || $picture == "") $picture = $user['picture'];
            $this -> conn = DBConfig::connect();
            $sql = UsersQuery::$updateWithPicture;
            $stmt = mysqli_prepare($this -> conn, $sql);
            $stmt -> bind_param("ssss", $username, $password, $picture, $user['id']);
            $success = $stmt -> execute();

            if ($success) {
                $this -> reloadData($user);
                header($_SERVER['PHP_SELF']);
            }
            else {
                $this -> error = "Failed updating account";
            }
        }

        public function updateWithoutPicture(array $user, $username, $password) {
            $this -> conn = DBConfig::connect();
            $sql = UsersQuery::$updateWithoutPicture;
            $stmt = mysqli_prepare($this -> conn, $sql);
            $stmt -> bind_param("sss", $username, $password, $user['id']);
            $success = $stmt -> execute();

            if ($success) {
                $this -> reloadData($user);
                header($_SERVER['PHP_SELF']);
            }
            else {
                $this -> error = "Failed Updating Account";
            }
        }

        private function reloadData(array $user) {
            $sql = UsersQuery::$reload;
            $stmt = mysqli_prepare($this -> conn, $sql);
            $stmt -> bind_param("s", $user['id']);
            $stmt -> execute();
            $user = $stmt -> get_result() -> fetch_array();

            $_SESSION['user'] = $user;
        }

        public function readEmployeesByDivisionId($division_id) {
            $this -> conn = DBConfig::connect();
            $sql = UsersQuery::$readEmployeesByDivisionId;
            $stmt = mysqli_prepare($this->conn, $sql);
            $stmt -> bind_param("s", $division_id);
            $stmt -> execute();

            return $stmt -> get_result();
        }
        
        public function readEmployeeByUserId($user_id) {
            $this -> conn = DBConfig::connect();
            $sql = UsersQuery::$readEmployeeByUserId;
            $stmt = mysqli_prepare($this->conn, $sql);
            $stmt -> bind_param("s", $user_id);
            $stmt -> execute();
    
            return $stmt -> get_result();
        }

    }

?>