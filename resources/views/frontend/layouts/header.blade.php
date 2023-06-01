<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>
    <!-- Standard Favicon -->
    <link rel="icon" href="img/fav/favicon-96x96.png">

    <!-- Touch Icons - iOS and Android 2.1+ -->
    <link rel="apple-touch-icon" href="img/fav/android-icon-48x48.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/fav/android-icon-72x72.png" >
    <link rel="apple-touch-icon" sizes="114x114" href="img/fav/apple-icon-114x114.png" >
    
    <!--bootstrap v5.2.3 -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">
    
    <!--meanmenu-->
    <link rel="stylesheet" type="text/css" href="{{ url('css/meanmenu.css') }}">
    <!--fontawesome v6 css-->
    <link rel="stylesheet" type="text/css" href="{{ url('css/fontawesome.all.min.css') }}">
    <!--aos-->
    <link rel="stylesheet" type="text/css" href="{{ url('css/aos.css') }}">
    <!--magnific popup-->
    <link rel="stylesheet" type="text/css" href="{{ url('css/magnific-popup.css') }}">
    <!--swiper-->
    <link rel="stylesheet" type="text/css" href="{{ url('css/swiper.min.css') }}">
    <!--main style-->
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">

    <!--modernizr-->
    <script src="{{ url('js/vendor/modernizr.js') }}"></script>

    <!--[if lt IE 9]>
    <script src="js/html5/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">
    <div class="se-pre-con"></div>

    <!-- main nav start -->
    <header class="header-style-1">
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="index.html">
                                <img src="img/logo.png"  alt="image">
                            </a>
                        </div><!--/.logo-->
                    </div>
                </div>
            </div>
            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="#">
                            <img src="img/logo.png" alt="image">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a href="/" class="nav-link active"> Home </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="about" class="nav-link">About</a>
                                </li> -->
                                <li class="nav-item">
                                    <a href="events_list" class="nav-link">Events</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="#" class="nav-link "> Events <i class="fa-solid fa-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="events" class="nav-link ">Event</a>
                                        </li>
                                    </ul>
                                </li> -->

                                <!-- <li class="nav-item">
                                    <a href="#" class="nav-link "> Blog <i class="fa-solid fa-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog" class="nav-link ">Blog Grid</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-details" class="nav-link ">Blog Details</a>
                                        </li>
                                    </ul>
                                </li> -->
                                <li class="nav-item">
                                    <a href="contact" class="nav-link">Contact</a>
                                </li>
                            </ul><!--/.navbar-nav -->
                            <div class="others-options d-flex align-items-center">
                                
                                <div class="option-item">
                                <ul class="navbar-nav mx-auto">
                                @if(Auth::check()==true)
                                    <li class="nav-item">
                                        <a href="#" class="nav-link ">  Welcome {{Auth::user()->name}} <i class="fa-solid fa-chevron-down"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="dashboard" class="nav-link ">Profile</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="signout" class="nav-link ">Logout</a>
                                            </li>
                                        </ul>
                                    </li>
                                    @else
                                    <li class="nav-item">
                                        <a href="login" class="nav-link ">Login</a>
                                    </li>
                                    @endif
                                </ul>
                                </div>
                                
                                <div class="option-item d-none d-xl-inline-block">
                                    @if(Auth::check()==true)
                                        <!-- <a href="login" class="btn btn1">Buy Tickets</a> -->
                                    @else
                                    <a href="login" class="btn btn1">Buy Tickets</a>
                                    @endif
                                </div>
                            </div><!--/.others-options-->
                        </div>
                    </nav><!--/.navbar-->
                </div>
            </div>
        </div>
    </header>
    <!-- /.navbar -->
     <!--popup search box-->
    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" >
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <!--popup search box-->