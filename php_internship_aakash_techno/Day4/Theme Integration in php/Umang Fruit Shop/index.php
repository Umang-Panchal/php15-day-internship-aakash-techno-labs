<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Umang Fruit Shop</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>

    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    </head>
<!-- body -->

<body class="main-layout">
<?php
include  'header.php';
?>
    <section class="slider_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full">
                        <h1><strong class="cur">Best</strong><br>Fresh Red Apple</h1>
                            <p>Red, Sweet and Naturally grown Apples imported from Himachal Pradesh and Kashmir</p>
                            <div class="button_section"><a class="main_bt" href="#">Buy Now</a></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="full text_align_center">
                        <img class="slide_img" src="images/slider_img.png" alt="#" /> 
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
include 'about.php';
?>
    <!-- section -->
    <div id="fruits" class="section dark_bg layout_padding left_white">
        <div class="container">
            <div class="row">
               <div class="col-md-12">
                    <div class="heading full text_align_center">
                        <h2 class="white_font full text_align_center">Our Fruits</h2>
                    </div>
                </div>
            </div>
            <div class="row">
               <div class="col-md-4 margin_top_30">
                    <div class="full fr">
                        <img class="img-responsive" src="images/f1.png" alt="#" />
                    </div>
                    <div class="full text_align_center">
                        <h3 class="white_font">Black Grapes<br><strong class="theme_blue">Fresh Fruit</strong></h3>
                    </div>   
                </div>
                <div class="col-md-4 margin_top_30">
                    <div class="full fr">
                        <img class="img-responsive" src="images/f2.png" alt="#" />
                    </div>
                    <div class="full text_align_center">
                        <h3 class="white_font">Pineapple<br><strong class="theme_blue">Fresh Fruit</strong></h3>
                    </div>
                </div>
                <div class="col-md-4 margin_top_30">
                    <div class="full fr">
                        <img class="img-responsive" src="images/f3.png" alt="#" />
                    </div>
                    <div class="full text_align_center">
                        <h3 class="white_font">Bananas<br><strong class="theme_blue">Fresh Fruit</strong></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
               <div class="col-md-6">
                    <div class="full main_heading_1">
                        <h2>Fresh Lemon</h2>
                        <p>Lemon is Great Source of Vitamin C and also improves digestive System.<br>We are Providing Fresh Fresh and Juicy Lemon at best price</p>
                    </div>   
                    <div class="full margin_top_30">
                        <a class="main_bt" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 margin_top_30 padding_right_0">
                    <div class="full">
                        <img src="images/green_fr.png" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <?php
    include 'blog.php';
    include 'contact.php';
    include 'footer.php';
    ?>