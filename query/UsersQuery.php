<?php
    namespace query;

    class UsersQuery {

        public static $login = "SELECT * FROM users WHERE username = ?";
        public static $register = "INSERT INTO users SET 
                                    username = ?,
                                    password = ?,
                                    first_name = ?,
                                    last_name = ?,
                                    address = ?,
                                    date_of_birth = ?,
                                    position_id = ?,
                                    division_id = ?";
        public static $updateWithPicture = "UPDATE users SET 
                                    username = ?,
                                    password = ?,
                                    picture = ?
                                    WHERE id = ?";
        public static $updateWithoutPicture = "UPDATE users SET 
                                    username = ?,
                                    password = ?
                                    WHERE id = ?";
        public static $reload = "SELECT * FROM users WHERE id = ?";
    }
?>