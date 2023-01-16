<?php
    namespace query;

    class PresencesQuery {
        //create absen
        public static $createabsen ="INSERT INTO presences SET
                                    date_of_presence = ?,
                                    user_id =  ?";
        //update acc
        public static $accabsen = "UPDATE presences SET 
                                is_approved = '1', 
                                is_rejected = '0',
                                is_pending = '0' 
                                WHERE presences.id = ?";
        //update reject
        public static $rjcabsen = "UPDATE presences SET 
                                is_approved = '0', 
                                is_rejected = '1',
                                is_pending = '0' 
                                WHERE presences.id = ?";
        //read all absen by user_id
        public static $readallabsenby_uid = "SELECT * FROM presence WHERE user_id = ?";
        
        // count score absen
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
