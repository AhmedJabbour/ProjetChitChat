<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrety="sha512-HK5gLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJ0vgRr2a9jyxxT1ely+b+xFAmJKVSTbpM/CuL7ax08w==" crossorigin="anonymous" />
    <title>Sign up</title>
    <link rel="icon" href="icon.png">

    <link rel="stylesheet" href="style1.css">

</head>

<body>

    <div class="container">
        <div class="forms-container">
            <div class="signup-signup">
                <form action="signup.php" class="sign-up-form" method="POST">
                    <h2 title>Sign Up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" required>
                    </div>
                    <input type="submit" class="btn solid" value="Sign up" name="submit">
                    <p class="social-text"> Or sign Up with social platforms</p>
                    <div class="social-media">
                        <a href="https://www.facebook.com" class="social-icon">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                        <a href="https://www.instagram.com" class="social-icon">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                        <a href="https://www.twitter.com" class="social-icon">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                        <a href="https://www.gmail.com" class="social-icon">
                            <ion-icon name="logo-google"></ion-icon>
                        </a>
                        <a href="https://www.skype.com" class="social-icon">
                            <ion-icon name="logo-skype"></ion-icon>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel right-panel">
                <div class="content">
                    <h3>One for us</h3>
                    <p>You're welcome</p>
                    <form action="index1.php" method="get">
                        <input type="submit" class="btn transparent" value="Sign In">
                    </form>
                </div>
                <img src="images/undraw_login_re_4vu2.svg" alt="" class="image">
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>