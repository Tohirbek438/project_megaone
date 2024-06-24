<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Themes Industry">
    <!-- description -->
    <meta name="description"
          content="MegaOne is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose studio and portfolio HTML5 template with 8 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords"
          content="Creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, studio, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, studio, masonry, grid, faq">
    <!-- Page Title -->
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('medical')}}/img/favicon.ico">
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
    <style>
        .bg-counter {
            background: url({{asset('medical')}}/img/counter-bg.jpg) no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: center center;
            width: 100%;
        }
    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="90" class="position-relative">
<!-- loader start-->
<div class="loader">
    <div class="indicator">
        <svg width="30px" height="24px">
            <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
            <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
        </svg>
    </div>
</div>
<!-- loader ends-->
<!--Header Start-->
<header class="cursor-light">

    <!--Navigation-->
    <nav class="navbar navbar-top-default nav-radius navbar-expand-lg">
        <div class="container">
            <a href="#home" title="Logo" class="logo scroll">
                <!--Logo Default-->
                <img src="{{\Illuminate\Support\Facades\Storage::url(\App\Models\Header::first()->logo)}}" alt="logo"
                     class="logo-dark default">
            </a>
            <!--Nav Links-->
            <div class="collapse navbar-collapse">
                <div class="navbar-nav ml-auto">
                    @foreach(\App\Models\Menus::orderBy('id','ASC')->get() as $menu)
                        <a class="nav-link scroll" href="#{{$menu->tags}}">{{$menu->{'name_'.App::getLocale()} }}</a>
                    @endforeach
                </div>
                <div><span class="open_search"><i class="fas fa-search"></i> </span></div>

                <div class="search_block">
                    <div class="search_box animated wow fadeInUp">
                        <div class="inner">
                            <form action="{{ route('filter') }}" method="GET">
                                <input type="text" name="search" id="search" class="search_input" autocomplete="off"
                                       placeholder="@lang('words.enter_keywords')"/>
                                <button type="submit" class="search_icon glyphicon glyphicon-search"><i
                                        class="fas fa-search"></i></button>
                            </form>
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
            <span class="btn-close link" id="btn_sideNavClose"></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    @foreach(\App\Models\Menus::orderBy('id','ASC')->get() as $menu)
                        <li class="nav-item">
                            <a class="nav-link scroll"
                               href="#{{$menu->tags}}">{{$menu->{'name_'.App::getLocale() } }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>

            <div class="side-footer text-white w-100">
                <ul class="social-icons-simple row">
                    <li class="d-table"><a class="facebook-text-hvr"
                                           href="https://www.facebook.com/{{$heads->facebook}}"><i
                                class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="d-table"><a class="twitter-text-hvr" href="https://twitter.com/{{$heads->twitter}}"><i
                                class="fab fa-twitter"></i>
                        </a></li>
                    <li class="d-table"><a class="instagram-text-hvr" href="https://twitter.com/{{$heads->instagram}}"><i class="fab fa-instagram"></i>
                        </a></li>
                </ul>
                <p class="text-white">{{\App\Models\Header::first()->site_about}}</p>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
    <!-- End side menu -->
</header>
