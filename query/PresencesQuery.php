<?php
    namespace query;

    class PresencesQuery {
        //create absen
        public static $create="INSERT INTO presences SET
                                    date_of_presence = ?,
                                    user_id =  ?";
        //update acc
        public static $accabsen = "UPDATE presences SET 
                                is_approved = '1', 
                                is_rejected = '0',
                                is_pending = '0' 
                                WHERE id = ?";
        //update reject
        public static $rjcabsen = "UPDATE presences SET 
                                is_approved = '0', 
                                is_rejected = '1',
                                is_pending = '0' 
                                WHERE id = ?";
        //read all absen by user_id
        public static $readByDivisionId = "SELECT presences.id,
                                                    users.first_name,
                                                    users.last_name,
                                                    CAST(presences.date_of_presence as DATE) as date_of_presence,
                                                    CAST(presences.date_of_presence as TIME) as time_of_presence
                                            FROM presences
                                            INNER JOIN users ON presences.user_id = users.id
                                            INNER JOIN divisions ON users.division_id = divisions.id
                                            WHERE is_pending = 1
                                            AND divisions.id = ?";
        //read all absen by user_id
        public static $readByUserId = "SELECT CAST(presences.date_of_presence as DATE) as date_of_presence,
                                            CAST(presences.date_of_presence as TIME) as time_of_presence
                                            FROM presences
                                            WHERE is_approved = 1
                                            AND user_id = ?";                                    
        //select by apprv
        public static $getbyisapprv = "SELECT * FROM presences where is_approved LIKE 1";
        //select by pending
        public static $getbyispend = "SELECT * FROM presences where is_pending LIKE 1";
        //select by reject
        public static $getbyisrejct = "SELECT * FROM presences where is_rejected LIKE 1";
        // count all absen
        public static $countScoreByUserId = "SELECT (
                                        SELECT COUNT(*) 
                                        FROM `presences` 
                                        WHERE user_id = ?
                                        AND presences.date_of_presence < STR_TO_DATE(CONCAT(YEAR(CURRENT_DATE), '-', MONTH(CURRENT_DATE), '-25'), '%Y-%m-%e')
                                        AND presences.date_of_presence > STR_TO_DATE(CONCAT(IF(MONTH(CURRENT_DATE) = 1, YEAR(DATE_ADD(CURRENT_DATE, INTERVAL -1 YEAR)), YEAR(CURRENT_DATE)), '-', MONTH(DATE_ADD(CURRENT_DATE, INTERVAL -1 MONTH)), '-25'), '%Y-%m-%e')
                                        ) / 30 * 100
                                        AS total_score";
    }
        
?>
