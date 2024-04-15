<?php session_start(); ?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Twigs</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl Carousel main css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

<!-- Body main wrapper start -->
<div class="wrapper fixed__footer">
    <!-- Start Header Style -->
    <header id="header" class="htc-header header--3 bg__white">
        <!-- Start Mainmenu Area -->
        <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                        <div class="logo">
                            <a href="index.php">
                                <img src="images/logo/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>

                    <!-- Start MAinmenu Ares -->
                    <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                        <nav class="mainmenu__nav hidden-xs hidden-sm">
                            <ul class="main__menu">
                                <li class="drop"><a href="index.php">Home</a></li>
                                <li class="drop"><a href="about.html">About</a></li>
                                <li class="drop"><a href="shop.html">Shop</a>
                                    <ul class="dropdown">
                                        <span><u><p style="text-align:center;">Hot Sales</p></u></span>
                                        <li><a href="product-details.html">> We've Moved</a></li>
                                        <li><a href="product-details6.html">> North American Birds</a></li>
                                        <li><a href="product-details5.html">> Sequoia, Glacier, Smoky Mountains National Park</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="mobile-menu clearfix visible-xs visible-sm">
                            <nav id="mobile_dropdown">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="shop.html">Shop</a>
                                        <ul>
                                            <li><a href="product-details.html">POSTCARD</a></li>
                                            <li><a href="product-details6.html">North American Birds</a></li>
                                            <li><a href="product-details5.html">Sequoia, Glacier, Smoky Mountains National Park</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.php">contact</a></li>
                                </ul>
                            </nav>
                        </div>                          
                    </div>

                    <!-- End MAinmenu Ares -->
                    <div class="col-md-2 col-sm-4 col-xs-3">  
                        <ul class="menu-extra">
                            <?php 
                                echo  '<li><a href="login-register.php"><span class="ti-user" style="padding-right:20px"></span></a></li>';
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="mobile-menu-area"></div>
            </div>
        </div>
        <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Style -->

        <!-- Start Feature Product -->
        <section class="categories-slider-area bg__white pt--30" style="background-color:blanchedalmond">
            <div class="container pb--50">         
                        <!-- Start Slider Area -->
                        <div class="slider__container slider--one">
                            <div class="slider__activation__wrap owl-carousel owl-theme">
                                <!-- Start Single Slide -->
                                <div class="slide slider__full--screen slider-height-inherit  slider-text-left" style="background: rgba(0, 0, 0, 0) url(images/slider/bg/HomeBanner.jpg) no-repeat scroll center center / cover ;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                                <div class="slider__inner">
                                                    <p1>THE ECO-FRIENDLY WAY TO </p1>
                                                    <h1>Give the best wishes<br />to your loved ones. </h1><br />
                                                    <button onclick="newTab()" class="button w-inline-block">View more</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Slide -->
                            </div>
                        </div>
                        <!-- Start Slider Area --> 
            </div>
        </section>
             <!-- Start Blog Area -->
        <section class="htc__blog__area bg__white pb--50" style="background-color: burlywood;">
            <div class="container">
                <div class="row">
                <div class="col-xs-12">
                        <div class="section__title section__title--2 text-center pt--50 pb--30">
                            <h2 class="title__line">Explore our products</h2>
                        </div>
                    </div>
                    <div class="blog__wrap clearfix pt--60 xmt-30">
                        <!-- Start Single Blog -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="shop.html">
                                            <img src="images/blog/blog-img/Greeting_Cards.jpg" alt="blog images">
                                        </a>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des" style="color:black">Greeting Cards</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                        <!-- Start Single Blog -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="shop.html">
                                            <img src="images/blog/blog-img/Assorted_Card _Sets.jpg" alt="blog images">
                                        </a>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des" style="color:black">Assorted Card Sets</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                        <!-- Start Single Blog -->
                        <div class="col-md-4 col-lg-4 hidden-sm col-xs-12">
                            <div class="blog foo">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="shop.html">
                                            <img src="images/blog/blog-img/Notebooks.jpg" alt="blog images">
                                        </a>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des" style="color:black">Notebooks</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->
        <!-- End Feature Product -->
        <section class="htc__blog__area bg__white pt--60" style="background-color: blanchedalmond;">
            <div class="container">
                <div class="row pb--50">
                    <div class="col-md-6">
                            <div class="all caps pt--30">Inspiration</div>
                            <h2 class="pb--20">70+ Lovely Baby Shower Wishes to Write In Your Card</h2>
                            <p1>
                                For important occasions like Baby Showers, we often overthink <strong>what to write on a baby shower card</strong>, because we want it to stand out from the rest of the dozens of cards our new mom will undoubtedly be receiving. That's why we've compiled a list of more than 70 adorable baby shower wishes to make the process easier for you.
                                <br />
                                <br />
                                Remember, when writing a greeting card, you want to stay true to your personality and the relationship you have with the recipient, which means it can be perfectly acceptable to be funny, serious, simple, or sometimes even slightly generic if you don’t know them too well.
                            </p1>
                    </div>
                    <div class="col-md-6">
                        <img src="images/homepage/baby-shower-card.jpg" sizes="(max-width: 479px) 93vw, (max-width: 767px) 92vw, (max-width: 991px) 47vw, (max-width: 1439px) 40vw, 100vw" class="image-cover" >
                    </div>
                </div>
            </div>
        </section>
        <!--led by Transparency-->
        <section class="htc__choose__us__ares" style="background-color: cornsilk;">
        <div class="container pb--100">
            <div class="heading-wrapper-centered">
                <h2>Led by Transparency</h2>
            </div>
            <div class="row">
                <div class="col-md-4 feature-wrapper">
                    <div class="feature-image">
                        <img src="images/icons/fast_shipping_icon.png">
                    </div>
                    <h4>Fast shipping. Free on orders over $25.</h4>
                </div>
                <div class="col-md-4 feature-wrapper">
                    <div class="feature-image">
                        <img src="images/icons/sustainable_process_icon2.png">
                    </div>
                    <h4>Suitainable process from start to finish.</h4>
                </div>
                <div class="col-md-4 feature-wrapper">
                    <div class="feature-image">
                        <img src="images/icons/high_quality_icon.png">
                    </div>
                    <h4>Unique designs and high quality materials.</h4>
                </div>
            </div>
            </div>
    </section>
        <!-- Start Footer Area -->
        <footer class="htc__foooter__area gray-bg">
            <div class="container">
                <div class="row">
                    <div class="footer__container clearfix">
                         <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-lg-3 col-sm-6">
                            <div class="ft__widget">
                                <div class="ft__logo">
                                    <a href="index.php">
                                        <img src="images/logo/logo.png" alt="footer logo">
                                    </a>
                                </div>
                                <div class="footer-address">
                                    <ul>
                                        <li>
                                            <div class="address-icon">
                                                <i class="zmdi zmdi-pin"></i>
                                            </div>
                                            <div class="address-text">
                                                <p>194 Main Rd T, FS Rayed <br> VIC 3057, USA</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="address-icon">
                                                <i class="zmdi zmdi-email"></i>
                                            </div>
                                            <div class="address-text">
                                                <a href="#">help@twigspaper.com</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="address-icon">
                                                <i class="zmdi zmdi-phone-in-talk"></i>
                                            </div>
                                            <div class="address-text">
                                                <p>201-292-4506</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="social__icon">
                                    <li><a href="https://www.instagram.com/twigspaper/"><i class="zmdi zmdi-instagram"></i></a></li>
                                    <li><a href="https://www.facebook.com/twigspaper"><i class="zmdi zmdi-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-lg-3 col-sm-6 smt-30 xmt-30">
                            <div class="ft__widget">
                                <h2 class="ft__title">Information</h2>
                                <ul class="footer-categories">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-lg-3 col-sm-6 smt-30 xmt-30">
                            <div class="ft__widget">
                                <h2 class="ft__title">Shop</h2>
                                <ul class="footer-categories">
                                    <li><a href="shop.html">Shop All</a></li>
                                    <li><a href="product-details.html">> We've Moved</a></li>
                                    <li><a href="product-details6.html">> North American Birds</a></li>
                                    <li><a href="product-details5.html">> Sequoia, Glacier, Smoky Mountains National Park</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-lg-3 col-sm-6 smt-30 xmt-30">
                            <div class="ft__widget">
                                <h2 class="ft__title">Customer Care</h2>
                                <ul class="footer-categories">
                                    <li><a href="FAQs.html">FAQs</a></li>
                                    <li><a href="privacypolicy.html">Privacy Policy</a></li>
                                    <li><a href="term&condition.html">Terms & Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- Start Copyright Area -->
                <div class="htc__copyright__area">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="copyright__inner">
                                <div class="copyright">
                                    <!-- Created on 2021 -->
                                    <p>© <script>document.write(new Date().getFullYear())</script> <a href="#">Gui Wen, Yong Wei, Jun Ann.</a>2021
                                    All Right Reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Copyright Area -->
            </div>
        </footer>
        <!-- End Footer Area -->
</div>
    <!-- Body main wrapper end -->
 
    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>
    <script>
        function newTab() {
        window.open("slideshow.html");
        }
    </script>

</body>

</html>