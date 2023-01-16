<?php
    namespace query;

    class PositionsQuery {

        // read divisions by id
        public static $readById = "SELECT *
                                    FROM positions
                                    WHERE id = ?";

    }
?>