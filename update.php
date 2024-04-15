<?php
$users = simplexml_load_file('members.xml'); //loading file xml

if(isset($_POST['edit'])) { //submit save button

    foreach($users -> member as $member){ //looping member
        if($member['id']==$_POST['id']){ //getting input id compare member id
            $member -> email = $_POST['email']; //save data into variable
            $member -> password = $_POST['password'];
            break;
        }
    }
    file_put_contents('members.xml', $users -> asXML()); //save data to file xml
    header('location:admin.php'); //redirect to index page
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
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Twigs - Edit</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
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
<body class="profilebody">
    <div class="container">
        <div class="main-body">
     <!-- Breadcrumb -->
     <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a style="color: #dedede" href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a style="color: #dedede" href="admin.php">Admin Panel</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                <div style="text-align:right">
                    <span><a style="color: green; padding-right:10px;" href="logout.php"><b>Logout</b></a></span>
                </div>
            </ol>
          </nav>

        <!-- Start edit Area -->

<form method="post">
    
    <table class="table table-striped table-bordered table-responsive" style="background-color:#bad1f5; width:100%;" >
        <tr>
            <td class="text-center">Username</td>
            <td><input type="text" class="form-control" name='id' value="<?php echo $id; ?>" readonly></td>
        </tr>
        <tr>
            <td class="text-center" >Email</td>
            <td><input type="email" class="form-control" name='email' value="<?php echo $email; ?>"></td>
        </tr>
        <tr>
            <td class="text-center">Password</td>
            <td><input type="text" class="form-control" name='password' value="<?php echo $password; ?>"></td>
        </tr>
            <td style="text-align:center;" colspan="2"><input type="submit" class="btn btn-primary" name='edit' value="Edit"></td>
        </tr>
    </table>
</form >
 <!-- Start Copyright Area -->
 <div class="htc__copyright__area" style="margin-top: 70px;">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="copyright__inner">
                                <div class="copyright">
                                    <p style="padding-left:10px;">© <script>document.write(new Date().getFullYear())</script> <a style="color: #2c3373" href="#">Gui Wen, Yong Wei, Jun Ann.</a>
                                    All Right Reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Copyright Area -->
</body>
</html>