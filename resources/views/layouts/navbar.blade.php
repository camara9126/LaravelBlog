<!-- navbar start -->
<nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <div class="logo d-lg-none d-block">
                        <a class="main-logo" href="/"><img src="assets/img/logo-blog.png" alt="img"></a>
                    </div>
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#nextpage_main_menu" 
                    aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <a class="search header-search" href="#"><i class="fa fa-search"></i></a>
                </div>
                <div class="collapse navbar-collapse" id="nextpage_main_menu">
                    <ul class="navbar-nav menu-open">
                        <li class="current-menu-item">
                            <a href="/" class="text-warning">Accueil</a>
                        </li>  
                        <li class="current-menu-item">
                            <a href="{{route('about')}}" class="">A propos</a>
                        </li>             
                        <!-- <li class="current-menu-item text-white dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <a href="">Categories</a>
                        </li> -->
                    </ul>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <form action="{{ route('search.index') }}" method="get">
                        <div class="menu-search-inner">
                            <input type="text" name="search" value="{{ request()->search ?? '' }}" placeholder="rechercer ...">
                            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end -->