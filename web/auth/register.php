<?php
    require "../../controller/UsersController.php";
    use controller\UsersController;
    require "../../controller/NotificationsController.php";
    use controller\NotificationsController;

    $controller = new UsersController();
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['confirmPassword']) && $_POST['password'] == $_POST['confirmPassword']) {
            $user['first_name'] = $_POST['firstname'];
            $user['last_name'] = $_POST['lastname'];
            $user['username'] = $_POST['firstname'];
            $user['password'] = $_POST['password'];
            $user['position_id'] = "2";
            $user['division_id'] = $_POST['division'];
            $user['address'] = $_POST['address'];
            $user['date_of_birth'] = $_POST['date'];

            $registered = $controller -> register($user);

            if ($registered) {
                $pstResult_heads = $controller -> readHeadsByDivisionId($user['division_id']);

                while ($head = $pstResult_heads -> fetch_array()) {
                    $notif_title = "Penerimaan Karyawan Baru";
                    $notif_text = $user['first_name'] . " " . $user['last_name'] . " telah mendaftar sebagai karyawan di divisi anda. Terima atau Tolak?";
    
                    $newEmployee = $controller -> readRegisteredEmployee($user['first_name'], $user['last_name'], $user['division_id']) -> fetch_array();
                    $notif_by = $newEmployee['id'];
    
                    $notif_for = $head['id'];
                    
                    $notif_controller = new NotificationsController();
                    $notifResultSent = $notif_controller -> createNotifUser($notif_title, $notif_text, $notif_for, $notif_by);
                }

                $message = "Register Success, Please Contact Your Head Division For Approval";
                echo "<script>";
                echo "alert('$message')";
                echo "</script>";
            }
            else {
                $controller -> error = "Registration Failed, Please Try Again Later";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $title = "Register";
        $css_file = "auth/register.css";
        include("../layout/header.php");
    ?>
</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="../../asset/img/img4.svg" alt="gambar login">
        </div>
        <div class="form">
            <div class="form-header">
                <div class="title">Registration</div>
            </div>
            <?php if($controller->error !=  '') { ?>
                <div class="alert  alert-danger" role="alert"><?= $controller->error?></div>
            <?php } ?>
            <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">First Name</label>
                        <input id="firstname" type="text" name="firstname" placeholder="Enter your first name" required>
                    </div>

                    <div class="input-box">
                        <label for="lastname">Last Name</label>
                        <input id="lastname" type="text" name="lastname" placeholder="Enter your last name" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="password">Password</label>
                        <input id="password" type="password" name="password" placeholder="Enter Your Password" required>
                    </div>

                    <div class="input-box">
                        <label for="confirmPassword">Confirm Password</label>
                        <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Confirm Your Password" required>
                    </div>

                    <div class="input-box">
                        <label for="address">Address</label>
                        <input id="address" type="text" name="address" placeholder="Enter your address" required>
                    </div>

                    <div class="input-box">
                        <label for="number">DOB</label>
                        <input id="number" type="date" name="date" placeholder="enter your dob" required>
                    </div>

                </div>
                <div class="gender-details">
                    <input type="radio" name="division" value="1" id="dot-1">
                    <input type="radio" name="division" value="2" id="dot-2">
                    <input type="radio" name="division" value="3" id="dot-3">
                    <span class="gender-title">Division</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">HRD</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Finance</span>
                        </label>
                        <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="gender">Operation</span>
                        </label>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="submit">
                </div>
                <p class="sign-up" style="font-size:16px;">
                    Have already an account ?
                    <a href="index.php" style="color: #6c5ce7;">Login here</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>