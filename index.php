<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="asset/img/logoler.svg">
    
    <title>Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="asset/img/img1.svg" alt="gambar login">
        </div>
        <div class="form">
            <div class="form-header">
                <div class="title">Registration</div>
            </div>
            <form method="post">
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Primeiro Nome</label>
                        <input id="firstname" type="text" name="firstname" placeholder="Digite seu primeiro nome" required>
                    </div>

                    <div class="input-box">
                        <label for="lastname">Sobrenome</label>
                        <input id="lastname" type="text" name="lastname" placeholder="Digite seu sobrenome" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="tel" name="number" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                    </div>


                    <div class="input-box">
                        <label for="confirmPassword">Confirme sua Senha</label>
                        <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha novamente" required>
                    </div>

                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="female" type="radio" name="gender">
                            <label for="female">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input id="male" type="radio" name="gender">
                            <label for="male">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input id="others" type="radio" name="gender">
                            <label for="others">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input id="none" type="radio" name="gender">
                            <label for="none">Prefiro não dizer</label>
                        </div>
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