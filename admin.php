<?php 
   session_start();
   if($_SESSION["loginname"] =='' && $_SESSION["loginpass"]==''){
    header('location:login-register.php');
    exit();

   }else{}
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
            break; //break down
        }
        $i++;
    }
    unset($users -> member[$index]); //delete
    file_put_contents('members.xml', $users -> asXML()); //and save file
    header('location:admin.php');
}
$users = simplexml_load_file('members.xml'); //load the files xml
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Twigs - Admin Panel</title>
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

<body class="profilebody">
    <div class="container">
        <div class="main-body">
    
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a style="color: #dedede" href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Admin Panel</li>
                <div style="text-align:right">
                    <span><a style="color: green; padding-right:10px;" href="logout.php"><b>Logout</b></a></span>
                </div>
            </ol>
          </nav>
          <!-- /Breadcrumb -->

        <!-- Start Login Register Area -->
       
            
                <table class="table table-striped table-bordered table-responsive" style="background-color:#bad1f5; width:100%; word-break: break-all;">
                    <caption style="text-align:left">
                        <span style="padding-left:10px"><?php echo 'Number of users: '.count($users); ?></span>
                    </caption>
                    <thead>
                    <tr>
                        <th class="text-center">Username</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Password</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>

                    <!-- Looping -->
                    <?php foreach($users -> member as $member) { ?>
                        <tbody>
                        <tr>
                            <td style="width:25%"><?php echo $member['id']; ?></td>
                            <td style="width:30%"><?php echo $member -> email; ?></td>
                            <td style="width:25%"><?php echo $member -> password; ?></td>
                            <td class="text-center" style="width:20%;">
                                <a style="color:blue" href="update.php?id=<?php echo $member['id']; ?>">
                                    <button type="button" class="btn btn-primary">Edit</button>
                                </a>
                                <a style="color:blue" href="?action=delete&id=<?php echo $member['id']; ?>" onclick="return confirm('Are you sure?')">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>

        <!-- End Login Register Area -->

        </div>
    </div>
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