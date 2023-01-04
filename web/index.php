<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="asset/img/logoler.svg">
    
    <title>Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="asset/img/img5.svg" alt="gambar login">
        </div>
        <div class="form">
            <div class="form-header">
                <h1>
                    Login
                </h1>
            </div>
            
            <form method="post">
                <!-- <?php if($error !=  ''){ ?>
                    <div class="alert  alert-danger" role="alert"><?= $error;?></div>
                <?php } ?> -->

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
                    <input type="hidden" name="captcha-rand" value="<?php echo $rand; ?>">
                    <span></span>
                    <label for="captcha">Enter Captcha!</label>
                </div>
                <label for="captcha-code" style="text-align: left;">Captcha code</label>
                <div class="txt-field" style="margin-bottom: 20px;">
                    <!-- <input type="text" name="captcha" id="captcha" placeholder="Enter Captcha!" required> -->
                    <!-- <span class="fas fa-lock"></span> -->
                    <input type="text" class="captcha" name="captcha" style="pointer-events: none;" value="<?php echo substr(uniqid(), 5);?>"></input>
                    <input type="button" class="ReloadBtn" onclick="CreateCaptcha()">
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
    </div>

    <script src="asset/js/captcha.js"></script>
    <script src="asset/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>