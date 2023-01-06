<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            $title = "Profile";
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
                            
                        </div>
                        <!-- <div class="col-1"> -->
                        
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
