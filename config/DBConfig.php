<?php
    namespace config;


    class DBConfig {
        
        static function connect() {
            $host = "localhost:3306";
            $user = "root";
            $pass = "";
            $db = "project_pwl";

            $conn = mysqli_connect($host, $user, $pass, $db);
            if (!$conn) {
                die("Connection Failed : " . mysqli_connect_error());
                return null;
            }
            else return $conn;
        }

    }

    // $host_db = "localhost:3306";
    // $user_db = "root";
    // $pass_db = "";
    // $db_name = "project_pwl";

    // $conn = mysqli_connect($host_db, $user_db, $pass_db, $db_name);
    // if (!$conn)
    //     die("Connection Failed : " . mysqli_connect_error());

?>