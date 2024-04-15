<?php 
   session_start();
   if($_SESSION["loginname"] =='' && $_SESSION["loginpass"]==''){
    header('location:login-register.php');
    exit();

   }else{}
?>  
<?php
    $users = simplexml_load_file('members.xml'); //loading file xml

    if(isset($_POST['edit'])) { //submit save button

        foreach($users -> member as $member){ //looping member
            if($member['id']==$_POST['id']){ //getting input id compare member id
                $member -> email = $_POST['email']; //save data into variable
                $member -> password = $_POST['password'];
                //break;
            }
        }
        $_SESSION['status']="Update";
        file_put_contents('members.xml', $users -> asXML()); //save data to file xml
     //  echo "123"; 
       header('location:profile.php?id='.$_POST['id']); //redirect to index page
        exit();
        
         
    }

    foreach($users -> member as $member) {
        if($member['id']==$_GET['id']) {
            $id = $member['id'];
            $email = $member -> email;
            $password = $member -> password;
            break;
        }
    }
    ?>
<?php
if (isset($_GET['action'])) {  //verify the id
    $users = simplexml_load_file('members.xml'); //loading file xml
    $id = $_GET['id']; //get id
    $index = 0; //index for array
    $i = 0; //number
    foreach($users -> member as $member) { //looping all users
        if($member['id']==$id) {
            $index = $i; //assign index to 0
            $email=$member->email;
            $password=$member->password;
            break; //break down
        }
        $i++;
    }
    unset($users -> member[$index]); //delete
    file_put_contents('members.xml', $users -> asXML()); //and save file
    header('location:index.php');
}

if (isset($_GET['id'])) {  //verify the id
    $users = simplexml_load_file('members.xml'); //loading file xml
    $id = $_GET['id']; //get id
    $index = 0; //index for array
    $i = 0; //number
    foreach($users -> member as $member) { //looping all users
        if($member['id']==$id) {
            $index = $i; //assign index to 0
            $email=$member->email;
            $password=$member->password;
            break; //break down
        }
        $i++;
    }

}
$users = simplexml_load_file('members.xml'); //load the files xml

?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Twigs - User Panel</title>
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

<body class="profilebody" style="margin-top:0px">

<!-- Body main wrapper start -->
<div class="wrapper" style="margin-bottom:30px">
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
        <div class="row" style="margin:auto">
        <div class="col-sm-1"></div>
        <div class="col-sm-9">
        <br>
        <?php
        if( isset($_SESSION['status'])){
            ?>
<div class="alert alert-success " role="alert">
 Profile Update Sucess.
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        <?php }?>
</div>
        </div>
<div class="container" style="padding-top:30px">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center" style="padding-top:15px;">
                    <img src="images/user-profile/image.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3" style="margin-bottom: 10px; margin-top: 10px">
                      <h4 class="text-secondary mb-1"><?php echo $member['id']; ?></h4>
                    </div>
                    <a href="logout.php"><button class="btn btn-success" type="submit">Logout</button></a>
                  </div>
                </div>
              </div>
            </div>  
       
            <form method="post">
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
          
       
                      <h6 class="mb-0">Username<br><small style="color:red">*unable to edit</small></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input class="form-control" type="text" name="id" value="<?php echo $member['id']; ?>" readonly/>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input class="form-control" type="text" name="email" value="<?php echo $email; ?>" />
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input class="form-control" type="text" name="password" value="<?php echo $password; ?>" />
                    </div>
                  </div><br />
                  <div class="row">
                    <div class="col-sm-12" style="text-align:right;">
                      <a href="?id=<?php echo $member['id']; ?>">
                        <input type="submit" class="btn btn-primary" name="edit" value="Update">
                      </a>
                      <a href="?action=delete&id=<?php echo $member['id']; ?>" onclick="return confirm('Are you sure to delete your account?')">
                        <button type="submit" class="btn btn-danger">Delete Account</button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    </form>
  
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
                                    <!-- Created on 2021 -->
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

</body>

</html>