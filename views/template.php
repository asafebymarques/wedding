<!DOCTYPE html>
<html lang="en">
<head>
    <title>Casamento | Hevelin & Asafe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?=BASE_URL?>assets/images/favicon.png">
    <meta name="keywords" content="casamento, hevelin e Asafe">
    <meta name="description" content="Casamento de Hevelin e Asafe">
    <!-- Start Helping Links -->
    <link rel="stylesheet" href="<?=BASE_URL?>assets/vendor/css/all.min.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/vendor/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/vendor/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/vendor/css/magnificpopup.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/vendor/css/aos.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/progressbar.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/elements.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/style.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/responsive.css">
    <!-- End Helping Links -->

    <script>
        /* Máscaras ER */
        function mascara(o,f){
            v_obj=o
            v_fun=f
            setTimeout("execmascara()",1)
        }
        function execmascara(){
            v_obj.value=v_fun(v_obj.value)
        }
        function mtel(v){
            v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
            v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
            v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
            return v;
        }
        function id( el ){
            return document.getElementById( el );
        }
        window.onload = function(){
            id('telefone').onkeyup = function(){
                mascara( this, mtel );
            }
        }
    </script>
</head>

<body>
    <!-- Start Preloader -->
    <div class="preloader" style="display: block;">
        <div class="vertical-centered-box">
            <div class="content">
                <div class="loader-heart">
                    <img src="<?=BASE_URL?>assets/images/loader.gif" class="footer-logo" alt="footer logo">
                </div>
            </div>
            <div class="curtails-effect"></div>
        </div>
    </div>
    <!-- End Preloader -->
    <!-- Start header -->
    <header>
        <nav id="navbar-top" class="navbar navbar-expand-lg navbar-dark py-0">
            <div class="container-fluid mobile-menu-top">
                <a class="navbar-brand logo py-0" href="<?=BASE_URL?>">
                    <!--<img src="<?=BASE_URL?>assets/images/logo-light.svg" class="whitelogo" alt="">
                    <img src="<?=BASE_URL?>assets/images/logo-dark.svg" class="bluelogo" alt="">-->
                    Hevelin & Asafe
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav">
                        <img src="<?=BASE_URL?>assets/images/svg/nav-toggle.svg" class="navbar-toggler-img" alt="toggle" >
                    </button>
                <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="navbar-nav ms-auto font-playfair">
                        <li class="nav-item dropdown">
                            <a class="nav-link active" href="home.html"> Home </a>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link" href="<?=BASE_URL?>presenca/"> Presença </a></li>
                        <li class="nav-item dropdown"><a class="nav-link" href="<?=BASE_URL?>convidado/"> Chá de panela </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->
    <!-- Start Hero Banner -->
    <div class="hero-section hero-section-2 home-only position-relative">
        <div class="hero-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-12 hero-text hero-text-2">
                        <h1 class="font-playfair text-center w-100" data-aos="fade-right">Hevelin <span class="text-brown">&</span> Asafe</h1>
                    </div>
                    <div class="col-lg-12">
                        <p class="font-raleway text-center w-100">23 de Setembro de 2023</p>
                        <h5 class="font-raleway text-center w-100 home-date-text">Guarde essa data!</h5>
                    </div>
                    <div class="col-lg-8 offset-lg-2 col-md-8">
                        <div id="countdown" class="main-countdown">
                            <ul>
                                <li class="aos-init aos-animate"><span id="days"></span>Days</li>
                                <li class="aos-init aos-animate"><span id="hours"></span>Hours</li>
                                <li class="aos-init aos-animate"><span id="minutes"></span>Minutes</li>
                                <li class="aos-init aos-animate"><span id="seconds"></span>Seconds</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Banner -->
    <!-- Start About Us -->
    <section class="about-us-bg position-relative c-home-about">
        <div class="container">
            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        </div>
    </section>

    <footer class="footer-bg">
        <div class="footer-main" data-aos="zoom-in">
            <div class="footer-bg1">
                <div class="name-footer">
                    <span class="first-let">H</span>
                    <span class="and">&</span>
                    <span class="last-let">A</span>
                </div>
            </div>
        </div>
        <h2 data-aos="zoom-in">Nosso muito obrigado <3 !</h2>
    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="<?=BASE_URL?>assets/vendor/js/jquery.min.js"></script>
    <script src="<?=BASE_URL?>assets/vendor/js/popper.min.js"></script>
    <script src="<?=BASE_URL?>assets/vendor/js/bootstrap.min.js"></script>
    <script src="<?=BASE_URL?>assets/vendor/js/jquery.magnific-popup.min.js"></script>
    <script src="<?=BASE_URL?>assets/vendor/js/owl.carousel.min.js"></script>
    <script src="<?=BASE_URL?>assets/vendor/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?=BASE_URL?>assets/vendor/js/countdown.js"></script>
    <script src="<?=BASE_URL?>assets/vendor/js/masonry.pkgd.js"></script>
    <script src="<?=BASE_URL?>assets/vendor/js/aos.js"></script>
    <script src="<?=BASE_URL?>assets/js/custom.js"></script>
    <!-- End Script -->
</body>
</html>