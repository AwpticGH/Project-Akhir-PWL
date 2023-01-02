<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="asset/img/logoler.svg">
    
    <title>Registration</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="asset/img/img4.svg" alt="gambar login">
        </div>
        <div class="form">
            <div class="form-header">
                <div class="title">Registration</div>
            </div>
            <form method="post">
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">First Name</label>
                        <input id="firstname" type="text" name="firstname" placeholder="Enter your first name" required>
                    </div>

                    <div class="input-box">
                        <label for="lastname">Last Name</label>
                        <input id="lastname" type="text" name="lastname" placeholder="Enter your last name" required>
                    </div>
                    <!-- position -->
                    <div class="input-box">
                        <label for="position">Position</label>
                        <input id="position" type="text" name="password" placeholder="Digite sua senha" required>
                    </div>

                    <div class="input-box">
                        <label for="division">Division</label>
                        <input id="division" type="text" name="confirmPassword" placeholder="Digite sua senha novamente" required>
                    </div>
                    <!-- end -->

                    <div class="input-box">
                        <label for="address">Address</label>
                        <input id="address" type="text" name="email" placeholder="Enter your email" required>
                    </div>

                    <div class="input-box">
                        <label for="number">DOB</label>
                        <input id="number" type="date" name="date" placeholder="enter your dob" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Password</label>
                        <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                    </div>


                    <div class="input-box">
                        <label for="confirmPassword">Confirm Password</label>
                        <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha novamente" required>
                    </div>

                </div>

                <div class="gender-details">
                        <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="dot-1">
                        <input type="radio" name="jenis_kelamin" value="Perempuan" id="dot-2">
                        <input type="radio" name="jenis_kelamin" value="null" id="dot-3">
                        <span class="gender-title">Gender</span>
                        <div class="category">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="gender">Male</span>
                            </label>
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="gender">Female</span>
                            </label>
                            <label for="dot-3">
                                <span class="dot three"></span>
                                <span class="gender">Prefer not to say</span>
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