<?php
    $page_for = "all";
    include("../layout/starter.php");
    
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        if (isset($_FILES['picture'])) {
            $file_tmp = $_FILES['picture']['tmp_name'];
            $file_uploaded = $_FILES['picture']['name'];
            $ext = pathinfo($file_tmp, PATHINFO_EXTENSION);
            $type = $_FILES['picture']['type'];
            $content = file_get_contents($file_tmp);
            $picture = 'data:image/' . $ext . ';base64,' . base64_encode($content);

            if (!in_array(pathinfo($file_uploaded, PATHINFO_EXTENSION), ['png', 'jpg', 'jpeg'])) {
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
            $css_file = "auth/show.css";
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
               <center>
                <div class="card3">
                    <div class="photocard">
                        <img src="<?= (empty($employee['picture']) || $employee['picture'] == "" || $employee['picture'] == null) ? "https://i.kym-cdn.com/entries/icons/original/000/018/350/Foto-Asli-Dion-Meme-Sudah-Kuduga_1_.png" : $employee['picture'] ?>"
                            class="img-fluid" alt="Responsive image" />
                    </div>
                <div class="container">
                    <div class="row">
                        <div class="col-11">
                            <center><h1 class="mt-4 fonku">Edit Profile</h1></center>
                            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data" method="post" class="porum">
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
                                    <input type="file" class="form-control form-control-lg" name="picture">
                                </div>
                                <input type="submit" class="btn boton" name="Submit" value="Save Changes">
                            </form>
                        </div>
                        <!-- <div class="col-1"> -->
                    </div>
                </div>
               </center>
                <!-- <div class="container">
                    <h1>halo</h1>
                </div> -->
            </div>
        </div>
        <?php include("../layout/script.php");?>
    </body>
</html>
