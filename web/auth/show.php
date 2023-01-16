<?php
    $page_for = "all";
    include("../layout/starter.php");
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        if (isset($_POST['picture']) || !empty($_POST['picture']) || $_POST['picture'] != null || $_POST['picture'] != "") {
            $file_tmp = $_FILES['picture']['tmp_name'];
            $ext = pathinfo($file_tmp, PATHINFO_EXTENSION);
            $content = file_get_contents($file_tmp);
            $picture = 'data:image/' . $ext . ';base64' . base64_encode($content);

            if (!in_array($ext, ['png', 'jpg', 'jpeg'])) {
                $user_controller -> error = "File must be of type PNG, JPG or JPEG";
            }
            else {
                $user_controller -> updateWithPicture($user, $_POST['username'], $_POST['password'], $picture);
                $user_controller -> error = "berhasil dengan picture";
            }
        }
        else {
            $user_controller -> updateWithoutPicture($user, $_POST['username'], $_POST['password']);
            $user_controller -> error = "berhasil tanpa picture";
        }
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
                <?php if ($user_controller->error != "" || !empty($user_controller->error) || $user_controller->error != null) { ?>
                    <script>
                        alert('<?= $user_controller -> error ?>')
                    </script>
                <?php } ?>
                <div class="container">
                    <div class="row">
                        <div class="col-11">
                            <h1 class="mt-4 fonku">Edit Profile</h1>
                            <form method="POST" enctype="multipart/form-data" class="porum" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
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
                                    <input type="file" class="form-control form-control-lg" id="picture" name="picture">
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
