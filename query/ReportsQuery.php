<?php
    namespace query;

    class ReportsQuery {

        //create reports
        public static $create = "INSERT INTO reports SET
                                            title = ?,
                                            description = ?,
                                            user_id = ?";

        //update acc reports
        public static $updateAccept = "UPDATE reports SET 
                                       is_approved = '1', 
                                       is_rejected = '0',
                                       is_pending = '0' 
                                       WHERE reports.id = ?";

        //update reject reports
        public static $updateReject =  "UPDATE reports SET 
                                       is_approved = '0', 
                                       is_rejected = '1',
                                       is_pending = '0' 
                                       WHERE reports.id = ?";

        // read all reports by division_id for report/show.php
        public static $readByDivisionId = "SELECT reports.id,
                                                    reports.title,
                                                    reports.description,
                                                    users.first_name,
                                                    users.last_name,
                                                    CAST(reports.date_of_submission as DATE) as date_of_submission
                                            FROM reports
                                            INNER JOIN users ON reports.user_id = users.id
                                            INNER JOIN divisions ON users.division_id = divisions.id
                                            WHERE divisions.id = ?";

        // read all approved reports for admin/dashboard.php
        public static $readApprovedReportsByDivisionId = "SELECT reports.title,
                                                                    reports.description,
                                                                    users.first_name,
                                                                    users.last_name
                                                            FROM reports
                                                            INNER JOIN users ON reports.user_id = users.id
                                                            INNER JOIN divisions ON users.division_id = divisions.id
                                                            WHERE divisions.id = ?
                                                            AND reports.is_approved = '1'
                                                            ORDER BY reports.date_of_submission DESC";

        // search approved reports for admin/dashboard.php
        public static $searchApprovedReportsByDivisionId = "SELECT reports.title,
                                                                    reports.description,
                                                                    users.first_name,
                                                                    users.last_name
                                                            FROM reports
                                                            INNER JOIN users ON reports.user_id = users.id
                                                            INNER JOIN divisions ON users.division_id = divisions.id
                                                            WHERE divisions.id = ?
                                                            AND reports.is_approved = '1'
                                                            AND reports.title LIKE ? 
                                                            ORDER BY reports.date_of_submission DESC";
                                            
        // read all pending reports for notification/index.php OR report/show.php
        public static $readPendingReportsByDivisionId = "SELECT reports.id,
                                                                reports.title,
                                                                reports.description,
                                                                users.first_name,
                                                                users.last_name,
                                                                CAST(reports.date_of_submission as DATE) as date_of_submission
                                                        FROM reports
                                                        INNER JOIN users ON reports.user_id = users.id
                                                        INNER JOIN divisions ON users.division_id = divisions.id
                                                        WHERE divisions.id = ?
                                                        AND reports.is_pending = '1'";

        // read all approved reports by user_id for employee/dashboard.php table
        public static $readApprovedReportsByUserId = "SELECT is_approved,
                                                                is_rejected,
                                                                is_pending,
                                                                title,
                                                                description
                                                        FROM reports
                                                        AND user_id = ?";

        // read all reports by user_id to show statuses for employee/dashboard.php report status
        public static $readAllByUserId = "SELECT title,
                                                    description,
                                                    is_approved,
                                                    is_rejected,
                                                    is_pending 
                                            FROM reports
                                            WHERE user_id = ?";

        // count nilai laporan = n / m
        // n = jumlah laporan yg diterima
        // m = jumlah laporan yg sudah disubmit dan ga pending
        public static $countScoreByUserId = "SELECT (
                                            SELECT COUNT(*)
                                            FROM reports
                                            WHERE user_id = ?
                                            AND is_approved = '1'
                                        ) / (
                                            SELECT COUNT(*)
                                            FROM reports
                                            WHERE user_id = ?
                                            AND is_pending = '0'
                                        ) * 100
                                        AS total_score";
    }
?>