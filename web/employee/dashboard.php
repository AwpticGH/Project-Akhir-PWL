<?php 
    $page_for = "employee";
    include("../layout/starter.php");

    require_once("../../controller/ReportsController.php");
    use controller\ReportsController;
    require_once("../../controller/DivisionsController.php");
    use controller\DivisionsController;
    require_once("../../controller/PositionsController.php");
    use controller\PositionsController;
    require_once("../../controller/PresencesController.php");
    use controller\PresencesController;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            $title = "Dashboard";
            $css_file = "dashboard.css";
            include("../layout/header.php");
        ?>
        <style>
            /* width */
            ::-webkit-scrollbar {
            width: 10px;
            }
            /* Track */
            ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey; 
            background: #0000; 
            border-radius: 21px;
            }
            
            /* Handle */
            ::-webkit-scrollbar-thumb {
            background: -webkit-linear-gradient(90deg, hsla(221, 45%, 73%, 1) 0%, hsla(220, 78%, 29%, 1) 100%);
            border-radius: 21px;
            }
            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
            background: -webkit-linear-gradient(90deg, hsla(221, 45%, 73%, 1) 0%, hsla(220, 78%, 29%, 1) 100%); 
            }
        </style>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <?php include("../layout/sidebar.php")?>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <?php include("../layout/navbar.php")?>
                <!-- Page content-->
                <div class="container">
                    <div class="row">
                        <div class="col-9">
                            <div class="card1">
                                <div class="form-image">
                                <img src="../../asset/img/img5.svg" alt="">
                                </div>
                            </div>
                            <div class="card4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="card5">
                                            <div class="row">
                                                <div class="col-6">
                                                    <img src="../../asset/img/terima.svg" alt="logo" style="margin-left: 20px;">
                                                </div>
                                                <?php
                                                    $reports_controller = new ReportsController();

                                                    $pstResult_reports = $reports_controller -> readAllByUserId($user['id']);
                                                    $approved = 0;
                                                    $rejected = 0;
                                                    $pending = 0;
                                                    $counter = 0;

                                                    while ($data = $pstResult_reports -> fetch_array()) {
                                                        if ($data['is_approved'] == "1") $approved++;
                                                        if ($data['is_rejected'] == "1") $rejected++;
                                                        if ($data['is_pending'] == "1") $pending++;
                                                        $reports[$counter] = $data;
                                                        $counter++;
                                                    }
                                                ?>
                                                <div class="col-6">
                                                    <?= $approved ?>
                                                    <br>
                                                    Laporan Diterima
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card6">
                                            <div class="row">
                                                <div class="col-6">
                                                    <img src="../../asset/img/tolak.svg" alt="logo" style="margin-left: 20px;">
                                                </div>
                                                <div class="col-6">
                                                    <?= $rejected ?>
                                                    <br>
                                                    Laporan Ditolak
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card7">
                                            <div class="row">
                                                <div class="col-6">
                                                    <img src="../../asset/img/tunggu.svg" alt="logo" style="margin-left: 20px;">
                                                </div>
                                                <div class="col-6">
                                                    <?= $pending ?>
                                                    <br>
                                                    Laporan In Progress
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card4">
                            <table class="table table-bordered table-striped table-hover table-light">
                                <thead class="table-dark" style="background-color: #00203F; color:white;">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Laporan</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $counter = 0; 
                                        foreach ($reports as $report) { 
                                            $counter++;
                                    ?>
                                    <tr>
                                        <th scope="row"><?= $counter ?></th>
                                        <td><a href="<?= $report['file'] ?>"><?= $report['title'] ?></a></td>
                                        <td>
                                            <?= 
                                                (($report['is_approved'] == "1") 
                                                ? "Approved" 
                                                : ($report['is_rejected'] == "1")) 
                                                ? "Rejected"
                                                : "Pending"
                                            ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    <!-- <tr>
                                        <th scope="row">2</th>
                                        <td>Lorem.</td>
                                        <td>Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Lorem.</td>
                                        <td>Lorem, ipsum dolor.</td>
                                    </tr> -->
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <!-- <div class="col-1"> -->
                        <?php
                            $divisions_controller = new DivisionsController();
                            $division = $divisions_controller -> readById($user['division_id']);
                            
                            $positions_controller = new PositionsController();
                            $position = $positions_controller -> readById($user['position_id']);
                        ?>
                        <div class="card2">
                            <div class="card3">
                                <center>
                                    <?= $user['first_name'] . " " . $user['last_name'] ?>
                                    <br>
                                    <?= $user['username'] ?>
                                </center>
                            </div>
                            <div class="card3">
                                <center>
                                    <?= $division['name'] ?>
                                    <br>
                                    <?= $position['name'] ?>
                                </center>
                            </div>
                            <div class="card3">
                                <center>
                                    <?php
                                        $presences_controller = new PresencesController();
                                        $pstResult_presence = $presences_controller -> countScoreByUserId($user['id']);
                                        $presence = $pstResult_presence -> fetch_array();
    
                                        $pstResult_report = $reports_controller -> countScoreByUserId($user['id']);
                                        $report = $pstResult_report -> fetch_array();
                                    ?>
                                    <?= (($presence['total_score'] + $report['total_score']) / 2) . "%" ?>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- JS-->
        <?php include("../layout/script.php");?>
    </body>
</html>
