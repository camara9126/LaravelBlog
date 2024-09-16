<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Le Guide Quotidien</title>
    
    <!-- favicon -->
    <link rel=icon href="{{ asset('assets/img/logo-blog.png') }}" sizes="10x10" type="image/png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>
<body>
        <!-- preloader area start -->
        <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>

    <!-- search popup start-->
    <div class="td-search-popup" id="td-search-popup">
        <form action="{{ route('search.index') }}" method="get" class="search-form">
            <div class="form-group">
                <input type="text" name="search" value="{{ request()->search ?? '' }}" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <!-- header start -->
    <div class="navbar-area">
        <!-- topbar end-->
        <div class="topbar-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-7 align-self-left">
                        <div class="topbar-menu text-md-left text-center">
                            <ul class="align-self-center">
                                <li><a href="{{route('politic')}}"> Politique de Confidentialité et Conditions d’Utilisation </a></li>
                                <!-- <li><a href="#">Advertisment</a></li>
                                <li><a href="#">Member</a></li>
                                <li><a href="#">Sitemap</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-5 mt-2 mt-md-0 text-md-right text-center">
                        <div class="topbar-social">
                            <div class="topbar-date d-none d-lg-inline-block"><i class="fa fa-calendar"></i>
                                {{ \Carbon\Carbon::now()->translatedFormat('l j F Y H:i:s') }}
                            </div>
                            <ul class="social-area social-area-2">
                                <li><a class="facebook-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li>
                                    <a class="youtube-icon" href="https://www.youtube.com/channel/UC7BeQNpcwLNhLuBNsWsDB4A" target="_blank">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                                <li><a class="instagram-icon" href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a class="google-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a href="{{ route('dashboard.index') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        <i style="color:#102950">lg</i>
                                    </a>

                                    <!-- @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a> -->
                                    @endif
                                @endauth
                            </nav>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- topbar end-->

        <!-- adbar end-->
        <div class="adbar-area bg-black d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-5 align-self-center">
                        <div class="logo text-md-left text-center">
                            <a class="main-logo" href="/"><img src="{{asset('assets/img/logo-blog.png')}}" alt="img"></a>
                        </div>
                    </div>
                    <!-- <div class="col-xl-6 col-lg-7 text-md-right text-center">
                        <a href="/" class="adbar-right">
                            <img src="../assets/img/add/1.png" alt="img">
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- adbar end-->

        @include('layouts.navbar')