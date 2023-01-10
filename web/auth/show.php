<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            $title = "Profile";
            $css_file = "auth/profile.css";
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
                        <div class="col-11">
                            <h1 class="mt-4 fonku">Edit Profile</h1>
                            <form method="post" enctype="multipart/form-data" class="porum">
                                <div class="form-group" style="color:whitesmoke;">
                                    <label class="form-title">Username</label>
                                    <input type="text" class="form-control" name="id_pembelian">
                                </div>
                                <div class="form-group" style="color:whitesmoke;">
                                    <label class="form-title">Password</label>
                                    <input type="password" class="form-control" name="nama">
                                </div>
                                <div class="form-group"  style="color:whitesmoke;">
                                    <label class="form-title">Picture</label>
                                    <input type="file" class="form-control form-control-lg" name="File">
                                </div>
                                <input type="submit" class="btn boton" name="Submit" value="Save Changes">
                            </form>
                        </div>
                        <!-- <div class="col-1"> -->
                    </div>
                </div>
                <!-- <div class="container">
                    <h1>halo</h1>
                </div> -->
            </div>
        </div>
        <script src="../../asset/js/darkmode.js"></script>
        <?php include("../layout/script.php");?>
    </body>
</html>
