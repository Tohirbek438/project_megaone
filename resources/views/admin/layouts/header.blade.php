<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
          content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('admin/assets/images')}}/favicon.png">
    <!-- Page Title  -->
    <title>@yield('title')</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('admin')}}/assets/css/dashlite.css?ver=3.2.3">
    <link id="skin-default" rel="stylesheet" href="{{asset('admin')}}/assets/css/theme.css?ver=3.2.3">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/assets/css/libs/fontawesome-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        ul {
            list-style-type: none !important;
        }
    </style>
</head>

<body class="nk-body ui-rounder has-sidebar ">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <!-- sidebar @s -->
        <div class="nk-sidebar is-light nk-sidebar-fixed is-light " data-content="sidebarMenu">
            <div class="nk-sidebar-element nk-sidebar-head">
                <div class="nk-sidebar-brand">
                    <a href="{{route('admin.index')}}" class="logo-link nk-sidebar-logo">
                        <?php $logo = \App\Models\Header::first()?>
                        @if(isset($logo))
                        <img style="width: 100px;" class="logo-img mx-4" src="{{\Illuminate\Support\Facades\Storage::url($logo->logo)}}"
                             srcset="{{\Illuminate\Support\Facades\Storage::url($logo->logo)}}" alt="logo">
                        @else
                        @endif
                    </a>
                </div>
                <div class="nk-menu-trigger me-n2">
                    <a href="{{route('admin.index')}}" class="nk-nav-toggle nk-quick-nav-icon d-xl-none"
                       data-target="sidebarMenu"><em
                            class="icon ni ni-arrow-left"></em></a>
                </div>
            </div><!-- .nk-sidebar-element -->
            <div class="nk-sidebar-element">
                <div class="nk-sidebar-content">
                    <div class="nk-sidebar-menu" data-simplebar>
                        <ul class="nk-menu">
                            <li class="nk-menu-item has-sub {{ Route::is('admin.index') ? 'active' : '' }}">
                                <a href="{{route('admin.index')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-bag"></em></span>
                                    <span class="nk-menu-text">Asosiy sahifa</span><span class="nk-menu-badge"></span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">Sahifalar</h6>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                        class="nk-menu-icon"><em class="icon ni ni-template"></em></span><span
                                        class="nk-menu-text">Asosiy ma'lumotlar</span></a>
                                <ul class="nk-menu-sub" style="">
                                    <li class="nk-menu-item"><a href="{{ route('header.index') }}"
                                                                class="nk-menu-link"><span
                                                class="nk-menu-text">Sayt ma'lumotlari</span></a></li>
                                    <li class="nk-menu-item"><a href="{{route('contact.index')}}"
                                                                class="nk-menu-link"><span
                                                class="nk-menu-text">Bog'lanish malumotlar</span></a></li>
                                    <li class="nk-menu-item"><a href="{{route('home.index')}}"
                                                                class="nk-menu-link"><span class="nk-menu-text">Turkum ma'lumotlar</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nk-menu-item has-sub"><a href="#"
                                                                class="nk-menu-link nk-menu-toggle"><span
                                        class="nk-menu-icon"><em class="icon ni ni-files"></em></span><span
                                        class="nk-menu-text">Sahifalar</span></a>
                                <ul class="nk-menu-sub" style="display: none;">
                                    <li class="nk-menu-item"><a href="{{route('page.create')}}"
                                                                class="nk-menu-link"><span
                                                class="nk-menu-text">Sahifa qo'shish</span></a></li>
                                    <li class="nk-menu-item"><a href="{{route('page.index')}}"
                                                                class="nk-menu-link"><span class="nk-menu-text">Sahifalar</span></a>
                                    </li>
                                    <li class="nk-menu-item"><a href="{{route('menu.index')}}"
                                                                class="nk-menu-link"><span
                                                class="nk-menu-text">Menyular</span></a></li>
                                </ul>
                            </li>
                            <li class="nk-menu-item has-sub"><a href="#"
                                                                class="nk-menu-link nk-menu-toggle"><span
                                        class="nk-menu-icon"><em class="icon ni ni-template"></em></span><span
                                        class="nk-menu-text">Bloglar</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="{{ route('blog.index') }}"
                                                                class="nk-menu-link"><span
                                                class="nk-menu-text">Barcha bloglar</span></a></li>
                                    <li class="nk-menu-item"><a href="{{route('blog.create')}}"
                                                                class="nk-menu-link"><span
                                                class="nk-menu-text">Blog qo'shish</span></a></li>
                                    <li class="nk-menu-item"><a href="{{ route('blog-category.index') }}"
                                                                class="nk-menu-link"><span class="nk-menu-text">Blog turkumlar</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                        class="nk-menu-icon"><em class="icon ni ni-img"></em></span><span
                                        class="nk-menu-text">Medialar</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="{{ route('media.index') }}"
                                                                class="nk-menu-link"><span
                                                class="nk-menu-icon"></span><span
                                                class="nk-menu-text">Media</span></a></li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="{{route('media-category.index')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"></span>
                                            <span class="nk-menu-text">Galleriya Turkumlar </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- .nk-menu-item -->

                            <li class="nk-menu-item">
                                <a href="{{route('department.index')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-growth"></em></span>
                                    <span class="nk-menu-text">Klinikal bo'limlar</span>
                                </a>
                            </li>
                            <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                        class="nk-menu-icon"><em class="icon ni ni-img"></em></span><span
                                        class="nk-menu-text">Uchrashuvlar</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="{{ route('form.index') }}"
                                                                class="nk-menu-link"><span
                                                class="nk-menu-icon"></span><span
                                                class="nk-menu-text">Formasi</span></a></li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="{{route('table.index')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"></span>
                                            <span class="nk-menu-text">Uchrashuvlar </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="fas fa-hospital"></em></span>
                                    <span class="nk-menu-text">Kassalikalar haqida</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{route('treatment.index')}}" class="nk-menu-link"><span
                                                class="nk-menu-text">Kassaliklarni davolash</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('information.index')}}" class="nk-menu-link"><span
                                                class="nk-menu-text">Bemorlar soni</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                        </ul><!-- .nk-menu -->
                    </div><!-- .nk-sidebar-menu -->
                </div><!-- .nk-sidebar-content -->
            </div><!-- .nk-sidebar-element -->
        </div>
        <!-- sidebar @e -->
        <!-- wrap @s -->
        <div class="nk-wrap ">
            <!-- main header @s -->
            <div class="nk-header is-light nk-header-fixed is-light">
                <div class="container-xl wide-xl">
                    <div class="nk-header-wrap">
                        <div class="nk-menu-trigger d-xl-none ms-n1 me-3">
                            <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                                    class="icon ni ni-menu"></em></a>
                        </div>

                        <div class="nk-header-menu is-light">
                            <div class="nk-header-menu-inner">
                            </div>
                        </div><!-- .nk-header-menu -->
                        <div class="nk-header-tools">
                            <ul class="nk-quick-nav">
                                {{--Notifications--}}
                                <li class="dropdown notification-dropdown">
                                    <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                        <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                        <div class="dropdown-head">
                                            <span class="sub-title nk-dropdown-title">Bildirishnomalar</span>
                                        </div>
                                        <div class="dropdown-body">
                                            <div class="nk-notification">
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em class="icon icon-circle bg-info-dim ni ni-user"></em>
                                                    </div>
                                                    @foreach(\App\Models\User::orderBy('id','DESC')->take(2)->get() as $user)
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">{{$user->name}}<span> qo'shildi</span>
                                                            </div>
                                                            <div
                                                                class="nk-notification-time">{{$user->created_at->format('d.m.Y')}}</div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em class="icon icon-circle bg-info-dim ni ni-user"></em>
                                                    </div>
                                                    <?php $apppointments = \App\Models\Appointment::orderBy('id','ASC')->take('2')->get()?>
                                                    @if(!$apppointments->isEmpty())
                                                        @foreach(\App\Models\Appointment::orderBy('id','ASC')->take('2')->get() as $appointment) @endforeach
                                                        <div class="nk-notification-content">
                                                            <div
                                                                class="nk-notification-text">{{$appointment->name ?? null}}
                                                                <span>ariza qoldirdi</span>
                                                                <span></span>
                                                            </div>
                                                            <div
                                                                class="nk-notification-time">{{$appointment->created_at->format('m.d.Y') ?? null}}</div>
                                                        </div>
                                                    @else
                                                    @endif
                                                </div>
                                            </div><!-- .nk-notification -->
                                        </div><!-- .nk-dropdown-body -->
                                    </div>
                                </li>
                                <li class="dropdown user-dropdown">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                        <div class="user-toggle">
                                            <div class="user-avatar sm">
                                                @if(!isset(Auth::user()->image))
                                                    <span><i class="fas fa-user"></i></span>
                                                @else
                                                    <img
                                                        src="{{\Illuminate\Support\Facades\Storage::url(Auth::user()->image)}}"
                                                        alt="" srcset="">
                                                @endif
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    @if(!isset(Auth::user()->image))
                                                        <span><i class="fas fa-user"></i></span>
                                                    @else
                                                        <img
                                                            src="{{\Illuminate\Support\Facades\Storage::url(Auth::user()->image)}}"
                                                            alt="" srcset="">
                                                    @endif
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text">{{Auth::user()->name}}</span>
                                                    <span class="sub-text">{{Auth::user()->email}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li><a href="{{route('show.show',Auth::user()->id)}}"><em
                                                            class="icon ni ni-user-alt"></em><span>Profilni ko'rish</span></a>
                                                </li>
                                                <li><a href="{{route('show.show',Auth::user()->id)}}"><em
                                                            class="icon ni ni-setting-alt"></em><span>Profil sozlamari</span></a>
                                                </li>
                                                <li><a class="dark-switch" href="#"><em
                                                            class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">

                                                <form action="{{route('logout')}}" method="POST">
                                                    @csrf
                                                    <li>
                                                        <button style="border:none;color:#939797;background:none;"
                                                                type="submit"><em class="icon ni ni-signout"></em><span>Sign out</span>
                                                        </button>

                                                    </li>
                                                </form>

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- .nk-header-tools -->
                    </div><!-- .nk-header-wrap -->
                </div><!-- .container-fliud -->
            </div>
