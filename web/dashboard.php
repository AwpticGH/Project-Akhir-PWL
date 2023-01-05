<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            $title = "Dashboard";
            $css_file = "dashboard.css";
            include("layout/header.php");
        ?>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <?php include("layout/sidebar.php")?>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <?php include("layout/navbar.php")?>
                
                <!-- Page content-->
                <div class="container" style="background-color: toska;">
                    <div class="row">
                        <div class="col-9">
                            <h1 class="mt-4">Dashboard Pegawai</h1>
                            <div class="card1">
                                <div class="form-image">
                                <img src="../asset/img/img5.svg" alt="">
                                </div>
                            </div>
                            <div class="card4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="card5">
                                            <div class="row">
                                                <div class="col-6">
                                                    halo
                                                </div>
                                                <div class="col-6">
                                                    halo
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card6">
                                            halo
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card7">
                                            halo
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-1"> -->
                        <div class="card2">
                            <div class="card3">
                                halo
                            </div>
                            <div class="card3">
                                halo
                            </div>
                            <div class="card3">
                                halo
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="container">
                    <h1>halo</h1>
                </div> -->
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../asset/js/dashboard.js"></script>
    </body>
</html>
