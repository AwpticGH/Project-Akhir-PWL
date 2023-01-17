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

        // read employees by division id for admin/employees.php
        public static $readEmployeesByDivisionId = "SELECT users.id as user_id,
                                                            users.first_name, 
                                                            users.last_name,
                                                            divisions.name as division_name,
                                                            positions.name as position_name
                                                    FROM users
                                                    INNER JOIN divisions ON users.division_id = divisions.id
                                                    INNER JOIN positions ON users.position_id = positions.id
                                                    WHERE users.division_id = ?
                                                    AND users.position_id != '1'";

        // read employee by user id
        public static $readEmployeeByUserId = "SELECT *
                                                FROM users
                                                WHERE id = ?";

        // read registered employee
        public static $readRegisteredEmployee = "SELECT id FROM users WHERE first_name = ? AND last_name = ? AND division_id = ?";

        // read head by division id
        public static $readHeadsByDivisionId = "SELECT id
                                                FROM users
                                                WHERE division_id = ?
                                                AND position_id = '1'";
    }
?>