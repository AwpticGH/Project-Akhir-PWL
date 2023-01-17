<?php
    $page_for = "admin";
    include("../layout/starter.php");

    require_once("../../controller/ReportsController.php");
    use controller\ReportsController;
    require_once("../../controller/DivisionsController.php");
    use controller\DivisionsController;
    require_once("../../controller/PositionsController.php");
    use controller\PositionsController;

    $reports_controller = new ReportsController();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        $title = "Dashboard";
        $css_file = "dashboard.css";
        include("../layout/header.php");
    ?>
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
                        <div class="card4" style="height: 575px;">
                            <form class="d-flex" role="search" method="GET" action="<?= htmlspecialchars($_SERVER['PHP_SELF'])?>">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                                <button class="btn" type="submit"
                                    style="background-color: #00203F; color:white;">Search</button>
                            </form>
                            <table class="table table-bordered table-striped table-hover table-light"
                                style="border-radius: 20px; margin-top: 10px;">
                                <thead class="table" style="background-color: #00203F; color:white;">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Laporan</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Karyawan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if ($_SERVER['REQUEST_METHOD'] == "GET") {
                                            if (isset($_GET['search'])) {
                                                if (!empty($_GET['search']) || $_GET['search'] != null) {
                                                    $search = $_GET['search'];
                                                    $search = "%$search%";
                                                    $pstResult = $reports_controller -> searchApprovedReportsByDivisionId($user['division_id'], $search);
                                                }
                                                else {
                                                    $pstResult = $reports_controller -> readApprovedReportsByDivisionId($user['division_id']);
                                                }
                                            }
                                            else {
                                                $pstResult = $reports_controller -> readApprovedReportsByDivisionId($user['division_id']);
                                            }

                                            if ($pstResult != null) {
                                                $page = (isset($_GET['page'])) 
                                                        ? $_GET['page'] 
                                                        : 1;
                                                $pagination = (mysqli_num_rows($pstResult) > 5) 
                                                            ? 5 
                                                            : mysqli_num_rows($pstResult);
                                                $index = $pagination * ($page - 1);
                                                $row = 0;

                                                for ($i = $index; $i < $pagination * $page; $i++) {
                                                    $data = $pstResult -> fetch_array(MYSQLI_BOTH);
                                                    $row++;
                                                    echo "<tr>";
                                                    echo "<th scope='row'>$row</th>";
                                                    echo "<td>" . $data['title'] . "</td>";
                                                    echo "<td>" . $data['desc'] . "</td>";
                                                    echo "<td>" . $data['first_name'] . " " . $data['last_name'] . "</td>";
                                                    echo "</tr>";
                                                }
                                            }
                                            else {
                                                echo "<tr>";
                                                echo "<th scope='row'>0</th>";
                                                echo "<td>Tidak Ada Laporan Diterima</td>";
                                                echo "<td>TIdak Ada</td>";
                                                echo "</tr>";
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
<<<<<<< HEAD
                        <center>
                        <div class="card-pagination">
                        <nav aria-label="Page-navigation ">
                            <ul class="pagination  ">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                        </nav>
                        </div>
                        </center>
=======
                            <?php include("../layout/pagination.php") ?>
>>>>>>> main
                    </div>
                    <div class="card2">
                        <?php
                            $divisions_controller = new DivisionsController();
                            $division = $divisions_controller -> readById($user['division_id']);
                            
                            $positions_controller = new PositionsController();
                            $position = $positions_controller -> readById($user['position_id']);
                        ?>
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
                        <center>
                            <table class="table table-bordered table-striped table-hover table-light"
                                style="border-radius: 20px;">
                                <thead class="table" style="background-color: #00203F; color:white;">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Karyawan Terbaik</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Muhammad <br> Fauzan <br> Muharram</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Alfian Fakhrudin</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Rafi Fajar</td>
                                    </tr>
                                </tbody>
                            </table>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Core theme JS-->
    <?php include("../layout/script.php");?>
</body>

</html>