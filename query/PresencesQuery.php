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
    }
?>
