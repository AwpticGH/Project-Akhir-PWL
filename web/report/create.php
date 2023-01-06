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
                            <h1 class="mt-4">Dashboard Pegawai</h1>
                            <div class="card1">
                                <div class="form-image">
                                <img src="../../asset/img/img5.svg" alt="">
                                </div>
                            </div>
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
