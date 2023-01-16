<?php
    require "../../controller/UsersController.php";
    use controller\UsersController;
    require "../../middleware/WebsMiddleware.php";
    use middleware\WebsMiddleware;
    
    $controller = new UsersController();
    $middleware = new WebsMiddleware();
    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        if (isset($_GET['logout'])) $controller -> logout();
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $captcha = $_POST['confirmcaptcha'];
        if ($captcha == $_POST['captcha']) {
            $user = $controller -> login($_POST['username'], $_POST['password']);
            if ($user != null) {
                session_start();
                $_SESSION['user'] = $user;
                $_SESSION['user_controller'] = $controller;

                $middleware -> dashboard($user);
            }
            else {
                if ($controller -> error == "")
                    $controller -> error ="Unknown Failure, Please Try Again";
            }
        }

        if ($captcha == "") 
            $controller -> error = "Captcha is empty";

        if ($captcha != $_POST['captcha'])
            $controller -> error = "Captcha is incorrect";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = "Login";
            $css_file = "auth/login.css";
            include("../layout/header.php");
        ?>
    </head>
    <body>
        <div class="container">
            <div class="form-image">
                <img src="../../asset/img/img5.svg" alt="gambar login">
            </div>
            <div class="form">
                <div class="form-header">
                    <h1>
                        Login
                    </h1>
                </div>
                
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                    <?php if($controller->error !=  '') { ?>
                        <div class="alert  alert-danger" role="alert"><?= $controller->error?></div>
                    <?php } ?>
                    <div class="txt_field">
                        <input type="text" name="username" id="username" required>
                        <span></span>
                        <label for="username">Username</label>
                    </div>
                    <div class="txt_field">
                        <input type="password" name="password" id="password" required>
                        <span></span>
                        <label for="password">Password</label>
                    </div>
                    <div class="txt_field">
                        <input type="text" name="confirmcaptcha" id="captcha"  required data_parsley_trigger="keyup" value="" required>
                        <span></span>
                        <label for="captcha">Enter Captcha!</label>
                    </div>
                    <label for="captcha-code" style="text-align: left;">Captcha code</label>
                    <div class="txt-field" style="margin-bottom: 20px;">
                        <!-- <input type="text" name="captcha" id="captcha" placeholder="Enter Captcha!" required> -->
                        <!-- <span class="fas fa-lock"></span> -->
                        <input type="text" class="captcha" name="captcha" style="pointer-events: none;" value="<?php echo substr(uniqid(), 5);?>"></input>
                        <input type="button" class="ReloadBtn" value="" onclick="CreateCaptcha()">
                    </div>
                    
                    <div style="margin-bottom: 20px;">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                    <button type="submit" name="login" id="login" class="btn">Sign in</button>
                    <p class="signup_link">
                    don't have account? <a href="register.php" style="color: #6c5ce7;">Sign Up</a>
                    </p>
                </form>
            </div>
        </div>

        <script src="../asset/js/captcha.js"></script>
        <script src="../asset/js/jquery.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    </body>
</html>