<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Brite Productions Latin America</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="manifest" href="site.webmanifest">

        <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url('public/app/img/favicon/apple-touch-icon.png') ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('public/app/img/favicon/favicon-32x32.png') ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('public/app/img/favicon/favicon-16x16.png') ?>">
        <link rel="manifest" href="<?= base_url('public/app/img/favicon/site.webmanifest') ?>">
        <link rel="mask-icon" href="<?= base_url('public/app/img/favicon/safari-pinned-tab.svg" color="#5bbad5') ?>">
        <link rel="shortcut icon" href="<?= base_url('public/app/img/favicon/favicon.ico') ?>">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="<?= base_url('public/app/img/favicon/browserconfig.xml') ?>">
        <meta name="theme-color" content="#ffffff">
        <meta property="og:image" content="<?= base_url('public/app/img/brite-slider.jpg') ?>" />

        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="<?= base_url('public/app/css/normalize.css') ?>">    
        <link rel="stylesheet" href="<?= base_url('public/app/css/animate.css') ?>">    
        <!-- <link rel="stylesheet" href="css/bootstrap.min.css">     -->
<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url('public/app/css/slick.css') ?>">
        <link rel="stylesheet" href="<?= base_url('public/app/css/main.css') ?>">
        <link rel="stylesheet" href="<?= base_url('public/app/js/lightbox/css/lightbox.css') ?>">
    </head>
    <body>
        <img src="<?= base_url('public/app/img/brite-slider.jpg') ?>" class="hidden" alt="Brite Productions" />

        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <nav class="main-nav navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button class="hamburger transition hamburger--efecto" type="button"
                            aria-label="Menu" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                      </span>
                    </button>                    
                    <a class="navbar-brand transition" href="#">
                        <!-- <h1><img class="img-responsive" src="img/estudioalegrialogo.png" alt="Estudio Alegría"></h1> -->
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#photographers" data-toggle="collapse" data-target=".navbar-collapse">Photographers</a></li>
                        <!--                        <li ><a href="#soluciones">Nuestras Soluciones</a></li>-->
                        <li >
                            <a href="#work" data-toggle="collapse" data-target=".navbar-collapse">Work</a>
                         </li>
                        <li ><a href="#about" data-toggle="collapse" data-target=".navbar-collapse">About</a></li>
                        <li ><a href="#contact" data-toggle="collapse" data-target=".navbar-collapse">Contact</a></li>
                        <li >
<!--                             <a href="javascript:;"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="javascript:;"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="javascript:;"><i class="fa fa-instagram" aria-hidden="true"></i></a>
 -->                        </li>
                    </ul>
                    <div class="clearfix">  </div>
                </div>
            </div>
        </nav>
        <section class="hero fullheight">  
                <div class="fullsize">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <img src="<?= base_url('public/app/img/briteLogo.png') ?>" class="img-responsive wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="300ms" />
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section id="photographers">
            <div class="container-fluid">
                <div class="row">
                    <div class="title-bar">
                        <div class="title-title wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="100ms">
                            <img src="<?= base_url('public/app/img/plus.png'); ?>" class="img-responsive">
                            <h2>PHOTOGRAPHERS</h2>
                        </div>
                    </div>
                </div>
                <div class="row bg-2">
                    <div class="photographers__origin">
                        <h3 class="color-3">Local</h3>
                    </div>
                    <?php foreach ($photographer_local as $v) : ?>

                            <a href="<?= base_url('app/photographer/'.$v->id)?>" class="photographer" style="background-image: url('<?= base_url('public/app/images/users/'.$v->image);?>">
                                <span class="photographer_overlay transition"></span>
                                <span class="photographer_name transition"> 
                                    <?= $v->first_name.' '.$v->last_name ?>
                                </span>
                            </a>

                    <?php endforeach ?>

                </div>
                <div class="row bg-2">
                    <div class="photographers__origin">
                        <h3 class="color-3">International</h3>
                    </div>
                    <?php foreach ($photographer_inter as $v) : ?>

                        <a href="<?= base_url('app/photographer/'.$v->id)?>" class="photographer" style="background-image: url('<?= base_url('public/app/images/users/'.$v->image);?>">
                            <span class="photographer_overlay transition"></span>
                            <span class="photographer_name transition"> 
                                <?= $v->first_name.' '.$v->last_name ?>
                            </span>
                        </a>

                    <?php endforeach ?>

                </div>
            </div>
        </section> 
        <section id="work">
            <div class="container-fluid">
                <div class="row">
                        <div class="title-bar">
                            <div class="title-title wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="100ms">
                            <img src="<?= base_url('public/app/img/plus.png') ?>" class="img-responsive">
                                <h2>Work</h2>
                            </div>
                        </div>
                </div>
                <div class="row bg-2">
                        <?php foreach ($work->images as $v) : ?>

                            <a href="<?= base_url('public/app/files/photographers/large/'.$v->name);?>" data-lightbox="works" class="work" style="background-image:  url('<?= base_url('public/app/files/photographers/medium/'.$v->name);?>">
                                <span class="work_overlay transition"></span>
                            </a>

                        <?php endforeach ?>

                        <a href="<?= base_url('app/site/works') ?>" class="work" style="background-image: url('<?= base_url('public/app/img/plus-orange.png'); ?>">
                            <span class="work_overlay transition"></span>
                        </a>                        
                </div>
            </div>
        </section> 
        <section id="about">
            <div class="container-fluid">
                <div class="row">
                        <div class="title-bar">
                            <div class="title-title wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="100ms">
                                <img src="<?= base_url('public/app/img/plus.png') ?>" class="img-responsive">
                                <h2>About</h2>
                            </div>
                        </div>
                </div>
                <div class="row bg-2 text-center">
                    <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-1 wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="100ms">
                        <h3 class="color-3">We are a photography production company that can help you from your arrival, until the moment you leave including budget management, scheduling, multilingual production, casting, crew, location scouting, transfers, hotels, equipment rental, catering, travel coordination, temporary importations and all other production related services! </h3>
                        
                    </div>
                </div>
            </div>
        </section>         
        <section id="contact">
            <div class="container-fluid">
                <div class="row">
                        <div class="title-bar">
                            <div class="title-title wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="100ms">
                                <img src="<?= base_url('public/app/img/plus.png') ?>" class="img-responsive">
                                <h2>Contact</h2>
                            </div>
                        </div>
                </div>
                <div class="row bg-2 text-center">
                    <div class="slidervertical col-lg-12 wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="100ms">
                        <h3 class="color-3 text-center">ARGENTINA
                            <br><small class="color-1">Buenos Aires - Argentina</small></h3>
                        <h3 class="color-3 text-center">URUGUAY
                            <br><small class="color-1">Montevideo - Uruguay</small></h3>
                        
                    </div>
                </div>
            </div>
        </section>  
        <footer class="bg-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <img src="<?= base_url('public/app/img/plus-orange-SM.png') ?>" alt="" class="img-responsive wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="90ms">
                        <h4 class="color-3 wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="100ms">EXECUTIVE PRODUCER</h4>
                        <hr class="bg-3 wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="120ms">
                        <p class=" wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="130ms">Guille Iriarte</p>
                        <a class=" wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="140ms" href="tel:+5491156662600">M. +549 11 56 66 26 00</a>
                        <a class=" wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="150ms" href="mailto:guille@briteproductions.com.ar">E. guille@briteproductions.com.ar</a>
<!--                         <ul class="redes list-inline wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="100ms">
                            <li>
                                <a href="javascript:;"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="javascript:;"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="javascript:;"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                        </ul>
 -->                    </div>
                </div>
            </div>
            
        </footer>       
        <script src="<?= base_url('public/app/js/vendor/modernizr-3.5.0.min.js'); ?>"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
<!--         <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script> -->
        <script src="<?= base_url('public/app/js/plugins.js'); ?>"></script>
        <script src="<?= base_url('public/app/js/wow.js'); ?>"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="<?= base_url('public/app/js/slick.min.js'); ?>"></script>
        <script src="<?= base_url('public/app/js/lightbox/js/lightbox.min.js'); ?>"></script>
        <script src="<?= base_url('public/app/js/main.js'); ?>"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
