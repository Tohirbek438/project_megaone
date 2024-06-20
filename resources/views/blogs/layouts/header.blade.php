<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Page Title -->
    <title>Medical</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('vendor')}}/img/favicon.jpg">
    <!-- Bundle -->
    <link rel="stylesheet" href="{{asset('vendor')}}/css/bundle.min.css">
    <!-- Plugin Css -->
    <link rel="stylesheet" href="{{asset('vendor')}}/css/revolution-settings.min.css">
    <link rel="stylesheet" href="{{asset('vendor')}}/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{asset('vendor')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('vendor')}}/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('vendor')}}/css/cubeportfolio.min.css">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="{{asset('vendor')}}/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('vendor')}}/css/jquery-ui.bundle.css">
    <link rel="stylesheet" href="{{asset('medical')}}/css/style.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="90" class="position-relative">


<!-- loader start-->
{{--<div class="loader">--}}
{{--    <div class="indicator">--}}
{{--        <svg width="48px" height="36px">--}}
{{--            <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>--}}
{{--            <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>--}}
{{--        </svg>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- loader ends-->


<!--Header Start-->
<header class="cursor-light">

    <!--Navigation-->
    <nav class="navbar navbar-top-default nav-radius navbar-expand-lg bg-white">
        <div class="container">
            <a href="../index-medical.html" title="Logo" class="logo scroll">
                <!--Logo Default-->
                <img src="{{asset('vendor')}}/img/logo.png" alt="logo" class="logo-dark default">
            </a>
            <!--Nav Links-->
            <div class="collapse navbar-collapse">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link " href="{{ route('home') }}">Home</a>
                    <a class="nav-link " href="{{ route('home') }}#whymegaone">Why MegaOne</a>
                    <a class="nav-link " href="{{ route('home') }}#appointment">Appointment</a>
                    <a class="nav-link " href="{{ route('home') }}#pateintgallery">Pateint Gallery</a>
                    <a class="nav-link " href="{{ route('home') }}#ourblogs">Our Blogs</a>
                    <a class="nav-link " href="{{ route('home') }}#contactus">Contact us</a>
                </div>
                <div> <span class="open_search"><i class="fas fa-search"></i> </span></div>
                <div class="search_block">
                    <div class="search_box animated wow fadeInUp">
                        <div class="inner">
                            <input type="text" name="search" id="search" class="search_input" autocomplete="off" placeholder="Enter Your Keywords.." />
                            <button class="search_icon glyphicon glyphicon-search"><i class="fas fa-search"></i> </button>
                        </div>
                    </div>
                    <div class="search-overlay"></div>
                </div>
                <!-- search input-->
            </div>
        </div>
        <!--Side Menu Button-->
        <a href="javascript:void(0)" class="parallax-btn sidemenu_btn" id="sidemenu_toggle">
            <div class="animated-wrap sidemenu_btn_inner">
                <div class="animated-element">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </a>

    </nav>

    <!--Side Nav-->
    <div class="side-menu">
        <div class="inner-wrapper">
            <span class="btn-close " id="btn_sideNavClose"></span>
            <nav class="side-nav w-100">

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " href="../index-medical.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../index-medical.html#whymegaone">Why MegaOne</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../index-medical.html#appointment">Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../index-medical.html#pateintgallery">Pateint Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#ourblogs">Our Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('home')}}#contactus">Contact us</a>
                    </li>
                </ul>

            </nav>

            <div class="side-footer text-white w-100">
                <ul class="social-icons-simple">
                    <li class="animated-wrap"><a class="animated-element" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                    <li class="animated-wrap"><a class="animated-element" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                    <li class="animated-wrap"><a class="animated-element" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                </ul>
                <p class="text-white">&copy; 2023 MegaOne. Made With Love by Themesindustry</p>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
    <!-- End side menu -->


</header>
