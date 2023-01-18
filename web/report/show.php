<?php
    $page_for = "admin";
    include("../layout/starter.php");

    require_once("../../controller/ReportsController.php");
    use controller\ReportsController;

    $report_controller = new ReportsController();
    $pstResult = $report_controller -> readPendingReportsByDivisionId($user['division_id']);
    
    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        if (isset($_GET['update'])) { {
            if ($_GET['update'] == "accept") {
                $report_controller -> updateAccept($_GET['report_id']);
            }
            if ($_GET['update'] == "reject"){
                $report_controller -> updateReject($_GET['report_id']);
            }
            
            $pstResult = $report_controller -> readPendingReportsByDivisionId($user['division_id']);
        }
        }
        if (isset($_GET['search'])) {
            $pstResult = $report_controller -> readPendingReportByTitle($_GET['search']);
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = "Report";
            $css_file = "report/show.css";
            include("../layout/header.php");
        ?>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <?php include("../layout/sidebar.php") ?>
    
            <div id="page-content-wrapper">
                <!-- Navbar -->
                <?php include("../layout/navbar.php") ?>
        
                <!-- Content -->
                <div class="container">
                    <div class="container-table">

                        <table>
                            <tr class="table-header bg-table-header">
                                <th>#</th>
                                <th>Karyawan</th>
                                <th>Laporan</th>
                                <th>Deskripsi</th>
                                <th>Tgl/Bln/Thn</th>
                                <th>Aksi</th>
                            </tr>
                            <?php
                                $page = (isset($_GET['page'])) 
                                        ? $_GET['page'] 
                                        : 1;
                                $pagination = (mysqli_num_rows($pstResult) > 5) 
                                            ? 5 
                                            : mysqli_num_rows($pstResult);
                                $index = $pagination * ($page - 1);

                                for ($i = $index; $i < $pagination * $page; $i++) {
                                    $data = $pstResult -> fetch_array(MYSQLI_BOTH);
                            ?>
                            <tr class="table-body bg-table-body-odd">
                                <td><?= ($i+1) ?></td>
                                <td><?= $data['first_name'] . " " . $data['last_name'] ?></td>
                                <td><?= $data['title'] ?></td>
                                <td><?= $data['description'] ?></td>
                                <td><?= $data['date_of_submission'] ?></td>
                                <td>
                                    <a href="#" class="btn btn-secondary">Lihat</a>
                                    <a href="<?= htmlspecialchars($_SERVER['PHP_SELF']) . "?update=accept&report_id=" . $data['id'] ?>" class="btn btn-success">Terima</a>
                                    <a href="<?= htmlspecialchars($_SERVER['PHP_SELF']) . "?update=reject&report_id=" . $data['id'] ?>" class="btn btn-danger">Tolak</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <?php include("../layout/pagination.php") ?>
                </div>
            </div>
        </div>
        <?php include("../layout/script.php") ?>        
    </body>
</html>