<?php
    namespace query;

    class DivisionsQuery {

        // read divisions by id
        public static $readById = "SELECT *
                                    FROM divisions
                                    WHERE id = ?";

    }
?>