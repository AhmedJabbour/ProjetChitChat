<?php
session_start();
$_SESSION['error'] = '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CHIT CHAT Website</title>
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
</head>

<body>
    <!-- Navbar Section -->
    <nav class="navbar">
        <div class="navbar__container">
            <a href="#home" id="navbar__logo"><img src="logo.png" title="Chit Chat"></img></a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span> <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="#home" class="navbar__links" id="home-page">Home</a>
                </li>
                <li class="navbar__item">
                    <a href="#about" class="navbar__links" id="about-page">About</a>
                </li>
                <li class="navbar__item">
                    <a href="#services" class="navbar__links" id="services-page">Services</a
            >
          </li>
            <li class="navbar__btn">
                <a href="#sign-up" class="button" id="signup">Sign Up</a>
            </li>
            <li class="navbar__btn">
            <a href="#sign-in" class="button" id="signin">Sign In</a>
            </li>            
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero" id="home">
        <div class="hero__container">
            <h1 class="hero__heading">Bienvenue chez <span>Chit-Chat</span></h1>
            <p class="hero__description">Minimize Distance</p>
            <!--   <button class="main__btn"><a href="#">Explore</a></button>-->
        </div>
    </div>

    <!-- About Section -->
    <div class="main" id="about">
        <div class="main__container">
            <div class="main__img--container">
                <div class="main__img--card"><i class="fas fa-layer-group"></i></div>
            </div>
            <div class="main__content">
                <h1>Qui sommes-nous ?</h1>
                <p>chit-chat une application web réaliser par deux etudiant en Esisa qu'offre des services de visioconférence que vous pouvez utiliser pour rencontrer virtuellement d'autres personnes </p>

            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="services" id="services">
        <h1>WHY US</h1>
        <div class="services__wrapper">
            <div class="services__card">
                <h2>easy to use and manage</h2>
                <p></p>

            </div>
            <div class="services__card">
                <h2>L'environnement d'appel est stable</h2>
                <p></p>
            </div>
            <div class="services__card">
                <h2>Free for every one</h2>
                <p> And available for all</p>

            </div>
            <div class="services__card">
                <h2>Better Service</h2>
                <p>On Slow Connection</p>

            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="main" id="sign-up">
        <div class="main__container">
            <div class="main__content">
                <h1>Join Our Team</h1>
                <h2>Sign Up Today</h2>
                <p>See what makes us different</p>
                <form action="sign/index2.php" method="get">
                    <input type="submit" class="main__btn" value="Sign UP">
                </form>
            </div>
            <div class="main__img--container">
                <div class="main__img--card" id="card-2">
                    <i class="fas fa-users"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="main" id="sign-in">
        <div class="main__container">
            <div class="main__content">
                <h1>Join Our Team</h1>
                <h2>Sign In Today</h2>
                <form action="sign/index1.php" method="get">
                    <input type="submit" class="main__btn" value="Sign In">
                </form>
            </div>
            <div class="main__img--container">
                <div class="main__img--card" id="card-2">
                    <i class="fas fa-users"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="footer__container">
        <div class="footer__links">
            <div class="footer__link--wrapper">
                <div class="footer__link--items">
                    <h2>About Us</h2>
                    <a href="/sign__up">How it works</a> <a href="/">Testimonials</a>
                    <a href="/">Careers</a> <a href="/">Terms of Service</a>
                </div>
                <div class="footer__link--items">
                    <h2>Contact Us</h2>
                    <a href="/">Contact</a> <a href="/">Support</a>
                    <a href="/">Destinations</a>
                </div>
            </div>
            <div class="footer__link--wrapper">
                <div class="footer__link--items">
                    <h2>Videos</h2>
                    <a href="/">Submit Video</a> <a href="/">Ambassadors</a>
                    <a href="/">Agency</a>
                </div>
                <div class="footer__link--items">
                    <h2>Social Media</h2>
                    <a href="/">Instagram</a> <a href="/">Facebook</a>
                    <a href="/">Youtube</a> <a href="/">Twitter</a>
                </div>
            </div>
        </div>
        <section class="social__media">
            <div class="social__media--wrap">
                <div class="footer__logo">
                    <a href="https://www.esisa.ac.ma" id="footer__logo">ESISA</a>
                </div>
                <p class="website__rights">Ecole Supérieure d'Ingénierie En Sciences Appliquées</p>
                <p class="website__rights">SUIVEZ-NOUS SUR NOS RÉSEAUX SOCIAUX</p>
                
            </div>
        </section>
        <div class="social__icons">
                    <a href="https://www.facebook.com/zakaria.ratayl2" class="social__icon--link" target="_blank"><i class="fab fa-facebook"></i
            ></a>
                    <a href="https://www.instagram.com/zakaria.rtl/" class="social__icon--link"><i class="fab fa-instagram"></i
            ></a>
                    <a href="https://www.youtube.com" class="social__icon--link"><i class="fab fa-youtube"></i
            ></a>
                    <a href="https://www.linkedin.com/in/zakaria-ratayl-3b5a6b198/" class="social__icon--link"><i class="fab fa-linkedin"></i
            ></a>
                    <a href="https://www.twitter.com" class="social__icon--link"><i class="fab fa-twitter"></i
            ></a>
                </div>
    </div>

    <script src="app.js"></script>
</body>

</html>