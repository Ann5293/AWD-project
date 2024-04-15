<?php
if(isset($_POST['btnC'])) {
    $user = simplexml_load_file('contact.xml'); //loading files xml
    $person = $user->addChild('person'); //child products
    $person -> addChild('name', $_POST['name']); //add for child
    $person -> addChild('email', $_POST['email']); //add for child
    $person -> addChild('subject', $_POST['subject']); //add for child
    $person -> addChild('message', $_POST['message']); //add for child
    file_put_contents('contact.xml' , $user -> asXML()); //put content into xml file asXML() IS PHP FUNCTIONS
}
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Twigs - Contact</title>
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
                            <li><a href="login-register.php"><span class="ti-user" style="padding-right:20px"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="mobile-menu-area"></div>
            </div>
        </div>
        <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Style -->

        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/contact.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center" style="text-shadow: black 1px 0 10px;">
                                <h2 class="bradcaump-title" style="color:white">Contact US</h2>
                                <p style="color:white" >We're always here to answer your questions. Reach out and we'll get back to you as soon as possible.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Contact Area -->
        <section class="htc__contact__area ptb--120" style="background-color:blanchedalmond" >
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="htc__contact__container">
                            <div class="contact-form-wrap">
                            <div class="contact-title">
                                <h2 class="contact__title">Contact Us</h2>
                                <p style="margin: -30px 0px 40px 0px;">Fill out the contact form to get the inquiry you need!</p>
                            </div>
                            <form id="form" name="form" method="post" style="background-color:tan" >
                                <div class="single-contact-form">
                                    <div class="contact-box">
                                        <p>Your Name* :</p>
                                        <input type="text" class="form-control" style="background-color:white" name="name" id="name" required>
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box">
                                        <p>Email* :</p>
                                        <input type="email" class="form-control" style="background-color:white" name="email" id="email" required>
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box subject">
                                        <p>Subject* :</p>
                                        <input class="form-control" style="background-color:white" name="subject" id="subject" required>
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box message">
                                        <p>Message* :</p>
                                        <textarea class="form-control" style="background-color:white" name="message" id="message" required></textarea>
                                        <span id="success"></span>
                                    </div>
                                </div>
                                <div class="contact-btn">
                                    <input type="submit" name="btnC" class="fv-btn" value="submit"style="background-color:blanchedalmond" ></input>
                                </div>
                            </form>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 smt-30 xmt-30">
                        <div class="map-contacts">
                            <div class="htc__contact__address">
                                <h2 class="contact__title">How Can We Help?</h2>
                                <p style="margin: -30px 0px 30px 0px;">Feel free to get in touch with us!</p>
                                <div class="contact__address__inner">
                                    <!-- Start Single Adress -->
                                    <div class="single__contact__address">
                                        <div class="contact__icon">
                                            <span class="ti-location-pin"></span>
                                        </div>
                                        <div class="contact__details">
                                            <p>Address : <br> 194 Main Rd T, FS Rayed VIC 3057, USA</p>
                                        </div>
                                    </div>
                                    <!-- End Single Adress -->
                                </div>
                                <div class="contact__address__inner">
                                    <!-- Start Single Adress -->
                                    <div class="single__contact__address">
                                        <div class="contact__icon">
                                            <span class="ti-mobile"></span>
                                        </div>
                                        <div class="contact__details">
                                            <p> Call : <br>201-292-4506</p>
                                        </div>
                                    </div>
                                    <!-- End Single Adress -->
                                    <!-- Start Single Address -->
                                    <div class="single__contact__address">
                                        <div class="contact__icon">
                                            <span class="ti-email"></span>
                                        </div>
                                        <div class="contact__details">
                                            <p> Email :<br> help@twigspaper.com</p>
                                        </div>
                                    </div>
                                    <!-- End Single Adress -->
                                </div>
                                <div class="contact__details" style="margin: 30px 0px 10px 0px;">
                                    <p>Follow Us On :</p>
                                </div>
                                <div class="contact__address__inner">
                                    <div class="contact__icon" style="display: flex;">
                                        <a href="https://www.instagram.com/twigspaper"><span class="zmdi zmdi-instagram" /></a>
                                        <a href="https://www.facebook.com/twigspaper"><span class="zmdi zmdi-facebook" style="margin-left: 10px;" /></a>
                                    </div>
                                </div>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127502.69682600832!2d101.69526238978527!3d2.9699789848660516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdcbc5df56418f%3A0xb186679d7d069c0f!2sKajang%2C%20Selangor!5e0!3m2!1sen!2smy!4v1624021679958!5m2!1sen!2smy" frameborder="0" style="border:0; width: 100%; height: 280px;" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Area -->
        <!-- Start Footer Area -->
        <footer class="htc__foooter__area gray-bg">
            <div class="container">
                <div class="row">
                    <div class="footer__container clearfix">
                         <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-lg-3 col-sm-6">
                            <div class="ft__widget">
                                <div class="ft__logo">
                                    <a href="index.html">
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
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
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
                                    <p>© <script>document.write(new Date().getFullYear())</script> <a href="#">Gui Wen, Yong Wei, Jun Ann.</a>
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
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>

</html>