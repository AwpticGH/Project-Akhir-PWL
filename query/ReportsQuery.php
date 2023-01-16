<?php
    namespace query;

    class ReportsQuery {

        //create reports
        public static $create = "INSERT INTO reports SET 
                                            file = ?,
                                            user_id = ?";

        //update acc reports
        public static $updateAccept = "UPDATE reports SET 
                                       is_approved = '1', 
                                       is_rejected = '0',
                                       is_panding = '0' 
                                       WHERE reports.id = ?";

        //update reject reports
        public static $updateDecline =  "UPDATE reports SET 
                                       is_approved = '0', 
                                       is_rejected = '1',
                                       is_panding = '0' 
                                       WHERE reports.id = ?";

        // read all reports by division_id for report/show.php
        public static $readByDivisionId = "SELECT users.first_name,
                                                    users.last_name,
                                                    reports.file,
                                                    CAST(reports.date_of_submission as DATE) as date_of_submission
                                            FROM reports
                                            INNER JOIN users ON reports.user_id = users.id
                                            INNER JOIN divisions ON users.division_id = divisions.id
                                            WHERE divisions.id = ?";

        // read all approved reports by user_id for employee/dashboard.php table
        public static $readApprovedReportsByUserId = "SELECT is_approved,
                                                                is_rejected,
                                                                is_pending 
                                                        FROM reports
                                                        AND user_id = ?";

        // read all reports by user_id to show statuses for employee/dashboard.php report status
        public static $readAllByUserId = "SELECT file,
                                                    is_approved,
                                                    is_rejected,
                                                    is_pending 
                                            FROM reports
                                            WHERE user_id = ?";

        // count nilai laporan = n / m
        // n = jumlah laporan yg diterima
        // m = jumlah laporan yg sudah disubmit dan ga pending
        public static $countScore = "SELECT (
                                            SELECT COUNT(*)
                                            FROM reports
                                            WHERE user_id = ?
                                            AND is_approved = '1'
                                        ) / (
                                            SELECT COUNT(*)
                                            FROM reports
                                            WHERE user_id = ?
                                            AND is_pending = '0'
                                        )";
    }
?>