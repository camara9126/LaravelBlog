@include('partials.entete')

    <div class="banner-area banner-inner-1 bg-black" id="banner">
        <!-- banner area start -->
        <div class="banner-inner pt-5">
            <div class="container">
                <div class="conatiner-fluid">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/banner/1.png" class="d-block" alt="...">
                        </div>
                            @if($pubs->count() > 0)
                            @foreach($pubs as $p)
                            @if($p->status == 0)
                            <div class="carousel-item">
                                <img src="{{$p->image}}" class="d-block" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <!-- <ul>
                                        <li><a class="tag-base tag-blue" href="#">Tech</a></li>
                                        <li class="date"><i class="fa fa-clock-o"></i>{{$p->created_at}}</li>
                                    </ul> -->
                                    <!-- <h2>{{$p->title}}</h2> -->
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p> -->
                                    <a class="btn btn-blue" href="{{$p->lien}}">Read More</a>
                                </div> 
                                    
                            </div>
                            @endif
                            @endforeach
                            @endif
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                </div>
            </div>
                <!-- <div class="row">
                    <div class="col-lg-6">
                        <div class="thumb after-left-top">
                            <img src="assets/img/banner/1.png" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="banner-details mt-4 mt-lg-0">
                            <div class="post-meta-single">
                                <ul>
                                    <li><a class="tag-base tag-blue" href="#">Tech</a></li>
                                    <li class="date"><i class="fa fa-clock-o"></i>08.22.2020</li>
                                </ul>
                            </div>
                            <h2>ReZoom outage left some people locked out.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <a class="btn btn-blue" href="#">Read More</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- banner area end -->
         <div class="container">
            <div class="row mt-3">
                <div class="col-lg-10 col-sm-10">
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
    </div>

    <!-- Trending Start-->
    <div class="post-area pd-top-50 pd-bottom-50" id="trending">
        <div class="container">
            <div class="row bg-light">
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="section-title">
                        <h6 class="title">Trending News</h6>
                    </div>
                    <div class="post-slider owl-carousel">
                        <div class="item">
                            <div class="trending-post">
                                <div class="single-post-wrap style-overlay">
                                    <div class="thumb">
                                        <img src="assets/img/post/5.png" alt="img">
                                    </div>
                                    <div class="details">
                                        <div class="post-meta-single">
                                            <p><i class="fa fa-clock-o"></i>December 26, 2018</p>
                                        </div>
                                        <h6 class="title"><a href="#">The FAA will test drone </a></h6>
                                    </div>
                                </div>
                                <div class="single-post-wrap style-overlay">
                                    <div class="thumb">
                                        <img src="assets/img/post/6.png" alt="img">
                                    </div>
                                    <div class="details">
                                        <div class="post-meta-single">
                                            <p><i class="fa fa-clock-o"></i>December 26, 2018</p>
                                        </div>
                                        <h6 class="title"><a href="#">Flight schedule and quarantine</a></h6>
                                    </div>
                                </div>
                                <div class="single-post-wrap style-overlay">
                                    <div class="thumb">
                                        <img src="assets/img/post/7.png" alt="img">
                                    </div>
                                    <div class="details">
                                        <div class="post-meta-single">
                                            <p><i class="fa fa-clock-o"></i>December 26, 2018</p>
                                        </div>
                                        <h6 class="title"><a href="#">Indore bags cleanest city</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="trending-post">
                                <div class="single-post-wrap style-overlay">
                                    <div class="thumb">
                                        <img src="assets/img/post/5.png" alt="img">
                                    </div>
                                    <div class="details">
                                        <div class="post-meta-single">
                                            <p><i class="fa fa-clock-o"></i>December 26, 2018</p>
                                        </div>
                                        <h6 class="title"><a href="#">The FAA will test drone </a></h6>
                                    </div>
                                </div>
                                <div class="single-post-wrap style-overlay">
                                    <div class="thumb">
                                        <img src="assets/img/post/6.png" alt="img">
                                    </div>
                                    <div class="details">
                                        <div class="post-meta-single">
                                            <p><i class="fa fa-clock-o"></i>December 26, 2018</p>
                                        </div>
                                        <h6 class="title"><a href="#">Flight schedule and quarantine</a></h6>
                                    </div>
                                </div>
                                <div class="single-post-wrap style-overlay">
                                    <div class="thumb">
                                        <img src="assets/img/post/7.png" alt="img">
                                    </div>
                                    <div class="details">
                                        <div class="post-meta-single">
                                            <p><i class="fa fa-clock-o"></i>December 26, 2018</p>
                                        </div>
                                        <h6 class="title"><a href="#">Indore bags cleanest city</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="section-title">
                        <h6 class="title">Trending News</h6>
                    </div>
                    <div class="post-slider owl-carousel">
                        <div class="item">
                            <div class="trending-post">
                                <div class="single-post-wrap style-overlay">
                                    <div class="thumb">
                                        <img src="assets/img/post/5.png" alt="img">
                                    </div>
                                    <div class="details">
                                        <div class="post-meta-single">
                                            <p><i class="fa fa-clock-o"></i>December 26, 2018</p>
                                        </div>
                                        <h6 class="title"><a href="#">The FAA will test drone </a></h6>
                                    </div>
                                </div>
                                <div class="single-post-wrap style-overlay">
                                    <div class="thumb">
                                        <img src="assets/img/post/6.png" alt="img">
                                    </div>
                                    <div class="details">
                                        <div class="post-meta-single">
                                            <p><i class="fa fa-clock-o"></i>December 26, 2018</p>
                                        </div>
                                        <h6 class="title"><a href="#">Flight schedule and quarantine</a></h6>
                                    </div>
                                </div>
                                <div class="single-post-wrap style-overlay">
                                    <div class="thumb">
                                        <img src="assets/img/post/7.png" alt="img">
                                    </div>
                                    <div class="details">
                                        <div class="post-meta-single">
                                            <p><i class="fa fa-clock-o"></i>December 26, 2018</p>
                                        </div>
                                        <h6 class="title"><a href="#">Indore bags cleanest city</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="trending-post">
                                <div class="single-post-wrap style-overlay">
                                    <div class="thumb">
                                        <img src="assets/img/post/5.png" alt="img">
                                    </div>
                                    <div class="details">
                                        <div class="post-meta-single">
                                            <p><i class="fa fa-clock-o"></i>December 26, 2018</p>
                                        </div>
                                        <h6 class="title"><a href="#">The FAA will test drone </a></h6>
                                    </div>
                                </div>
                                <div class="single-post-wrap style-overlay">
                                    <div class="thumb">
                                        <img src="assets/img/post/6.png" alt="img">
                                    </div>
                                    <div class="details">
                                        <div class="post-meta-single">
                                            <p><i class="fa fa-clock-o"></i>December 26, 2018</p>
                                        </div>
                                        <h6 class="title"><a href="#">Flight schedule and quarantine</a></h6>
                                    </div>
                                </div>
                                <div class="single-post-wrap style-overlay">
                                    <div class="thumb">
                                        <img src="assets/img/post/7.png" alt="img">
                                    </div>
                                    <div class="details">
                                        <div class="post-meta-single">
                                            <p><i class="fa fa-clock-o"></i>December 26, 2018</p>
                                        </div>
                                        <h6 class="title"><a href="#">Indore bags cleanest city</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-6 col-md-6">
                    <div class="section-title">
                        <h6 class="title">Latest News</h6>
                    </div>
                    <div class="post-slider owl-carousel">
                        <div class="item">
                            <div class="service d-flex h-100 pt-2">
                                <div class="service-number mr-4">
                                    <img src="assets/img/post/16.png" alt="img">
                                </div>
                                <div class="service-about">
                                    <!-- <h5>UI/UX Designer</h5> -->
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <div class="service d-flex h-100 pt-2">
                                <div class="service-number mr-4">
                                    <img src="assets/img/post/16.png" alt="img">
                                </div>
                                <div class="service-about">
                                    <!-- <h5>UI/UX Designer dfi vlr  eeriotrgnfnd fkfelkwe</h5> -->
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                                </div>
                            </div>
                            <div class="service d-flex h-100 pt-2">
                                <div class="service-number mr-4">
                                    <img src="assets/img/post/16.png" alt="img">
                                </div>
                                <div class="service-about">
                                    <!-- <h5>UI/UX Designer</h5> -->
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <!-- <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/img/post/list/3.png" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="#">Detecting technologies in airports this year</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/img/post/list/4.png" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="#">The FAA will drone detect-ing in airports this year</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/img/post/list/5.png" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="#">Thailand makes it mand-atory for tourists to stay</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="item">
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/img/post/list/1.png" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="#">Himachal Pradesh rules in order to allow tourists </a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/img/post/list/2.png" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="#">Online registration, booking for Vaishno Devi </a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/img/post/list/3.png" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="#">Detecting technologies in airports this year</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/img/post/list/4.png" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="#">The FAA will drone detect-ing in airports this year</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/img/post/list/5.png" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="#">Thailand makes it mand-atory for tourists to stay</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="section-title">
                        <h6 class="title">What’s new</h6>
                    </div>
                    <div class="post-slider owl-carousel">
                        <div class="item">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="assets/img/post/8.png" alt="img">
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-4 pt-1">
                                        <ul>
                                            <li><a class="tag-base tag-blue" href="#">Tech</a></li>
                                            <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                        </ul>
                                    </div>
                                    <h6 class="title"><a href="#">Uttarakhand’s Hemkund Sahib yatra to start from September 4</a></h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="assets/img/post/8.png" alt="img">
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-4 pt-1">
                                        <ul>
                                            <li><a class="tag-base tag-blue" href="#">Tech</a></li>
                                            <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                        </ul>
                                    </div>
                                    <h6 class="title"><a href="#">Uttarakhand’s Hemkund Sahib yatra to start from September 4</a></h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                        </div>
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
                            <li><a class="youtube" href="#"><i class="fa fa-youtube-play social-icon"></i><span>1,300</span><span>Subscribers</span> <i class="fa fa-plus"></i></a></li>
                            <li><a class="instagram" href="#"><i class="fa fa-instagram social-icon"></i><span>52,400</span><span>Followers</span> <i class="fa fa-plus"></i></a></li>
                            <li><a class="google-plus" href="#"><i class="fa fa-google social-icon"></i><span>19,101</span><span>Subscribers</span> <i class="fa fa-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="add-area">
                        <a href="#"><img class="w-100" src="assets/img/add/6.png" alt="img"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending End-->
    
    <!--Grid Start-->
    <div class="bg-sky pd-top-50 pd-bottom-50" id="grid">
        <div class="container">
            <div class="row">
                @if($articles->count() > 0 )
                @foreach($articles as $art)
                    @if($art->status == 0)
                    <div class="col-lg-3 col-sm-6">
                        <input type="hidden" value="{{ $art->id }}">
                        <div class="single-post-wrap style-overlay">
                            <div class="thumb">
                                <img src="{{ $art->image }}" alt="img"><br>
                                <a class="tag-base tag-purple" href="{{ route('article.view', $art)}}">
                                @foreach($categorie as $cat)
                                @if($cat->id == $art->category_id)
                                    {{$cat->nom}}
                                @endif
                                @endforeach
                                </a><br>
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
                <!-- <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-overlay">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/post/16.png') }}" alt="img">
                            <a class="tag-base tag-green" href="#">Tech</a>
                        </div>
                        <div class="details">
                            <div class="post-meta-single">
                                <p><i class="fa fa-clock-o"></i>08.22.2020</p>
                            </div>
                            <h6 class="title"><a href="#">People Who Eat a Late Dinner May</a></h6>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>  
    </div>
    <!-- Grid End-->

    <!-- Lastest Start-->
    <div class="pd-top-50 pd-bottom-50" id="latest">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-overlay-bg">
                        <div class="thumb">
                            <img src="assets/img/post/9.png" alt="img">
                        </div>
                        <div class="details">
                            <div class="post-meta-single mb-3">
                                <ul>
                                    <li><a class="tag-base tag-blue" href="cat-fashion.html">fashion</a></li>
                                    <li><p><i class="fa fa-clock-o"></i>08.22.2020</p></li>
                                </ul>
                            </div>
                            <h6 class="title"><a href="#">A Comparison of the Sony FE 85mm f/1.4 GM and Sigma</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap">
                        <div class="thumb">
                            <img src="assets/img/post/10.png" alt="img">
                            <p class="btn-date"><i class="fa fa-clock-o"></i>08.22.2020</p>
                        </div>
                        <div class="details">
                            <h6 class="title"><a href="#">Rocket Lab will resume launches no sooner than</a></h6>
                        </div>
                    </div>
                    <div class="single-post-wrap">
                        <div class="thumb">
                            <img src="assets/img/post/11.png" alt="img">
                            <p class="btn-date"><i class="fa fa-clock-o"></i>08.22.2020</p>
                        </div>
                        <div class="details">
                            <h6 class="title"><a href="#">P2P Exchanges in Africa Pivot: Nigeria and Kenya the</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap">
                        <div class="thumb">
                            <img src="assets/img/post/12.png" alt="img">
                            <p class="btn-date"><i class="fa fa-clock-o"></i>08.22.2020</p>
                        </div>
                        <div class="details">
                            <h6 class="title"><a href="#">Bitmex Restricts Ontario Residents as Mandated by</a></h6>
                        </div>
                    </div>
                    <div class="single-post-wrap">
                        <div class="thumb">
                            <img src="assets/img/post/13.png" alt="img">
                            <p class="btn-date"><i class="fa fa-clock-o"></i>08.22.2020</p>
                        </div>
                        <div class="details">
                            <h6 class="title"><a href="#">The Bitcoin Network Now 7 Plants Worth of Power</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="trending-post style-box">
                        <div class="section-title">
                            <h6 class="title">Trending News</h6>
                        </div>
                        <div class="post-slider owl-carousel">
                            <div class="item">
                                <div class="single-post-list-wrap">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="assets/img/post/list/1.png" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="#">Important to rate more liquidity</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post-list-wrap">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="assets/img/post/list/2.png" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="#">Sounds like John got the Josh</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post-list-wrap">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="assets/img/post/list/3.png" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="#">Grayscale's and Bitcoin Trusts</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post-list-wrap">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="assets/img/post/list/4.png" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="#">Sounds like John got the Josh</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post-list-wrap mb-0">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="assets/img/post/list/5.png" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="#">Grayscale's and Bitcoin Trusts</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-post-list-wrap">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="assets/img/post/list/1.png" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="#">Important to rate more liquidity</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post-list-wrap">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="assets/img/post/list/2.png" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="#">Sounds like John got the Josh</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post-list-wrap">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="assets/img/post/list/3.png" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="#">Grayscale's and Bitcoin Trusts</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post-list-wrap">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="assets/img/post/list/4.png" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="#">Sounds like John got the Josh</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post-list-wrap mb-0">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="assets/img/post/list/5.png" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="#">Grayscale's and Bitcoin Trusts</a></h6>
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
    <!--Lastest End-->

      
@include('partials.footer')