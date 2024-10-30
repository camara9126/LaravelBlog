@include('partials.entete')

    <!-- banner area start -->
    <div class="banner-area banner-inner-1 bg-info" id="banner">
        <div class="banner-inner pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="thumb after-left-top">
                            <img src="assets/img/img_3.jpg" width="100%" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="banner-details mt-4 mt-lg-0">
                            <div class="post-meta-single">
                                <ul>
                                    <li><a class="tag-base tag-blue" href="#">blog</a></li>
                                    <!-- <li class="date"><i class="fa fa-clock-o"></i>08.22.2020</li> -->
                                </ul>
                            </div>
                            <h2>Bienvenue sur Le Guide Quotidien :</h2>
                            <p>Explorez nos rubriques variées et découvrez comment Le Guide Quotidien peut devenir votre allié incontournable pour un quotidien plus simple et plus réussi. </p>
                            <a class="btn btn-blue" href="about">En Savoir Plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end -->
        
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

    <!-- Les plus vues Start -->
    <div class="container bg-info">
        <div class="section-title">
            <h6 class="title">Les Plus Visités</h6>
        </div>
        <div class="row">
            @if($articles->count() > 0 )
            @foreach($recentArticles as $recent)
            @if($recent->click_count >= 3)
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-white pt-2">
                        <div class="thumb">
                            <img src="{{ $recent->image }}" alt="img">
                            <a class="tag-base tag-blue" href="#">Tech</a>
                        </div>
                        <div class="details">
                            <h6 class="title"><a href="{{ route('article.view', $recent)}}">{{ $recent->title }}</a></h6>
                            <div class="post-meta-single mt-3">
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>{{ $recent->created_at }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach
            @endif
        </div>
    </div> 
        <!-- Les plus vues End  -->

    <!-- Trending Start-->
    <div class="post-area pd-top-50 pd-bottom-50" id="trending">
        <div class="container">
            <div class="row bg-light">
                <div class="col-lg-3 col-md-6">
                    <div class="section-title">
                        <h6 class="title">Actu Theme</h6>
                    </div>
                    <div class="post-slider owl-carousel">
                        <div class="item">
                            @foreach($categorie as $c)
                                <div class="single-post-list-wrap">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{asset($c->image)}}" alt="{{$c->nom}}">
                                        </div>
                                        <div class="media-body">
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>{{$c->created_at->format('d:m:Y')}}</li>
                                                    </ul>
                                                </div>
                                                <h5 class="title">
                                                    <a href="{{ route('categorie.show', ['categorie'=>$c->id]) }}">
                                                        {{strtoupper($c->nom)}}:
                                                    </a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="item">
                            @foreach($categorie as $c)
                                <div class="single-post-list-wrap">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{asset($c->image)}}" alt="{{$c->nom}}">
                                        </div>
                                        <div class="media-body">
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>{{$c->created_at->format('d:m:Y')}}</li>
                                                    </ul>
                                                </div>
                                                <h5 class="title">
                                                    <a href="{{ route('categorie.show', ['categorie'=>$c->id]) }}">
                                                        {{strtoupper($c->nom)}}:
                                                    </a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="section-title">
                        <h6 class="title">What’s new</h6>
                    </div>
                    <div class="post-slider owl-carousel">
                        <div class="item">
                            <div class="single-post-wrap">
                                <!-- <div class="thumb"> -->
                                    <a href="https://www.youtube.com/channel/UC7BeQNpcwLNhLuBNsWsDB4A" target="_blank">
                                        <img src="assets/img/youtube.png" width="900" alt="img">
                                    </a>
                                <!-- </div> -->
                                <div class="details mt-3">
                                    <!-- <div class="post-meta-single mb-4 pt-1">
                                        <ul>
                                            <li><a class="tag-base tag-blue" href="#">Tech</a></li>
                                            <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                        </ul>
                                    </div> -->
                                    <h5 class="title text-center">Nous Sommes Désormais Sur You-Tube</h5>
                                    <p> Si vous aimez les articles que vous lisez ici, vous adorerez nos vidéos riches en contenu, conseils pratiques, et analyses détaillées. Abonnez-vous pour ne rien manquer et profitez d'une nouvelle manière d'explorer nos thématiques avec des vidéos captivantes et informatives.</p>
                                    <p> Rejoignez-nous sur YouTube et enrichissez votre expérience en apprenant avec nous au quotidien !</p>
                                </div>
                            </div>
                        </div>
                        @foreach($articles as $a)
                        @if($a->category_id == 4)
                        <div class="item">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="{{$a->image}}" alt="img">
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-4 pt-1">
                                        <ul>
                                            <li>
                                                @foreach($categorie as $cat)
                                                @if($cat->id == $a->category_id)
                                                    <a class="tag-base tag-blue" href="{{ route('categorie.show', ['categorie'=>$cat->id]) }}">
                                                        {{$cat->nom}}
                                                    </a>
                                                @endif
                                                @endforeach
                                            </li>
                                            <li><i class="fa fa-clock-o"></i>{{$a->created_at->format('d:m:y')}}</li>
                                        </ul>
                                    </div>
                                    <h6 class="title"><a href="{{route('article.view',$a)}}">{{$a->title}}</a></h6>
                                    <p>
                                        <a href="{{route('article.view',$a)}}">{!!Str::limit($a->content, 100)!!}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="section-title">
                        <h6 class="title">Join With Us</h6>
                    </div>
                    <div class="social-area-list mb-4">
                        <ul>
                            <li><a class="facebook" href="#"><i class="fa fa-facebook social-icon"></i><span>12,300</span><span>Like</span> <i class="fa fa-plus"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter social-icon"></i><span>12,600</span><span>Followers</span> <i class="fa fa-plus"></i></a></li>
                            <li>
                                <a class="youtube" href="https://www.youtube.com/channel/UC7BeQNpcwLNhLuBNsWsDB4A" target="_blank">
                                    <i class="fa fa-youtube-play social-icon"></i><span>1,300</span><span>Subscribers</span> <i class="fa fa-plus"></i>
                                </a>
                            </li>
                            <li><a class="instagram" href="#"><i class="fa fa-instagram social-icon"></i><span>52,400</span><span>Followers</span> <i class="fa fa-plus"></i></a></li>
                            <li><a class="google-plus" href="#"><i class="fa fa-google social-icon"></i><span>19,101</span><span>Subscribers</span> <i class="fa fa-plus"></i></a></li>
                        </ul>
                    </div>
                    <!-- <div class="add-area">
                        <h6><i class="fa fa-youtube"></i>
                            <a href="https://www.youtube.com/channel/UC7BeQNpcwLNhLuBNsWsDB4A" target="_blank">
                                Visiter notre chaine youtube
                            </a>
                        </h6>
                        <div class="add-area">
                            <a href="https://www.youtube.com/channel/UC7BeQNpcwLNhLuBNsWsDB4A" target="_blank" class="">
                                <img src="assets/img/youtube.png" alt="img">
                            </a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Trending End-->
    
    <!--Categories 2 4 Start -->
    <div class="pd-top-10 bg-sky pd-bottom-10" id="grid">
        <div class="container">
            <div class="section-title text-center">
                <div class="tagcloud text-center">
                        <p class="badge">
                            technologies & Digital - Finance & Investissement
                        </p>
                </div>
            </div>
            <div class="post-slider owl-carousel">
                <div class="item">
                    <div class="row">
                        @if($articles->count() > 0 )
                        @foreach($articles as $art)
                            @if($art->status == 0 && $art->category_id == 2)
                            <div class="col-lg-3 col-sm-6 col-md-6">
                                <input type="hidden" value="{{ $art->id }}">
                                <div class="single-post-wrap style-overlay">
                                    <div class="thumb">
                                        <img src="{{ $art->image }}" alt="img"><br>
                                        
                                    </div>
                                    <div class="details">
                                        <div class="post-meta-single">
                                            <p><i class="fa fa-clock-o"></i>{{$art->created_at->format('d/m/y')}}</p>
                                        </div>
                                        <em class="title mb-0"><a href="{{ route('article.view', $art)}}">{{$art->title}} </a></em>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="row">
                            @if($articles->count() > 0 )
                            @foreach($articles as $art)
                                @if($art->status == 0 && $art->category_id == 4)
                                <div class="col-lg-3 col-sm-6 col-md-6">
                                    <input type="hidden" value="{{ $art->id }}">
                                    <div class="single-post-wrap style-overlay">
                                        <div class="thumb">
                                            <img src="{{ $art->image }}" alt="img"><br>
                                            
                                        </div>
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <p><i class="fa fa-clock-o"></i>{{$art->created_at->format('d/m/y')}}</p>
                                            </div>
                                            <h6 class="title mb-0"><a href="{{ route('article.view', $art)}}">{{$art->title}} </a></h6>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <!-- Categories 2 4 End-->

    <!--Categories 3 9 Start -->
    <div class="pd-top-50 bg-sky pd-bottom-50" id="grid">
        <div class="container">
            <div class="section-title text-center">
                <div class="tagcloud text-center">
                        <p class="badge">
                            Developpement Personnel - Entrepreneuriat
                        </p>
                </div>
            </div>
            <div class="post-slider owl-carousel">
                <div class="item">

                    <div class="row">
                        @if($articles->count() > 0 )
                        @foreach($articles as $art)
                            @if($art->status == 0 && $art->category_id == 3)
                            <div class="col-lg-3 col-sm-6 col-md-6">
                                <input type="hidden" value="{{ $art->id }}">
                                <div class="single-post-wrap style-overlay">
                                    <div class="thumb">
                                        <img src="{{ $art->image }}" alt="img"><br>
                                        
                                    </div>
                                    <div class="details">
                                        <div class="post-meta-single">
                                            <p><i class="fa fa-clock-o"></i>{{$art->created_at->format('d/m/y')}}</p>
                                        </div>
                                        <h6 class="title mb-0"><a href="{{ route('article.view', $art)}}">{{$art->title}} </a></h6>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="row">
                            @if($articles->count() > 0 )
                            @foreach($articles as $art)
                                @if($art->status == 0 && $art->category_id == 8)
                                <div class="col-lg-3 col-sm-6 col-md-6">
                                    <input type="hidden" value="{{ $art->id }}">
                                    <div class="single-post-wrap style-overlay">
                                        <div class="thumb">
                                            <img src="{{ $art->image }}" alt="img">
                                            
                                        </div>
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <p><i class="fa fa-clock-o"></i>{{$art->created_at->format('d/m/y')}}</p>
                                            </div>
                                            <h6 class="title mb-0"><a href="{{ route('article.view', $art)}}">{{$art->title}} </a></h6>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <!-- Categories 3 9 End-->

    <!--Grid Start-->
    <div class="pd-top-80 pd-bottom-50" id="grid">
        <div class="container">
            <div class="row">
                @if($articles->count() > 0 )
                @foreach($articles as $art)
                @if($art->status == 0)
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-overlay">
                        <div class="thumb">
                            <img src="{{$art->image}}" alt="img">
                        </div>
                        <div class="details">
                            <div class="post-meta-single">
                                <p><i class="fa fa-clock-o"></i>{{$art->created_at->format('d:m:y')}}</p>
                            </div>
                            <h6 class="title"><a href="{{ route('article.view', $art)}}">{{$art->title}} </a></h6>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                @endif
               
            </div>
        </div>  
    </div>
    <!-- Grid End-->

    <!-- All Categories  Start-->
    <div class="pd-top-50 pd-bottom-50" id="latest">
        <div class="container bg-sky">
            <div class="section-title text-center">
                <h2 class="title">Articles Disponibles</h2>
            </div>
            <div class="container bg-info mb-5">
                <div class="row pt-5">
                    @if($articles->count() > 0 )
                    @foreach($articles as $art)
                    @if($art->status == 0)
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-post-wrap style-white">
                            <div class="thumball">
                                <img src="{{$art->image}}" alt="img">
                                <a class="tag-base tag-blue" href="#">
                                    @foreach($categorie as $cat)
                                    @if($cat->id == $art->category_id)
                                        {{$cat->nom}}
                                    @endif
                                    @endforeach
                                </a>
                            </div>
                            <div class="details">
                                <h6 class="title"><a href="{{ route('article.view', $art->slug)}}">{{$art->title}}</a></h6>
                                <div class="post-meta-single">
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i>{{$art->created_at->format('d:m:y')}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- All Categories End-->

    <!-- Testimonial Start -->
    <section id="temoin">
            <div class="container-fluid testimonial py-5 mb-2">
                <div class="container">
                    <div class="text-center mx-auto pb-2 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                        <h5 class="text-primary">Nos Temoignages</h5>
                        <h1>Nos Clients Disent !</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="post-slider owl-carousel " data-wow-delay=".5s">
                                <div class="item p-2">
                                    <div class="row">
                                        @foreach($comment as $com)
                                        <div class="col-lg-4 mb-3">
                                            <div class="single-post-list-wrap">
                                                <div class="media">
                                                    <div class="media-body border-top">
                                                        <h4 class="text-secondary">{{$com->name}} </h4>
                                                        
                                                        <p class="m-0"><sup>Article:</sup>
                                                            @foreach($articles as $a)
                                                            @if($a->id == $com->article_id)
                                                                {{$a->title}}
                                                            @endif
                                                            @endforeach
                                                            <p class="mb-0 pt-3 ">{{$com->content}}</p>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="col-lg-4">
                                            <div class="single-post-list-wrap">
                                                <div class="media">
                                                    <div class="media-body border-top">
                                                        <h4 class="text-secondary">nom </h4>
                                                        <p class="m-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                                                        <p class="mb-0 pt-3">Profession</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="single-post-list-wrap">
                                                <div class="media">
                                                    <div class="media-body border-top">
                                                        <h4 class="text-secondary">Client </h4>
                                                        <p class="m-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                                                        <p class="mb-0 pt-3">Profession</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item p-2">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="single-post-list-wrap">
                                                <div class="media">
                                                    <div class="media-body border-top">
                                                        <h4 class="text-secondary">Client </h4>
                                                        <p class="m-0 pb-3">Profession</p>
                                                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="single-post-list-wrap">
                                                <div class="media">
                                                    <div class="media-body border-top">
                                                        <h4 class="text-secondary">Client </h4>
                                                        <p class="m-0 pb-3">Profession</p>
                                                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="single-post-list-wrap">
                                                <div class="media">
                                                    <div class="media-body border-top">
                                                        <h4 class="text-secondary">Client </h4>
                                                        <p class="m-0 pb-3">Profession</p>
                                                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
            

        <!-- Testimonial End -->
      
@include('partials.footer')