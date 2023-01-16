<?php
    $page_for = "admin";
    include("../layout/starter.php");

    require_once("../../controller/DivisionsController.php");
    use controller\DivisionsController;
    require_once("../../controller/PositionsController.php");
    use controller\PositionsController;
    require_once("../../controller/PresencesController.php");
    use controller\PresencesController;
    require_once("../../controller/ReportsController.php");
    use controller\ReportsController;

    $pstResult_employee = $user_controller -> readEmployeeByUserId($_GET['user_id']);
    $employee = $pstResult_employee -> fetch_array();
    
    $divisions_controller = new DivisionsController();
    $division = $divisions_controller -> readById($employee['division_id']);
    
    $positions_controller = new PositionsController();
    $position = $positions_controller -> readById($employee['position_id']);

    $presences_controller = new PresencesController();
    $pstResult_presence = $presences_controller -> countScoreByUserId($employee['id']);
    $presence = $pstResult_presence -> fetch_array();
    
    $reports_controller = new ReportsController();
    $pstResult_report = $reports_controller -> countScoreByUserId($employee['id']);
    $report = $pstResult_report -> fetch_array();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
            $title = "Employees";
            $css_file = "admin/employee.css";
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
            <center>
                <div class="card2">
                    <div class="photocard">
                        <center>
                            <img src="<?= (empty($employee['picture']) || $employee['picture'] == "" || $employee['picture'] == null) ? "https://i.kym-cdn.com/entries/icons/original/000/018/350/Foto-Asli-Dion-Meme-Sudah-Kuduga_1_.png" : $employee['picture'] ?>"
                                class="img-fluid" alt="Responsive image">
                        </center>
                    </div>
                    <div class="chart">
                        <center>
                        <div id="chart-absen"></div>
                        </center>
                    </div>
                    <div class="chart">
                        <center>
                        <div id="chart-laporan"></div>
                        </center>
                    </div>
                    <div class="chart">
                        <center>
                        <div id="chart-performa"></div>
                        </center>
                    </div>
                </div>

                <div class="card-details">
                    <table class="table">
                        <thead class="table">
                            <tr>
                                <th scope="col" style="border: black">Nama :</th>
                        <tbody>
                            <td><?= $employee['first_name'] . " " . $employee['last_name'] ?></td>
                        </tbody>
                        </tr>
                        <tr>
                            <th scope="col" style="border: black">Username :</th>
                            <tbody>
                                <td><?= $employee['username'] ?></td>
                            </tbody>
                        </tr>
                        <tr>
                            <th scope="col" style="border:black">Divisi :</th>
                            <tbody>
                                <td><?= $division['name'] ?></td>
                            </tbody>
                        </tr>
                        <tr>
                            <th scope="col" style="border:black">Jabatan : </th>
                            <tbody>
                                <td><?= $position['name'] ?></td>
                            </tbody>
                        </tr>
                        <tr>
                            <th scope="col" style="border:black">Alamat Rumah :</th>
                            <tbody>
                                <td><?= $employee['address'] ?></td>
                            </tbody>
                        </tr>
                        <tr>
                            <th scope="col" style="border:black">Tanggal Lahir :</th>
                            <tbody>
                                <td><?= $employee['date_of_birth'] ?></td>
                            </tbody>
                        </tr>
                        </thead>


                    </table>
                </div>
            </center>
        </div>
        <script>
            var options = {
                colors:['#00203F'],
                fill: {
                    colors: ['#2dd789']
                },
                series: [<?= $presence['total_score'] ?>],
                chart: {
                    height: 350,
                    type: 'radialBar',
                },
                plotOptions: {
                    radialBar: {
                        hollow: {
                            size: '70%',
                        }
                    },
                },
                labels: ['Absen'],
            };

            var chart = new ApexCharts(document.querySelector("#chart-absen"), options);
            chart.render();
        </script>
        <script>
            var options = {
                colors:['#00203F'],
                fill: {
                    colors: ['#2dd789']
                },
                series: [<?= $report['total_score'] ?>],
                chart: {
                    height: 350,
                    type: 'radialBar',
                },
                plotOptions: {
                    radialBar: {
                        hollow: {
                            size: '70%',
                        }
                    },
                },
                labels: ['Laporan'],
            };

            var chart = new ApexCharts(document.querySelector("#chart-laporan"), options);
            chart.render();
        </script>
        <script>
            var options = {
                colors:['#00203F'],
                    fill: {
                        colors: ['#2dd789']
                    },
                    series: [<?= ($presence['total_score'] + $report['total_score']) / 2 ?>],
                    chart: {
                        height: 350,
                        type: 'radialBar',
                    },
                    plotOptions: {
                        radialBar: {
                            hollow: {
                                size: '70%',
                            }
                        },
                    },
                    labels: ['Performa'],
            };

            var chart = new ApexCharts(document.querySelector("#chart-performa"), options);
            chart.render();
        </script>
        <?php include("../layout/script.php") ?>
</body>

</html>