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
                            <a class="nav-link active" href="<?=BASE_URL?>home"> Home </a>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link" href="<?=BASE_URL?>presenca/"> Confirmar Presença </a></li>
                        <li class="nav-item dropdown"><a class="nav-link" href="<?=BASE_URL?>galeria/"> Galeria </a></li>
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
    <section class="about-us-bg position-relative c-home-about">
    <div class="hero-image position-relative">
        <div class="image-ring">
            <img src="<?=BASE_URL?>assets/images/home/hero-main.jpg" alt="hero-main">
        </div>
    </div>
    <div class="main-title text-center position-relative">
        <span class="font-playfair">Felicidades</span>
        <h5 class="font-raleway">Estamos nos casando</h5>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="about-c-home text-center">
                <p class="mb-0 about-single-para">
                Convidamos você para celebrar nosso casamento.
                <br><i>"Deus é poderoso para fazer infinitamente mais do que tudo quanto pedimos ou pensamos, mediante seu poder que atua em nós!"<br>Efésios 3:20</i>
                </p>
            </div>
        </div>
    </div>
        <!-- Start Video -->
    <div class="c-home-video video-sec">
        <div class="video-overlay"></div>
        <div class="video-play position-relative">
            <a class="video-play-button popup-youtube" href="https://vimeo.com/854845991?share=copy">
                <span>
                        <img src="assets/images/svg/video-icon.svg" alt="video-icon" >
                    </span>
            </a>
        </div>
    </div>
    </section>
    <!-- End Hero Banner -->
    <!-- Start About Us -->
    <section class="about-us-bg position-relative c-home-about">
        <div class="container">
            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        </div>
    </section>

    <section class="about-couple">
        <div class="container couple-container">
            <img src="<?=BASE_URL?>assets/images/object/couple_shape.png" alt="" class="coupleshape">
            <div class="c-flex-space-between m-flex">
                <div class="couple-left">
                    <h6 class="font-raleway">A Noiva</h6>
                    <h5 class="font-playfair">Hevelin</h5>
                    <p>"Gratidão a Todos vocês  por compartilharem conosco esse momento tao importante e especial.<br>Grande Beijo"</p>
                </div>
                <div class="couple-center">
                    <div class="ac-main-img">
                        <img class="about-center" src="<?=BASE_URL?>assets/images/home/image1.jpeg" alt="">
                    </div>
                </div>
                <div class="couple-right">
                    <h6 class="font-raleway">O Noivo</h6>
                    <h5 class="font-playfair">Asafe</h5>
                    <p>"Agradeço a todos que fizeram parte da minha história e vai ser uma honra que você faça parte da nossa história nesse momento, gostaria de agradecer a Deus e aos nossos pais..."</p>
                </div>
            </div>
        </div>
    </section>
    <section class="c-home-photocarousel">
        <div class="section photo-carousel-wrapper p-0">
            <div class="main-title text-center position-relative">
                <span class="font-playfair">Nossos Momentos</span>
                <h5 class="font-raleway">Alguns de nossos momentos</h5>
            </div>
            <div class="container-fluid c-container-padding">
                <div id="gallery-slides" class="owl-carousel owl-theme" data-aos="zoom-in-up">
                    <div class="item position-relative">
                        <img src="<?=BASE_URL?>assets/images/home/image1.jpeg" alt="photo">
                    </div>
                    <div class="item position-relative">
                        <img src="<?=BASE_URL?>assets/images/home/image2.jpeg" alt="photo">
                    </div>
                    <div class="item position-relative">
                        <img src="<?=BASE_URL?>assets/images/home/image3.jpeg" alt="photo">
                    </div>
                    <div class="item position-relative">
                        <img src="<?=BASE_URL?>assets/images/home/image4.jpeg" alt="photo">
                    </div>
                    <div class="item position-relative">
                        <img src="<?=BASE_URL?>assets/images/home/image5.jpeg" alt="photo">
                    </div>
                    <div class="item position-relative">
                        <img src="<?=BASE_URL?>assets/images/home/image6.jpeg" alt="photo">
                    </div>
                    <div class="item position-relative">
                        <img src="<?=BASE_URL?>assets/images/home/image7.jpeg" alt="photo">
                    </div>
                    <div class="item position-relative">
                        <img src="<?=BASE_URL?>assets/images/home/image8.jpeg" alt="photo">
                    </div>
                    <div class="item position-relative">
                        <img src="<?=BASE_URL?>assets/images/home/image9.jpeg" alt="photo">
                    </div>
                    <div class="item position-relative">
                        <img src="<?=BASE_URL?>assets/images/home/image10.jpeg" alt="photo">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="celebration-time-sec position-relative">
        <div class="main-title more-text text-center position-relative">
            <span class="font-playfair">Quando & Onde</span>
            <h5 class="font-raleway">Celebração Inicia</h5>
        </div>
        <div class="container-fluid c-container-padding celebration-space-adjust">
            <div class="row">
                <div class="col-md-6">
                    <div class="rsvp-full-container about-single-content rsvp-adust">
                        <div class="rsvp-icon-contents">
                            <div class="rsvp-bordered">
                                <img src="<?=BASE_URL?>assets/images/elements-images/svg/rsvp-icon-1.svg" alt="icon">
                            </div>
                        </div>
                        <div>
                            <h6 class="font-playfair rsvp-single-title">Casamento Civil</h6>
                            <div class="about-single-sep"></div>
                        </div>
                        <p class="text-center rsvp-box-desc-first">Sábado, 23 Setembro 2023 <br>10:00 – 10:20 PM</p>
                        <p class="text-center rsvp-box-desc-last">Cartório Civil Mogi das Cruzes - R. Olegário Paiva, 186 - Centro, Mogi das Cruzes - SP, 08780-040</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="rsvp-full-container about-single-content rsvp-adust">
                        <div class="rsvp-icon-contents">
                            <div class="rsvp-bordered">
                                <img src="<?=BASE_URL?>assets/images/elements-images/svg/rsvp-icon-2.svg" alt="icon">
                            </div>
                        </div>
                        <div>
                            <h6 class="font-playfair rsvp-single-title">Festa de Casamento</h6>
                            <div class="about-single-sep"></div>
                        </div>
                        <p class="text-center rsvp-box-desc-first">Sábado, 23 Setembro 2023 <br>12:00 – 16:00 PM</p>
                        <p class="text-center rsvp-box-desc-last">Boi Nobre - Assai mogilar - Av. Pref. Carlos Ferreira Lopes, 600 - Box 30 - Vila Mogilar, Mogi das Cruzes - SP, 08773-490</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="c-about-progress-top event-services-adjust">
        <div class="c-flex about-progress-inner">
            <div class="progress-left about-progress">
                <div class="about-getting-married">
                    <h4>Festa de Casamento</h4>
                    <h6 class="text-brown">Você é muito bem vindo!</h6>
                    <p>
                        Queremos agradecer desde já a sua participação nesse momento tão especial em nossas vidas. E, mediante disso, planejamos a nossa festa de casamento no Boi nobre em Mogi das Cruzes localizado dentro do Assai Mogilar.
                        <br>
                    </p>
                    <p class="font-weight-bold">"Nós apreciaríamos muito a sua presença no nosso casamento. Por favor, esteja ciente de que todos os custos são de responsabilidade de cada convidado."</p>
                </div>
            </div>
            <div class="progress-main-wrapper">
            </div>
        </div>
    </section>

    <section class="cta-textonly-sec-orange back-lightgrey">
        <div class="container-fluid c-container-padding">
            <div class="main-title more-text text-center position-relative">
                <span class="font-playfair">Lista de Presentes</span>
                    <h5 class="font-raleway">Casamento</h5>
            </div>
            <div class="flex-wrapper row">
                    <div class="col-md-12">
                    <div class="accordion orange-accordions" id="orangeAccordionExample" data-aos="fade-up">
                        <div class="accordion-item">
                            <h6 class="accordion-header" id="headingOneorange">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneorange" aria-expanded="true" aria-controls="collapseOneorange">
                                    Havan
                                </button>
                            </h6>
                            <div id="collapseOneorange" class="accordion-collapse collapse show" aria-labelledby="headingOneorange" data-bs-parent="#orangeAccordionExample">
                                <div class="accordion-body">
                                    <p class="moments-para">Segue a nossa lista de presentes da Havan</p>
                                    <a href="https://lista.havan.com.br/Convidado/ItensListaPresente/690956" target="_blank">Ir para Havan</a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h6 class="accordion-header" id="headingTwoorange">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoorange" aria-expanded="false" aria-controls="collapseTwoorange">
                                    Casas Bahia
                                </button>
                            </h6>
                            <div id="collapseTwoorange" class="accordion-collapse collapse" aria-labelledby="headingTwoorange" data-bs-parent="#orangeAccordionExample">
                                <div class="accordion-body">
                                    <p class="moments-para">Segue a nossa lista de presentes da Casas Bahia</p>
                                    <a href="https://listas.casasbahia.com.br/asafeehevelin" target="_blank">Ir para Casas Bahia</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="map-sec">
        <div class="map-overlay"></div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15255.61890598669!2d-46.18880444903292!3d-23.512999685793826!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cdd82239aa11f1%3A0xed02bdb0a723c24d!2sBoi%20Nobre%20churrascaria!5e0!3m2!1spt-BR!2sbr!4v1688778301964!5m2!1spt-BR!2sbr"
            width="100" height="450" style="border: 0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

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