<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" type="image/png" href="images/favicon.png">
        <title>Wiploo</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="assets/css/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="assets/css/main.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="assets/css/responsive.css">
        
        <!-- Template Javascript Files
        ================================================== -->
        <!-- modernizr js -->
        <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- jquery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <!-- owl carouserl js -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- bootstrap js -->

        <script src="assets/js/bootstrap.min.js"></script>
        <!-- wow js -->
        <script src="assets/js/wow.min.js"></script>
        <!-- slider js -->
        <script src="assets/js/slider.js"></script>
        <script src="assets/js/jquery.fancybox.js"></script>
        <!-- template main js -->
        <script src="assets/js/main.js"></script>
    </head>
    <body>
        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="">
            <div class="container top-bar-container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="index.php" >
                            <img src="assets/images/logo.png" alt="">
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-left" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="index.php" >Home</a>
                            </li>
                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Article <span class="caret"></span></a>              
                                 <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="blog-index.php">Blog index</a></li>
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Video <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="blog-video.php">Video Index</a></li>
                                        
                                    </ul>
                                </div>  
                            </li>
                            <li><a class="red-color" href="#">Popular</a></li>
                            <li><a href="#">Community</a></li>
                            <li class="padding-left-20"><a href="admin" class="blue-bg round-btn btn">Tulis Artikel</a></li>
                            <li id="search-btn"><a class="ion-ios-search" href="#"></a></li>
                            <li id="link-form-login" class="dropdown"><a class="ion-android-person" href="#"></a>
                                <div class="dropdown-menu">
                                    <form id="login" class="form-wrapper-index">
                                        <p><input type="email" placeholder="Your email" name="email-login" /></p>
                                        <p><input type="password" name="password-login" placeholder="Password"></p>
                                        <p><button name="submit">Login</button></p>
                                        <hr/>
                                        <p>Not registered yet?<a class="red-color" href="admin/index.php"> Signup Here</a></p>
                                    </form>
                                </div>
                            </li> 
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
                <!--search bar-->
                 <div id="top-search-bar" class="display-none">
                    <div class="input-group width-100">
                      <input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon2">
                      <span class="input-group-btn">
                        <button class="btn btn-default ion-ios-search" type="button"></button>
                      </span>
                    </div>
                </div>
            </div>
        </header>
        
        <section id="breaking-news-section">
            <div class="container ">
                <div class="col-md-2 red-bg">
                    <span class="section-title">Breaking News :</span>
                </div>
                <div class="col-md-10 slider-title-content">
                    <ul class="breaking-news-slider">
                        <li><a href="#">Breaking News Title Goes Here, if you want to read just click it</a></li>
                        <li><a href="#">Breaking News Title Goes Here, if you want to read just click it 2</a></li>
                        <li><a href="#">Breaking News Title Goes Here, if you want to read just click it 3</a></li>
                    </ul>
                </div>
            </div>
        </section>