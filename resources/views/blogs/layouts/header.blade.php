<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Page Title -->
    <title>Blogs</title>
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
<header class="cursor-light">

    <!--Navigation-->
    <nav class="navbar navbar-top-default nav-radius navbar-expand-lg bg-white">
        <div class="container">
            <a href="{{route('home')}}" title="Logo" class="logo scroll">
                <!--Logo Default-->
                <img src="{{\Illuminate\Support\Facades\Storage::url(\App\Models\Header::first()->logo)}}" alt="logo" class="logo-dark default">
            </a>
            <!--Nav Links-->
            <div class="collapse navbar-collapse">
                <div class="navbar-nav ml-auto">
                    @foreach(\App\Models\Menus::orderBy('id','ASC')->get() as $menu)
                    <a class="nav-link " href="{{ route('home') }}#{{$menu->tags}}">{{$menu->{'name_'.App::getLocale()} }}</a>
                    @endforeach
                </div>
                <div> <span class="open_search"><i class="fas fa-search"></i> </span></div>

                <div class="search_block">
                    <div class="search_box animated wow fadeInUp">
                        <div class="inner">
                            <form action="{{route('filter')}}" method="GET">
                            <input type="text" name="search" id="search" class="search_input" autocomplete="off" placeholder="@lang('words.enter_keywords').." />
                            <button class="search_icon glyphicon glyphicon-search"><i class="fas fa-search"></i> </button>
                            </form>
                        </div>
                    </div>
                    <div class="search-overlay"></div>
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
                    @foreach(\App\Models\Menus::orderBy('id','ASC')->get() as $menu)
                       <li class="nav-item"><a class="nav-link " href="{{ route('home') }}#{{$menu->tags}}">{{$menu->{'name_'.App::getLocale()} }}</a></li>
                    @endforeach
                </ul>

            </nav>

            <div class="side-footer text-white w-100">
            <?php $heads = \App\Models\Header::first();?>
                @if(isset($heads))
                <ul class="social-icons-simple">
                    <li class="animated-wrap"><a class="animated-element" href="https://www.facebook.com/{{$heads->facebook}}"><i class="fab fa-facebook-f"></i> </a> </li>
                    <li class="animated-wrap"><a class="animated-element" href="https://twitter.com/{{$heads->instagram}}"><i class="fab fa-instagram"></i> </a> </li>
                    <li class="animated-wrap"><a class="animated-element" href="https://twitter.com/{{$heads->twitter}}"><i class="fab fa-twitter"></i> </a> </li>
                </ul>
                <p class="text-white">{{$heads->site_about}}</p>
                @else
                @endif
            </div>
        </div>
    </div>
    <!-- End side menu -->
</header>
