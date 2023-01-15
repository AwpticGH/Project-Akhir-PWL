<?php
    namespace query;

    class ReportsQuery {

        //create reports
        public static $createreports = "INSERT INTO reports SET 
                                    Judul_laporan = ?,
                                    file = ?,
                                    user_id = ?";
        //update acc reports
        public static $accreports = "UPDATE reports SET 
                                       is_approved = '1', 
                                       is_rejected = '0',
                                       is_panding = '0' 
                                       WHERE reports.id = ?";
        //update reject reports
        public static $rjcreports =  "UPDATE reports SET 
                                       is_approved = '0', 
                                       is_rejected = '1',
                                       is_panding = '0' 
                                       WHERE reports.id = ?";
        //read all reports by user_id
        public static $readallreportby_uid = "SELECT * FROM reports WHERE user_id = ?";                               
    }
?>