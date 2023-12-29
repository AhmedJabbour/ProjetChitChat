<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrety="sha512-HK5gLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJ0vgRr2a9jyxxT1ely+b+xFAmJKVSTbpM/CuL7ax08w==" crossorigin="anonymous" />
    <title>Sign up - sign in</title>
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                
                <form action="signin.php" class="sign-in-form" method="POST">
                    <h2 title>Sign in</h2>
                    <div><?= $_SESSION['error'] ?></div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" required>
                    </div>


                    <input type="submit" class="btn solid" value="Login" name="submit">
                    <p class="social-text"> Or sign in with social platforms</p>
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
            <div class="panel left-panel">
                <div class="content">
                    <h3>New Here?</h3>
                    <p>You can create your account here press the button .</p>
                    <form action="index2.php" method="get">
                        <input type="submit" class="btn transparent" value="Sign UP">
                    </form>
                </div>
                <img src="images/undraw_sign_in_re_o58h.svg" alt="" class="image">
            </div>

        </div>
    </div>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>