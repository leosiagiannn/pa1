<?php
require_once 'functions.php';
?>
<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js " lang="en">
<!--<![endif]-->

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Meta -->
    <title>Beranda</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logos.png" type="image/png" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Custom & Default Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="style.css">

    <!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
	<![endif]-->

</head>

<body class="left-menu">
    <div class="menu-wrapper">
        <div class="mobile-menu">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="dashboard_user.php"><img src="images/logo1.png" alt=""
                                width="50"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="dashboard_user.php">Beranda </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Kepengurusan & Anggota <span
                                        class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="pengurus1.php">Kepengurusan</a></li>
                                    <li><a href="anggota1.php">Anggota</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="iuran_anggota.php">Keuangan </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Akademis <span
                                        class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="request1.php">Request Kelas Tutorial</a></li>
                                    <li><a href="Penyediaan software1.php">Penyediaan Software</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="notif1.php"><i class="fa fa-bell">Notifikasi </i></a>
                            </li>
                            <li class="dropdown">
                                <a href="contact.php">Kontak </a>
                            </li>
                            <li class="dropdown">
                                <a href="logout.php">Logout <i class="fa fa-exit"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
                <!--/.container-fluid -->
            </nav>
        </div><!-- end mobile-menu -->
        <header class="vertical-header">
            <div class="vertical-header-wrapper">
                <nav class="nav-menu" style="background-color:grey;color:black;">
                    <div class="logo">
                        <a href="index.html"><img src="images/logo1.png" alt="" width="140"></a>
                    </div><!-- end logo -->
                    <div class="margin-block"></div>
                    <ul class="primary-menu">
                        <li class="child-menu"><a href="dashboard_user.php">Beranda <i class="fa fa-home"></i>
                        </li>
                        <li class="child-menu"><a href="#">Kepengurusan & Anggota <i class="fa fa-angle-right"></i></a>
                            <div class="sub-menu-wrapper">
                                <ul class="sub-menu center-content">
                                    <li><a href="pengurus1.php">Kepengurusan <i class="fa fa-user"></i></a></li>
                                    <li><a href="anggota1.php">Anggota <i class="fa fa-users"></i></a></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="child-menu"><a href="iuran_anggota.php">Keuangan <i class="fa fa-dollar"></i>
                        </li>
                        <li class="child-menu"><a href="#">Akademis <i class="fa fa-angle-right"></i></a>
                            <div class="sub-menu-wrapper">
                                <ul class="sub-menu center-content">
                                    <li><a href="request1.php">Request Kelas Tutorial <i class="fa fa-book"></i></a>
                                    </li>
                                    <li><a href="Penyediaan software1.php">Penyediaan software <i
                                                class="fa fa-desktop"></i></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="child-menu"><a href="contact1.php">Kontak <i class="fa fa-comment"></i> </a>
                        </li>
                        <li class="child-menu">
                            <a href="#notif" data-toggle="modal">Notifikasi <i class="fa fa-bell"> </i>
                        </li>
                        <li><a href="logout.php">Logout <i class="fa fa-sign-out"></i></a></li>
                    </ul>
                    <div class="margin-block"></div>
                </nav><!-- end nav-menu -->
            </div><!-- end vertical-header-wrapper -->
        </header><!-- end header -->
    </div><!-- end menu-wrapper -->
    <?php
    include('notif1.php');
    ?>
    <div id="wrapper">
        <div id="home" class="video-section js-height-full">
            <div class="overlay"></div>
            <div class="home-text-wrapper relative container">
                <div class="home-message">
                    <img src="images/logo1.png" alt="" width="400">
                    <p>Del UI/UX Club</p>

                </div>
            </div>
        </div>
        <div class="section bgcolor noover">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message">
                            <h3><mark class="rotate">Hello, Hai, Horas</mark>!!! Website ini dibangun untuk UKM Del
                                UI/UX Club di Institut Teknologi Del</h3>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
        <br>
        <div id="fh5co-about" class="fh5co-agent">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                        <h2>Our Teams</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2 text-center animate-box" data-animate-effect="fadeIn">
                        <div class="fh5co-staff">
                            <img style="height: 210px; width: 200px" class="img-responsive" src="images/april.jpeg">
                            <h3>Aprilia Naibaho</h3>
                            <p style="color: black; font-family: Times New Roman">
                            <p class="fh5co-social-icons">
                                <a href="#"><i class="icon-twitter2"></i></a>
                                <a href="#"><i class="icon-facebook2"></i></a>
                                <a href="#"><i class="icon-instagram"></i></a>
                                <a href="#"><i class="icon-dribbble2"></i></a>
                                <a href="#"><i class="icon-youtube"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-2 text-center animate-box" data-animate-effect="fadeIn">
                        <div class="fh5co-staff">
                            <img style="height: 210px; width: 200px" class="img-responsive" src="images/leo.jpeg">
                            <h3>Leonardo Siagian</h3>
                            <p class="fh5co-social-icons">
                                <a href="#"><i class="icon-twitter2"></i></a>
                                <a href="#"><i class="icon-facebook2"></i></a>
                                <a href="#"><i class="icon-instagram"></i></a>
                                <a href="#"><i class="icon-dribbble2"></i></a>
                                <a href="#"><i class="icon-youtube"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-2 text-center animate-box" data-animate-effect="fadeIn">
                        <div class="fh5co-staff">
                            <img style="height: 210px; width: 200px" class="img-responsive" src="images/visgha.jpeg">
                            <h3>Visgha Olivia</h3>
                            <p class="fh5co-social-icons">
                                <a href="#"><i class="icon-twitter2"></i></a>
                                <a href="#"><i class="icon-facebook2"></i></a>
                                <a href="#"><i class="icon-instagram"></i></a>
                                <a href="#"><i class="icon-dribbble2"></i></a>
                                <a href="#"><i class="icon-youtube"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-2 text-center animate-box" data-animate-effect="fadeIn">
                        <div class="fh5co-staff">
                            <img style="height: 210px; width: 200px" class="img-responsive" src="images/julius.jpg">
                            <h3>Julius Samosir</h3>
                            <p class="fh5co-social-icons">
                                <a href="#"><i class="icon-twitter2"></i></a>
                                <a href="#"><i class="icon-facebook2"></i></a>
                                <a href="#"><i class="icon-instagram"></i></a>
                                <a href="#"><i class="icon-dribbble2"></i></a>
                                <a href="#"><i class="icon-youtube"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-2 text-center animate-box" data-animate-effect="fadeIn">
                        <div class="fh5co-staff">
                            <img style="height: 210px; width: 200px" class="img-responsive" src="images/nursista.jpeg">
                            <h3>Nursista Nainggolan</h3>
                            <p class="fh5co-social-icons">
                                <a href="#"><i class="icon-twitter2"></i></a>
                                <a href="#"><i class="icon-facebook2"></i></a>
                                <a href="#"><i class="icon-instagram"></i></a>
                                <a href="#"><i class="icon-dribbble2"></i></a>
                                <a href="#"><i class="icon-youtube"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="section copyrights">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <img src="images/logo1.png" alt="" width="100">
                        <!-- </div> -->
                    </div>
                    <div class="col-lg-9 col-md-9 text-right">
                        <div class="cop-links">
                            <ul class="list-inline">
                                <li>&copy; Del UI/UX Club | Design: <a href="about">PA1-D3TI01</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end wrapper -->
    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/rotate.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/masonry.js"></script>
    <script src="js/masonry-4-col.js"></script>
    <!-- VIDEO BG PLUGINS -->
    <script src="videos/libs/swfobject.js"></script>
    <script src="videos/libs/modernizr.video.js"></script>
    <script src="videos/libs/video_background.js"></script>
    <script>
    jQuery(document).ready(function($) {
        var Video_back = new video_background($("#home"), {
            "position": "absolute", //Follow page scroll
            "z-index": "-1", //Behind everything
            "loop": true, //Loop when it reaches the end
            "autoplay": true, //Autoplay at start
            "muted": true, //Muted at start
            "mp4": "videos/video.mp4", //Path to video mp4 format
            "video_ratio": 1.7778, // width/height -> If none provided sizing of the video is set to adjust
            "fallback_image": "images/dummy.png", //Fallback image path
            "priority": "html5" //Priority for html5 (if set to flash and tested locally will give a flash security error)
        });
    });
    </script>
</body>

</html>