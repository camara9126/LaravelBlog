<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Politique de Confidentialité et Conditions d’Utilisation | Le Guide Quotidien</title>
    
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

        <!-- politique de confidentialité -->
        <section>
            <div class="container mt-5">
                
                <!-- <img src="assets/img/blog/about-1.jpg" class="w-70 h-50" alt=""> -->

                <h3 class="text-center mt-0">Politique de Confidentialité</h3>
                <hr><br>
                <h6>Politique de Confidentialité de Le Guide Quotidien</h6>

                <marquee behavior="" direction="left">Dernière mise à jour : <em>04/09/2024</em></marquee>

                <p>
                    Chez Le Guide Quotidien, nous respectons votre vie privée et nous nous engageons à protéger les informations personnelles que vous partagez avec nous.
                    Cette politique de confidentialité décrit comment nous collectons, utilisons, stockons et partageons vos informations personnelles lorsque vous visitez notre site.
                </p>

                <h6>1. Collecte des Informations</h6>

                <p>Nous collectons les informations suivantes lorsque vous utilisez notre site :</p>

                <p><b>Informations fournies par vous :</b> Par exemple, lorsque vous vous inscrivez à notre newsletter, commentez un article, ou nous contactez via notre formulaire de contact, nous pouvons collecter votre nom, adresse e-mail, et tout autre renseignement que vous choisissez de partager.</p>
                <p><b>Données de navigation :</b>Nous collectons automatiquement des informations telles que votre adresse IP, le type de navigateur que vous utilisez, les pages que vous visitez sur notre site, et la durée de votre visite.</p> 
                <h6>2. Utilisation des Informations</h6>

                <b>Nous utilisons vos informations pour les finalités suivantes :</b><br>

                <p>
                    Améliorer votre expérience utilisateur sur notre site ;<br>
                    Communiquer avec vous, notamment pour répondre à vos questions ou vous envoyer des newsletters ;<br>
                Analyser l'utilisation de notre site pour améliorer nos contenus et services.
                </p>

                <h6>3. Partage des Informations</h6>
                <p>Nous ne vendons pas, ne louons pas, et ne partageons pas vos informations personnelles avec des tiers sans votre consentement, sauf si requis par la loi ou pour protéger nos droits.</p>

                <h6>4. Sécurité des Informations</h6>

                <p>Nous prenons des mesures raisonnables pour protéger vos informations personnelles contre la perte, le vol, et l'accès non autorisé. Cependant, nous ne pouvons garantir la sécurité totale des données transmises sur Internet.</p>

                <h6>5. Cookies</h6>

                <p>Notre site utilise des cookies pour améliorer l'expérience utilisateur. Les cookies sont de petits fichiers texte stockés sur votre appareil qui nous aident à analyser l'utilisation du site. Vous pouvez gérer vos préférences en matière de cookies via les paramètres de votre navigateur.</p>

                <h6>6. Vos Droits</h6>

                <p>Vous avez le droit d'accéder, de corriger ou de supprimer les informations personnelles que nous détenons à votre sujet. Pour exercer ces droits, veuillez nous contacter à <a href="mailto:contact@leguidequotidien.com">contact@leguidequotidien.com</a>.</p>

                <h6>7. Modifications de la Politique de Confidentialité</h6>

                <p>Nous pouvons mettre à jour cette politique de confidentialité de temps à autre. Nous vous encourageons à consulter cette page régulièrement pour rester informé des changements.</p>

                <h4>Contactez-nous</h4>

                <p>Pour toute question concernant notre politique de confidentialité, veuillez nous contacter à <a href="mailto:contact@leguidequotidien.com">contact@leguidequotidien.com</a>.</p>
            </div>
        </section><br>

        <!-- Conditions d'utilisation -->
         <section>
            <div class="container">
                <h3 class="text-center">Conditions d'utilisation</h3>
                <hr>

                <h6>Conditions d'Utilisation de Le Guide Quotidien</h6>

                <marquee behavior="" direction="left">Dernière mise à jour : <em>04/09/2024</em></marquee>

                <p>En utilisant le site Le Guide Quotidien, vous acceptez de vous conformer aux présentes conditions d'utilisation.
                     Si vous n'acceptez pas ces conditions, veuillez ne pas utiliser notre site.</p>

                <h6>1. Utilisation du Site</h6>

                <p>Le contenu de ce site est destiné à des fins d'information générale uniquement.
                    Nous nous efforçons de maintenir les informations à jour et exactes, mais nous ne garantissons pas l'exactitude ou la complétude des informations fournies.</p>

                <h6>2. Propriété Intellectuelle</h6>

                <p>Tous les contenus présents sur le site, y compris les textes, images, logos, et autres éléments, sont la propriété de Le Guide Quotidien ou de ses licenciés et sont protégés par les lois sur le droit d'auteur.
                    Toute reproduction, distribution ou utilisation non autorisée des contenus est interdite.</p>

                <h6>3. Comportement des Utilisateurs</h6>

                <b>En utilisant notre site, vous acceptez de :</b><br>

                <p>
                    Ne pas publier de contenu illégal, offensant, diffamatoire, ou contraire aux bonnes mœurs ;
                    Ne pas tenter de contourner la sécurité du site ou de perturber son fonctionnement.
                </p>
                <h6>4. Liens vers des Sites Tiers</h6>

                <p>Notre site peut contenir des liens vers des sites web tiers.
                    Nous ne sommes pas responsables du contenu ou des pratiques de confidentialité de ces sites et vous encourageons à consulter leurs propres politiques.</p>

                <h6>5. Limitation de Responsabilité</h6>

                <p>Le Guide Quotidien ne sera pas tenu responsable des dommages directs, indirects, spéciaux ou consécutifs découlant de l'utilisation ou de l'incapacité à utiliser notre site.</p>

                <h6>6. Modifications des Conditions d’Utilisation</h6>

                <p>Nous nous réservons le droit de modifier ces conditions d'utilisation à tout moment.
                    Les modifications entreront en vigueur dès leur publication sur le site.
                    Nous vous encourageons à consulter régulièrement cette page.</p>

                <h4>Contactez-nous</h4>

                <p>Pour toute question concernant nos conditions d'utilisation, veuillez nous contacter à <a href="mailto:contact@leguidequotidien.com">contact@leguidequotidien.com</a>.</p>



            </div>
         </section>


@include('partials.footer')
        