<?php
ob_start();
session_start();
?>

<?php
if(isset($_POST['submitSave'])) {
    $users = simplexml_load_file('members.xml'); //loading files xml
    $member = $users->addChild('member'); //child users
    $member -> addAttribute('id', $_POST['id']); //add attribute for id
    $member -> addChild('email', $_POST['email']); //add for child
    $member -> addChild('password', $_POST['password']); //add for child
    file_put_contents('members.xml' , $users -> asXML()); //put content into xml file asXML() IS PHP FUNCTIONS
    header('location:login-register.php');
}
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Twigs - Login Register</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
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

        <!-- Start Login Register Area -->
        <div class="htc__login__register bg__white ptb--130" style="background: rgba(0, 0, 0, 0) url(images/bg/login.jpg) no-repeat scroll center center / cover ;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <ul class="login__register__menu" role="tablist">
                            <li role="presentation" class="login active"><a href="#login" role="tab" data-toggle="tab">Login</a></li>
                            <li role="presentation" class="register"><a href="#register" role="tab" data-toggle="tab">Register</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Start Login Register Content -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="htc__login__register__wrap">
                            <!-- Login Content -->
                            <div id="login" role="tabpanel" class="single__tabs__panel tab-pane fade in active">
                            <?php
                                if(isset($_POST['login'])) {

                                    $users = simplexml_load_file('members.xml'); //loading file xml
                                    $loginname=$_POST['loginname'];
                                    $loginpass=$_POST['loginpass'];
                                   // $id = $_GET['id']; //get id
                                    $index = 0; //index for array
                                    $i = 0; //number
                                    foreach($users -> member as $member) { //looping all users
                                    
                                        if($member['id']==$loginname && $member->password==$loginpass) {
                                            $_SESSION['loginname']= $loginname;
                                            $_SESSION['loginpass']=  $loginpass; 
                                            $index = $i; //assign index to 0
                                            header("location:profile.php?id=".$loginname);
                                           // break; //break down
                                        } else if ($loginname=="admin" && $loginpass=="123") {
                                            $_SESSION['loginname']="admin";
                                            $_SESSION['loginpass']="123"; 
                                            header("location:admin.php");
                                        } else {
                                            echo "<span style='font-size: 15px;'><div class='alert alert-danger' role='alert'>Invalid username & password </div></span>";
                                        }
                                        $i++;
                                    }
                                   // $loginname=$_POST['loginname'];
                                 //   $loginpass=$_POST['loginpass'];
                                   // if($loginname=="admin" && $loginpass=="123"){
                                     //   $_SESSION['loginname']="admin";
                                     //   $_SESSION['loginpass']="123"; 
                                  //    //  header("location:index.php");
                                   // } else {
                                       // echo "<span style='font-size: 15px;'><div class='alert alert-danger' role='alert'>Invalid username & password </div></span>";
                                    //}
                                }
                            ?>
                                <form method="post" name="form_login">
                                    <input type="text" class="form-control" name="loginname" placeholder="Username*" required>
                                    <input type="password" class="form-control" style="margin:10px 0px 10px 0px" name="loginpass" placeholder="Password*" required>
                                    <div style="font-size: 13px;">
                                        <span>Login to the account that you have been registered.</span>
                                    </div>
                                    <div class="htc__login__btn" style="padding-top: 30px">
                                        <input type="submit" style="padding: 10px 24px; background: #ff4136; color: #fff;" name="login" value="LOGIN">
                                    </div>
                                </form><br>
                            </div>
                            <!-- End Login Content -->

                            <!-- Register Content -->
                            <div id="register" role="tabpanel" class="single__tabs__panel tab-pane fade">
                                <form method="post" name="form_register">
                                    <input type="text" class="form-control" name="id" placeholder="Username*" required>
                                    <input type="email" class="form-control" style="margin:10px 0px 10px 0px" name="email" placeholder="Email*" required>
                                    <input type="password" class="form-control" name="password" placeholder="Password*" required>
                                    <div style="font-size: 13px;">
                                        <span>By clicking Register, you agree to our <a href="term&condition.html">Terms & Conditions</a> and <a href="privacypolicy.html">Privacy Policy</a>. You may receive email notifications from us.</span>
                                    </div>
                                    <div class="htc__login__btn" style="padding-top: 30px">
                                        <input type="submit" style="padding: 10px 24px; background: #ff4136; color: #fff;" name="submitSave" value="REGISTER">
                                    </div>
                                </form>
                            </div>
                            <!-- End Register Content -->
                        </div>
                    </div>
                </div>
                <!-- End Login Register Content -->
            </div>
        </div>
        <!-- End Login Register Area -->
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
                                    <li><a href="term&condition">Terms & Conditions</a></li>
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
    <!--Create Cookies-->


</body>

</html>