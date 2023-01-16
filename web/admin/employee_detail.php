<?php
    $page_for = "admin";
    include("../layout/starter.php");
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
                            <img src="https://i.kym-cdn.com/entries/icons/original/000/018/350/Foto-Asli-Dion-Meme-Sudah-Kuduga_1_.png"
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
                            <td>Dion Cecep Supriadi </td>
                        </tbody>
                        </tr>
                        <tr>
                            <th scope="col" style="border: black">Username :</th>
                            <tbody>
                                <td>DionGanteng</td>
                            </tbody>
                        </tr>
                        <tr>
                            <th scope="col" style="border:black">Divisi :</th>
                            <tbody>
                                <td>Frontend</td>
                            </tbody>
                        </tr>
                        <tr>
                            <th scope="col" style="border:black">Jabatan : </th>
                            <tbody>
                                <td>Manager Frontend</td>
                            </tbody>
                        </tr>
                        <tr>
                            <th scope="col" style="border:black">Alamat Rumah :</th>
                            <tbody>
                                <td>Jalan Sudirman No 69</td>
                            </tbody>
                        </tr>
                        <tr>
                            <th scope="col" style="border:black">Tanggal Lahir :</th>
                            <tbody>
                                <td>12/12/2023</td>
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
                series: [50],
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
                series: [70],
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
                    series: [90],
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