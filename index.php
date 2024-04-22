<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['login'])) {
    $adminuser=$_POST['username'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbladmin where  UserName='$adminuser' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
        $_SESSION['aid']=$ret['ID'];
        header('location:add-category.php');
    }
    else{
        echo "<script>alert('Invalid details. Please try again.');</script>";   
        echo "<script>window.location.href='dashboard.php'</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Login Page</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
    <style>
        .auth-cover-img {
            position: relative;
            width: 100%;
            height: 100vh; /* Adjust height as needed */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            filter: blur(2px); /* Add blur effect */
        }
        .overlay-wrap {
            position: relative; /* Ensure the overlay content is positioned relative to this container */
        }
        .bg-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1; /* Ensure the video is behind other content */
        }
        .highlight-title {
            font-size: 35px;
            color: #FFEBB2;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); /* Add shadow effect */
        }
    </style>
</head>
<body>
    <!-- HK Wrapper -->
    <div class="hk-wrapper">
        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <header class="d-flex justify-content-between align-items-center">
                <a class="d-flex auth-brand align-items-center" href="#">
                    <span class="highlight-title">Dairy Farm Operations Tracker</span>
                </a>
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-5 pa-0">
                        <div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
                            <div class="auth-cover-img overlay-wrap" style="background-image:url(dist/img/banner2.png);">
                                <video autoplay muted loop class="bg-video">
                                    <source src='dist/img/vid1.mp4' type="video/mp4">
                                    <!-- Add additional sources for other video formats if needed -->
                                    Your browser does not support the video tag.
                                </video>
                                <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                    <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                                        <!-- Content for your video background -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 pa-0">
                        <div class="auth-form-wrap py-xl-0 py-50">
                            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100">
                                <form method="post">
                                    <h1 class="display-4 mb-10">Welcome Back :)</h1>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" type="text" name="username" required="true">
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Password" type="password" name="password" required="true">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-warning btn-block" type="submit" name="login">Login</button>
                                    <p class="font-14 text-center mt-15"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->
    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- Owl JavaScript -->
    <script src="vendors/owl.carousel/dist/owl.carousel.min.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="dist/js/feather.min.js"></script>

    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>
    <script src="dist/js/login-data.js"></script>
</body>
</html>
