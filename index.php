
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- ==================Start Css Link===================== -->
    <!--  fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:100,300,400,500,700|Quattrocento+Sans:400,700|Roboto:100,300,400,500,700" rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
    <!-- bootstrap css -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- fontawesome css link -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- animated css -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css" rel="stylesheet">
    <!-- owal carosel css -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet">
    <!-- owal carosel theme css -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- magnifi css -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css" rel="stylesheet">
    <!-- main css file -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">
    <!-- responsive css -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">


    <!-- ==================End Css Link===================== -->


    <!--[if lt IE 9]>
    <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_footer(); ?>
</head>

<body>


    <!-- 
    ==========================
        Header Area Start 
    ========================== 
     -->

    <div class="header-area">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-4 col-xs-12">
                        <div class="top-social-icon">
                            <ul>
                                <li><a href="#!" class="waves-effect waves-circle waves-light btn-floating"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#!" class="waves-effect waves-circle waves-light btn-floating"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#!" class="waves-effect waves-circle waves-light btn-floating"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#!" class="waves-effect waves-circle waves-light btn-floating"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#!" class="waves-effect waves-circle waves-light btn-floating"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end top social icon -->
                    <div class="col-md-6 col-sm-8 col-xs-12">
                        <div class="top-contact">
                            <ul>
                                <li> <a href="#"><span><i class="fa fa-phone"></i></span>Call Us: +088-5522-999</a></li>
                                <li><a href="#"><span><i class="fa fa-envelope-o"></i></span>Send Mail: +088-5522-999</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end top header -->
        <div class="bottom-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="site-logo">
                            <a href="index.html">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="menu-position-1">
                            <li>
                                <div class="offcanvas-menu-bar">
                                    <a href="#" class="menu-click">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                                </div>
                                <!-- end offcanvas menu -->
                            </li>
                            <li><a href="#" class="click-serach-step"><i class="fa fa-search"></i></a></li>
                        </ul>


                    </div>
                </div>
            </div>
        </div>
        <!-- end bottom header -->
    </div>

    <!-- 
    ==========================
        Header Area End 
    ========================== 
     -->

    <!-- 
    ==========================
        Slider Area Start 
    ========================== 
     -->

    <div class="slider-area" id="home">
        <div class="slider-active owl-carousel">
            <div class="single-slide" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/slider/2.jpg)">
                <div class="slider-table">
                    <div class="slider-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="slide-content">
                                        <h2>WE BUILD UP YOUR BUSINESS</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                        <a href="#!" class="btn-mr-b waves-effect waves-light">SEE MORE</a>
                                        <a href="#!" class="btn-mr white waves-effect waves-teal">OUR SERVICES</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end single slide -->
            <div class="single-slide" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/slider/1.jpg)">
                <div class="slider-table">
                    <div class="slider-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="slide-content">
                                        <h2>WE BUILD UP YOUR BUSINESS</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                        <a href="#!" class="btn-mr-b waves-effect waves-light">SEE MORE</a>
                                        <a href="#!" class="btn-mr white waves-effect waves-teal">OUR SERVICES</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end single slide -->
        </div>
    </div>


    <!-- 
    ==========================
        Slider Area End 
    ========================== 
     -->


    <!-- 
    ==========================
        Hidden Search Start
    ========================== 
     -->
    <div class="search-rapper-step">
        <div class="search-close">
            <a class="serc-clse" href="#">
                <span></span>
                <span></span>
            </a>
        </div>
        <div class="search-table">
            <div class="search-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="step-serach-main">
                                <form action="#!">
                                    <input type="text" placeholder="Serach...">
                                    <button type="submit" class="waves-effect waves-light"> <i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 
    ==========================
        Hidden Search Start
    ========================== 
     -->

    <!-- 
    ==========================
       Offcanvas menu start
    ========================== 
     -->

    <div class="offcanvas-menu-rapper">
        <div class="offcanvas-header">
            <a href="#" class="close-offcanvasmenu"> <i class="fa fa-close"></i></a>
        </div>
        <div class="offcanvas-menu">
            <nav>
                <ul>
                    <li><a href="#home" class="waves-effect waves-teal-2 smooth-scroll">home</a></li>
                    <li><a href="#abt" class="waves-effect waves-teal-2 smooth-scroll">about</a></li>
                    <li><a href="#ser" class="waves-effect waves-teal-2 smooth-scroll">services</a></li>
                    <li><a href="#event" class="waves-effect waves-teal-2 smooth-scroll">event</a></li>
                    <li><a href="#tes" class="waves-effect waves-teal-2 smooth-scroll">Testimonials</a></li>
                    <li><a href="#blg" class="waves-effect waves-teal-2 smooth-scroll">blog</a></li>
                </ul>
            </nav>
        </div>
        <div class="offcanvase-footer">
            <div class="top-social-icon offcanvas-social">
                <ul>
                    <li><a href="#!" class="waves-effect waves-circle waves-light btn-floating"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#!" class="waves-effect waves-circle waves-light btn-floating"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#!" class="waves-effect waves-circle waves-light btn-floating"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#!" class="waves-effect waves-circle waves-light btn-floating"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#!" class="waves-effect waves-circle waves-light btn-floating"><i class="fa fa-pinterest-p"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="offcanvas-overlay"></div>
    <!-- 
    ==========================
        Offcanvas menu End
    ========================== 
     -->

    <!-- 
    ==========================
        About Section Start 
    ========================== 
     -->
    <div class="about-section section-padding" id="abt">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-img">
                        <a href="https://www.youtube.com/watch?v=G0dzLanYW1E" class="video-pop waves-effect waves-teal">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/about.jpg" alt="">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
                <!-- about img -->
                <div class="col-md-6">
                    <div class="about-content">
                        <h2 class="section-title"> about me</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas excepturi natus at, laboriosam autem cupiditate, neque magni id nam dicta ipsam impedit consectetur magnam qui, voluptatibus expedita officia repellat reprehenderit.</p>
                        <a href="#!" class="btn-mr white waves-effect waves-teal"> read more</a>
                    </div>
                </div>
                <!-- about content -->
            </div>
        </div>
    </div>
    <!-- 
    ==========================
        About Section End 
    ========================== 
     -->

    <!-- 
    ==========================
      Services Section Start
    ========================== 
     -->
    <div class="services-area section-padding" id="ser">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-rapper">
                        <h2 class="section-title reverse">Services</h2>
                    </div>
                </div>
                <!-- end single services -->
            </div>
            <div class="row">
                <div class="services-active owl-carousel">
                    <div class="col-md-4">
                        <div class="single-services waves-effect waves-teal-2">
                            <i class="fa fa-bar-chart"></i>
                            <h3>Professional Consulting</h3>
                            <p>Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum.</p>
                        </div>
                    </div>
                    <!-- end single services -->
                    <div class="col-md-4">
                        <div class="single-services waves-effect waves-teal-2">
                            <i class="fa fa fa-diamond"></i>
                            <h3>Valuable Ideas</h3>
                            <p>Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum.</p>
                        </div>
                    </div>
                    <!-- end single services -->
                    <div class="col-md-4">
                        <div class="single-services waves-effect waves-teal-2">
                            <i class="fa fa-google-wallet"></i>
                            <h3>Budget Friendly</h3>
                            <p>Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum.</p>
                        </div>
                    </div>
                    <!-- end single services -->
                    <div class="col-md-4">
                        <div class="single-services waves-effect waves-teal-2">
                            <i class="fa fa-google-wallet"></i>
                            <h3>Budget Friendly</h3>
                            <p>Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum.</p>
                        </div>
                    </div>
                    <!-- end single services -->
                </div>
            </div>
            <!-- end rwo -->
        </div>
    </div>
    <!-- 
    ==========================
      Services Section End
    ========================== 
     -->

    <!-- 
    ==========================
      Event Area Start 
    ========================== 
     -->

    <?php get_template_part('template-parts/home/events'); ?>
     

    <!-- 
    ==========================
      Event Area End 
    ========================== 
     -->
    <!-- 
    ==========================
      happy client end
    ========================== 
     -->
    <div class="happy-client-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-happy-moment">
                        <h3> <span class="counter"> 549</span></h3>
                        <h4>Featured Events</h4>
                    </div>
                </div>
                <!-- end single client -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-happy-moment">
                        <h3> <span class="counter"> 549</span></h3>
                        <h4>Featured Events</h4>
                    </div>
                </div>
                <!-- end single client -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-happy-moment">
                        <h3> <span class="counter"> 549</span></h3>
                        <h4>Featured Events</h4>
                    </div>
                </div>
                <!-- end single client -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-happy-moment">
                        <h3> <span class="counter"> 549</span></h3>
                        <h4>Featured Events</h4>
                    </div>
                </div>
                <!-- end single client -->
            </div>
            <!-- end row -->
        </div>
    </div>
    <!-- 
    ==========================
      happy client end
    ========================== 
     -->

    <!-- 
    ==========================
      Photo Gallery Start
    ========================== 
     -->
    <div class="photo-gallery-area section-padding" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-rapper">
                        <h2 class="section-title reverse">Photo Gallery</h2>
                    </div>
                    <!-- end section titile -->
                </div>
                <!-- end section title -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <ul class="photo-gal">
            <div class="gallery-active owl-carousel">
                <li class="single-photo-gallery waves-effect waves-teal-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gl1.jpg" alt="">
                    <div class="gallery-hover-1">
                        <a class="img-poppu" href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gl1.jpg">
                            <i class="fa fa-search-plus"></i>
                        </a>
                        <h3>malaysia tour <span>2012</span></h3>
                    </div>
                    <!-- gallery hover one -->
                </li>
                <!-- end single gallery  -->
                <li class="single-photo-gallery waves-effect waves-teal-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gl2.jpg" alt="">
                    <div class="gallery-hover-1">
                        <a class="img-poppu" href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gl2.jpg">
                            <i class="fa fa-search-plus"></i>
                        </a>
                        <h3>malaysia tour <span>2012</span></h3>
                    </div>
                    <!-- gallery hover one -->
                </li>
                <!-- end single gallery  -->
                <li class="single-photo-gallery waves-effect waves-teal-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gl3.jpg" alt="">
                    <div class="gallery-hover-1">
                        <a class="img-poppu" href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gl3.jpg">
                            <i class="fa fa-search-plus"></i>
                        </a>
                        <h3>malaysia tour <span>2012</span></h3>
                    </div>
                    <!-- gallery hover one -->
                </li>
                <!-- end single gallery  -->
                <li class="single-photo-gallery waves-effect waves-teal-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gl4.jpg" alt="">
                    <div class="gallery-hover-1">
                        <a class="img-poppu" href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gl4.jpg">
                            <i class="fa fa-search-plus"></i>
                        </a>
                        <h3>malaysia tour <span>2012</span></h3>
                    </div>
                    <!-- gallery hover one -->
                </li>
                <!-- end single gallery  -->
                <li class="single-photo-gallery waves-effect waves-teal-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gl5.jpg" alt="">
                    <div class="gallery-hover-1">
                        <a class="img-poppu" href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gl5.jpg">
                            <i class="fa fa-search-plus"></i>
                        </a>
                        <h3>malaysia tour <span>2012</span></h3>
                    </div>
                    <!-- gallery hover one -->
                </li>
                <!-- end single gallery  -->
                <li class="single-photo-gallery waves-effect waves-teal-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gl6.jpg" alt="">
                    <div class="gallery-hover-1">
                        <a class="img-poppu" href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gl6.jpg">
                            <i class="fa fa-search-plus"></i>
                        </a>
                        <h3>malaysia tour <span>2012</span></h3>
                    </div>
                    <!-- gallery hover one -->
                </li>
                <!-- end single gallery  -->
                <li class="single-photo-gallery waves-effect waves-teal-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gl7.jpg" alt="">
                    <div class="gallery-hover-1">
                        <a class="img-poppu" href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gl7.jpg">
                            <i class="fa fa-search-plus"></i>
                        </a>
                        <h3>malaysia tour <span>2012</span></h3>
                    </div>
                    <!-- gallery hover one -->
                </li>
                <!-- end single gallery  -->
                <li class="single-photo-gallery waves-effect waves-teal-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gl8.jpg" alt="">
                    <div class="gallery-hover-1">
                        <a class="img-poppu" href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gl8.jpg">
                            <i class="fa fa-search-plus"></i>
                        </a>
                        <h3>malaysia tour <span>2012</span></h3>
                    </div>
                    <!-- gallery hover one -->
                </li>
                <!-- end single gallery  -->
                <li class="single-photo-gallery waves-effect waves-teal-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gl9.jpg" alt="">
                    <div class="gallery-hover-1">
                        <a class="img-poppu" href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gl9.jpg">
                            <i class="fa fa-search-plus"></i>
                        </a>
                        <h3>malaysia tour <span>2012</span></h3>
                    </div>
                    <!-- gallery hover one -->
                </li>
                <!-- end single gallery  -->
                <li class="single-photo-gallery waves-effect waves-teal-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gl10.jpg" alt="">
                    <div class="gallery-hover-1">
                        <a class="img-poppu" href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gl10.jpg">
                            <i class="fa fa-search-plus"></i>
                        </a>
                        <h3>malaysia tour <span>2012</span></h3>
                    </div>
                    <!-- gallery hover one -->
                </li>
                <!-- end single gallery  -->
            </div>
            <!-- end gallery active -->
        </ul>
    </div>
    <!-- 
    ==========================
      Photo Gallery End
    ========================== 
     -->
    <!-- 
    ==========================
      Testimonials start
    ========================== 
     -->
    <div class="testtimonials-area" id="tes">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-right">
                    <h2 class="section-title white">Testimonials</h2>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="testimonial-active owl-carousel">
                    <div class="col-md-4">
                        <div class="single-testimonilas">
                            <div class="testi-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testi/t1.jpg" alt="" class="img-circle">
                            </div>
                            <div class="testi-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo quibusdam, asperiores eaque temporibus vitae deserunt dolorem.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end single testimonias -->
                    <div class="col-md-4">
                        <div class="single-testimonilas">
                            <div class="testi-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testi/t1.jpg" alt="" class="img-circle">
                            </div>
                            <div class="testi-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo quibusdam, asperiores eaque temporibus vitae deserunt dolorem.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end single testimonias -->
                    <div class="col-md-4">
                        <div class="single-testimonilas">
                            <div class="testi-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testi/t1.jpg" alt="" class="img-circle">
                            </div>
                            <div class="testi-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo quibusdam, asperiores eaque temporibus vitae deserunt dolorem.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end single testimonias -->
                    <div class="col-md-4">
                        <div class="single-testimonilas">
                            <div class="testi-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testi/t1.jpg" alt="" class="img-circle">
                            </div>
                            <div class="testi-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo quibusdam, asperiores eaque temporibus vitae deserunt dolorem.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end single testimonias -->
                </div>
                <!-- end testimonals active -->
            </div>
        </div>
    </div>
    <!-- 
    ==========================
      Testimonials End
    ========================== 
     -->

    <!-- 
    ==========================
      Blog area Start
    ========================== 
     -->
    <div class="blog-area section-padding" id="blg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-rapper">
                        <h2 class="section-title reverse">Blog</h2>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/b1.jpg" alt="">
                                <div class="thumb-tato">
                                    <span class="month">Dec</span>
                                    <span class="date">10-2017</span>
                                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                                </div>
                                <div class="thumb-hover">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-user"></i>by admin</a></li>
                                        <li><a href="#"> <i class="fa fa-comment-o"></i>0 comment</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end blog thumb -->
                            <div class="blog-text">
                                <a href="#">
                                    <h2>Finibus Bon et Malorum written Cicero</h2>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiselit sed do eiusmod tempor incididunt ut labore amet dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end single blog -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/b2.jpg" alt="">
                                <div class="thumb-tato">
                                    <span class="month">Dec</span>
                                    <span class="date">10-2017</span>
                                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                                </div>
                                <div class="thumb-hover">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-user"></i>by admin</a></li>
                                        <li><a href="#"> <i class="fa fa-comment-o"></i>0 comment</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end blog thumb -->
                            <div class="blog-text">
                                <a href="#">
                                    <h2>Finibus Bon et Malorum written Cicero</h2>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiselit sed do eiusmod tempor incididunt ut labore amet dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end single blog -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/b3.jpg" alt="">
                                <div class="thumb-tato">
                                    <span class="month">Dec</span>
                                    <span class="date">10-2017</span>
                                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                                </div>
                                <div class="thumb-hover">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-user"></i>by admin</a></li>
                                        <li><a href="#"> <i class="fa fa-comment-o"></i>0 comment</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end blog thumb -->
                            <div class="blog-text">
                                <a href="#">
                                    <h2>Finibus Bon et Malorum written Cicero</h2>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiselit sed do eiusmod tempor incididunt ut labore amet dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end single blog -->
            </div>
        </div>
    </div>

    <!-- 
    ==========================
      Blog area End
    ========================== 
     -->

    <!-- 
    ==========================
      footer area Start
    ========================== 
     -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-logo text-center">
                        <a href="#" id="home" class="smooth-scroll">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.png" alt="">  
                       </a>
                    </div>
                    <!-- end footer logo -->
                    <div class="text-1">
                        <p>Claritas est etiam processus dynamicus qui sequitur mutationem consuetudium lec. Mirum est notare quam littera gothica quam nunc putamus parum claram</p>
                    </div>
                    <!-- end subscibe box -->
                    <div class="top-social-icon footer-social2">
                        <ul>
                            <li><a href="#!" class="waves-effect waves-circle waves-light btn-floating"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#!" class="waves-effect waves-circle waves-light btn-floating"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#!" class="waves-effect waves-circle waves-light btn-floating"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#!" class="waves-effect waves-circle waves-light btn-floating"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#!" class="waves-effect waves-circle waves-light btn-floating"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                    <!-- end footer social icon -->
                </div>
            </div>
        </div>
        <!--  -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center copy-text">
                            <p>Copyright &copy; 2017 Steps, design by <a href="#" class="footer-link">mahedi amin</a></p>
                        </div>
                        <!-- end copyright text -->
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom-area -->
        <div class="contact-me">
            <a href="#!" class="new-con waves-effect waves-light contact-open" data-toggle="tooltip" data-placement="left" title="Click For Open Contact"><i class="fa fa-envelope-o"></i></a>
        </div>
    </footer>
    <!-- 
    ==========================
      footer area End
    ========================== 
     -->

    <!-- 
    ==========================
      Hidden contact
    ========================== 
     -->
    <div class="contact-area">
        <div class="slider-table">
            <div class="slider-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="section-title-rapper">
                            <h2 class="section-title reverse">contact</h2>
                        </div>
                        </div>
                        <!-- end section title -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="left-contact">
                                <input type="text" placeholder="name">
                                <input type="email" placeholder="email">
                                <input type="text" placeholder="subject">
                                <textarea placeholder="message"></textarea>
                                <button type="submit"> send</button>
                            </div>
                        </div>
                        <!-- end contact form -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="right-contact">
                                <div id="googleMap"></div>
                            </div>
                        </div>
                        <!-- end google map -->
                    </div>
                </div>
            </div>
        </div><!-- end contact table  -->
        <div class="contcact-close-option">
            <a href="#!" class="contact-close"> <i class="fa fa-times"></i></a>
        </div>
    </div>
    <!-- 
    ==========================
      hidden-contact
    ========================== 
     -->




    <!-- main jquery  -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
    <!-- bootstrap js  -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <!-- meterilaze js -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/waves.js"></script>
    <!-- images load jquery -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- jquery messonary  -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/isotope.pkgd.min.js"></script>
    <!-- owal carosle js -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
    <!-- Counter up js -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.counterup.min.js"></script>
    <!-- scroll up js -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.scrollUp.min.js"></script>
    <!-- jquery waypoints -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/waypoints.min.js"></script>
    <!-- jaralax js -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jarallax.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.parallax-1.1.3.js"></script>
    <!-- maginify js -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7CQl6fRhagGok6CzFGOOPne2X1u1spoA"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/map.js"></script>

    <!-- map js -->
    <!-- custom scripts -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
    <?php wp_footer(); ?>
</body>

</html>