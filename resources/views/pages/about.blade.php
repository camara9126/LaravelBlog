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
                    <div class="col-lg-6 col-md-7 align-self-center">
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
      
        <section>
            <div class="container-fluid py-5 my-5">
                <div class="container">
                    <div class="row g-6">
                        <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                            <div class="h-100 position-relative">
                                <img src="assets/img/blog/about-2.jpg" class="img-fluid w-100 rounded" alt="" style="margin-bottom: 25%;">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                            <h1 class="">Apropos de Nous</h1>
                            <h5 class="text-info mt-2 mb-4">Bienvenue chez <b>leguidequotidien</b>, votre partenaire de confiance dans les défis quotidiens.</h5>
                            
                            <h6 class="mb-4">Le Guide Quotidien est un blog dédié à vous offrir des conseils pratiques, des astuces efficaces, et des guides détaillés pour vous accompagner dans tous les aspects de votre vie quotidienne.</h6>
                            
                            <h6 class="mb-4">Que vous soyez à la recherche de solutions pour améliorer votre productivité, de stratégies pour atteindre vos objectifs, ou de conseils pour investir intelligemment, notre blog est là pour vous aider à naviguer avec confiance dans un monde en constante évolution.</h6>
                            
                            <h6 class="mb-4">Nous croyons que chaque jour est une nouvelle opportunité pour apprendre, grandir et réussir. C'est pourquoi nous nous engageons à fournir des articles clairs, concis, et accessibles, conçus pour vous offrir des informations utiles et actionnables. Avec Le Guide Quotidien, vous avez à portée de main les outils nécessaires pour optimiser votre quotidien, que ce soit dans votre vie professionnelle, personnelle, ou financière.<h6>
                            
                            <h6 class="mb-4">Notre objectif est simple : vous aider à devenir la meilleure version de vous-même en vous fournissant les ressources dont vous avez besoin pour surmonter les défis du quotidien. Nous sommes votre partenaire de confiance pour un quotidien plus organisé, plus productif, et plus épanoui.</h6>
                            
                            <h6 class="mb-4">Nous croyons en une approche collaborative et personnalisée. Chaque projet commence par une compréhension approfondie de vos objectifs, de votre marché et de vos défis uniques.</h6>
                            
                            <h6 class="mb-4">Bienvenue dans notre communauté, et merci de faire de Le Guide Quotidien votre source d'inspiration et de savoir au quotidien.</h6><br>
                            
                            <h5>N'oublier pas de vous abonner sur notre chaine 
                                <a href="https://www.youtube.com/channel/UC7BeQNpcwLNhLuBNsWsDB4A" target="_blank">
                                    <b class="text-danger">youtube <i class="fa fa-youtube"></i></b>
                                </a>pour suivre nos videos completes et detaillés.
                                
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
@include('partials.footer')