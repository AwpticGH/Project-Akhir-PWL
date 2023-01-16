<?php
    $page_for = "all";
    include("../layout/starter.php");
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $controller = $_SESSION['user_controller'];

        if (isset($_POST['picture']))
            $controller -> updateWithPicture($user, $_POST['username'], $_POST['password'], $_POST['picture']);
        else
            $controller -> updateWithoutPicture($user, $_POST['username'], $_POST['password']);
    }
?>
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
                            <form method="post" enctype="multipart/form-data" class="porum" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                                <div class="form-group" style="color:whitesmoke;">
                                    <label class="form-title">Username</label>
                                    <input type="text" class="form-control" value="<?= $user['username'] ?>" name="username">
                                </div>
                                <div class="form-group" style="color:whitesmoke;">
                                    <label class="form-title">Password</label>
                                    <input type="password" class="form-control" value=<?= $user['password'] ?> name="password">
                                </div>
                                <div class="form-group"  style="color:whitesmoke;">
                                    <label class="form-title">Picture</label>
                                    <input type="file" class="form-control form-control-lg" value="<?= $user['picture'] ?>" name="picture">
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
