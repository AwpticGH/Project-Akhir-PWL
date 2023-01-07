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
                            <h1 class="mt-4 fonku">Dashboard Pegawai</h1>
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
                            <table class="table table-bordered table-striped table-hover table-light" style="border-radius: 20px;">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Laporan</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Jems</td>
                                        <td>emdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Lorem.</td>
                                        <td>Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Lorem.</td>
                                        <td>Lorem, ipsum dolor.</td>
                                    </tr>
                                </tbody>
                            </table>
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
            </div>
        </div>
        <?php include("../layout/script.php");?>
    </body>
</html>
