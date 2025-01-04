@include('partials.entete')

    <!-- banner area start -->
    <div class="banner-area banner-inner-1 bg-black" id="banner">
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
                <hr class="bg-white">
                <!-- Les plus visité Start -->
                <div class="container">
                    <!-- <div class="section-title"> -->
                        <h6 class="title text-white">Les Plus Visités</h6>
                    <!-- </div>  -->
                    <div class="row mb-0">
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
                <!-- Les plus visité End  -->
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

    

    <!-- Trending Start-->
    <div class="post-area pd-top-50 pd-bottom-50" id="trending">
        <div class="container">
            <div class="row bg-light">
                <div class="col-lg-2 col-md-2"></div>
                
                <div class="col-lg-8 col-md-8">
                    <div class="section-title">
                        <h6 class="title">What’s new</h6>
                    </div>
                    <div class="post-slider owl-carousel">
                        <div class="item">
                            <div class="single-post-wrap">
                                <img src="assets/img/blog-3.jpg" width="50" height="400" alt="img">
                                <div class="details mt-3">
                                    
                                    <h5 class="title text-center">Vous Accompagner dans Vos Défis ! 🌟</h5>
                                    <p> Vous avez un projet en tête ou des défis à relever dans votre vie professionnelle ? Notre équipe est là pour vous écouter et vous guider avec des conseils personnalisés.</p>
                                    <p> Que ce soit pour atteindre vos objectifs ou surmonter des obstacles, nous sommes là pour vous aider.</p>
                                    <h5>N'attendez plus !</h5>
                                    <p>Remplissez notre formulaire de contact, et prenons ensemble les premières étapes vers votre réussite.</p>
                                    <button class="btn btn-success text-white"><a href="{{route('contact.index')}}">Obtenez de l'Aide Maintenant</a></button>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-post-wrap">
                                <img src="assets/img/blog-1.jpg" width="50" height="400" alt="img">
                                <div class="details mt-3">
                                    
                                    <h5 class="title text-center">Vous Accompagner dans Vos Défis ! 🌟</h5>
                                    <p> Vous avez un projet en tête ou des défis à relever dans votre vie professionnelle ? Notre équipe est là pour vous écouter et vous guider avec des conseils personnalisés.</p>
                                    <p> Que ce soit pour atteindre vos objectifs ou surmonter des obstacles, nous sommes là pour vous aider.</p>
                                    <h5>N'attendez plus !</h5>
                                    <p>Remplissez notre formulaire de contact, et prenons ensemble les premières étapes vers votre réussite.</p>
                                    <button class="btn btn-success text-white"><a href="{{route('contact.index')}}">Obtenez de l'Aide Maintenant</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2"></div>
                
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