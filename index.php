<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
        <!-- Title -->
        <title>College Fee Payment System || Homepage</title>
        <link rel="icon" type="image/png" href="images/favicon.png">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/niceselect.css">
        <link rel="stylesheet" href="css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="css/cube-portfolio.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/slicknav.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/colors/color1.css">
    </head>
    <body>
        <?php include_once('includes/header.php'); ?>
        <section class="home-slider">
            <div class="slider-active">
                <div class="single-slider overlay">
                    <div class="slider-image" style="background-image:url('images/slider/slider-bg1.jpg')"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-10 col-12">
                                <!-- Slider Content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include_once('includes/footer.php'); ?>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
