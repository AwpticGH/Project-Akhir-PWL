<?php
   $page_for = "admin";
   include("../layout/starter.php");

   require_once("../../controller/ReportsController.php");
   use controller\ReportsController;

   $report_controller = new ReportsController();
   $pstResult = $report_controller -> readByDivisionId($user['division_id']);
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
                                <th>Tgl/Bln/Thn</th>
                                <th>Aksi</th>
                            </tr>
                            <?php
                                $page = (isset($_GET['page'])) 
                                        ? $_GET['page'] 
                                        : 1;
                                $pagination = (mysqli_num_rows($pstResult) > 9) 
                                            ? 9 
                                            : mysqli_num_rows($pstResult);
                                $index = $pagination * ($page - 1);

                                for ($i = $index; $i < $pagination * $page; $i++) {
                                    $data = $pstResult -> fetch_array(MYSQLI_BOTH);
                            ?>
                            <tr class="table-body bg-table-body-odd">
                                <td><?= ($i+1) ?></td>
                                <td><?= $data['first_name'] . " " . $data['last_name'] ?></td>
                                <td><?= $data['file'] ?></td>
                                <td><?= $data['date_of_submission'] ?></td>
                                <td>
                                    <a href="#" class="btn btn-secondary">Lihat</a>
                                    <a href="#" class="btn btn-success">Terima</a>
                                    <a href="#" class="btn btn-danger">Tolak</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <div class="container-page-nav">
                        <nav aria-label="Page-navigation ">
                            <ul class="pagination  ">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="<?= htmlspecialchars($_SERVER['PHP_SELF']) . "?page=1" ?>">1</a></li>
                                <li class="page-item"><a class="page-link" href="<?= htmlspecialchars($_SERVER['PHP_SELF']) . "?page=2" ?>">2</a></li>
                                <li class="page-item"><a class="page-link" href="<?= htmlspecialchars($_SERVER['PHP_SELF']) . "?page=3" ?>">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <?php include("../layout/script.php") ?>        
    </body>
</html>