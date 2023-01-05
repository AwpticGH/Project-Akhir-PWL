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
                <div class="container" style="background-color: toska;">
                    <div class="row">
                        <div class="col-9">
                            <h1 class="mt-4">Dashboard Pegawai</h1>
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
                                                <div class="col-6">
                                                    0
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
                                                    0
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
                                                    0
                                                    <br>
                                                    Laporan In Progress
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card4">
                                Table
                            </div>
                        </div>
                        <!-- <div class="col-1"> -->
                        <div class="card2">
                            <div class="card3">
                                <center>
                                    Zaki ketoprak
                                    <br>
                                    Username
                                </center>
                            </div>
                            <div class="card3">
                                <center>
                                    Divisi
                                    <br>
                                    Jabatan
                                </center>
                            </div>
                            <div class="card3">
                                <center>
                                    100%
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="container">
                    <h1>halo</h1>
                </div> -->
            </div>
        </div>
        <?php include("../layout/script.php");?>
    </body>
</html>
