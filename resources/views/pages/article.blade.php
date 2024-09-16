<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articles Disponibles | Le Guide Quotidien</title>
    
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

    <!-- Theme list  -->
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-12 col-sm-12">
                <div class="widget widget_tag_cloud">
                    <h5 class="widget-title text-center">THEMES</h5>
                    <div class="tagcloud text-center">
                        @if($categorie->count() > 0)
                        @foreach($categorie as $cat)                           
                        <a href="{{route('categorie.show',['categorie'=>$cat->id]) }}" class="text-info">{{$cat->nom}}</a>
                        @endforeach
                        @endif
                        <!-- <a href="#">Video</a>
                        <a href="#">App</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Theme list  -->

    <!-- tous les articles -->
    <main class="mb-3">
        <section class="articles-section">
            <h3>Nos Articles</h3>
            <div class="articles-container">
                @if($articles->count() > 0 )
                @foreach($articles as $art)
                @if($art->status == 0)
                <article class="article-card">

                    <div class="single-post-wrap style-overlay">
                        <div class="thumb">
                        <a class="tag-base tag-blue" href="#">
                            @foreach($categorie as $cat)
                            @if($cat->id == $art->category_id)
                                {{$cat->nom}}
                            @endif
                            @endforeach
                        </a>
                            <img src="{{$art->image}}" alt="">
                        </div>
                    </div>
                    <div class="details">
                        <h6>{{$art->title}}</h6>
                        <p>{!!Str::limit($art->content, 70)!!}</p>
                        <a href="{{route('article.view', $art)}}" class="btn btn-primary">Lire la suite</a>
                    </div>
                </article>
                @endif
                @endforeach
                @endif
            </div>
        </section>
    </main>

     <!-- Publicités YouTube -->
      <div class="container">
        <div class="row">
            <div class="col-lg-10 col-sm-6 col-md-10">
                <div>
                    <img src="../assets/img/youtube.png" width="50%" class="text-center" alt="youtube">
                </div>
                <div>
                    <em>
                        Découvrez notre chaîne YouTube, où nous approfondissons les sujets qui vous intéressent le plus ! Si vous aimez les articles que vous lisez ici, vous adorerez nos vidéos riches en contenu, conseils pratiques, et analyses détaillées. <br>
                        Abonnez-vous pour ne rien manquer et profitez d'une nouvelle manière d'explorer nos thématiques avec des vidéos captivantes et informatives. <br>
                        Rejoignez-nous sur YouTube et enrichissez votre expérience en apprenant avec nous au quotidien !
                    </em>
                </div>
            </div>
        </div>
      </div>
        
    <hr>

@include('partials.footer')