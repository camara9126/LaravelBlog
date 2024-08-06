@include('partials.entete')

     <!-- banner area end -->
    <!-- banner area start -->
    <div class="banner-area banner-inner-1 bg-black" id="banner">
        <!-- banner area start -->
        <div class="banner-inner pt-5">
            <div class="container">
                <div class="row">
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
                </div>
            </div>
        </div>
        <!-- banner area end -->
        <!-- <div class="container">
            <div class="row">
                @if($articles->count() > 0)
                @foreach($articles as $art)
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-white">
                        <div class="thumb">
                            <img src="{{ $art->image }}" alt="img">
                            <a class="tag-base tag-blue" href="#">{{ $art->categorie }}</a>
                        </div>
                        <div class="details">
                            <h6 class="title"><a href="#">{{ $art->title }}</a></h6>
                            <div class="post-meta-single mt-3">
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>{{ $art->created_at }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-white">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/post/2.png') }}" alt="img">
                            <a class="tag-base tag-orange" href="#">Food</a>
                        </div>
                        <div class="details">
                            <h6 class="title"><a href="#">Rocket Lab will resume launches no sooner than August 27th</a></h6>
                            <div class="post-meta-single mt-3">
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-white">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/post/3.png') }}" alt="img">
                            <a class="tag-base tag-blue" href="#">Tech</a>
                        </div>
                        <div class="details">
                            <h6 class="title"><a href="#">Google Drive flaw may attackers fool you into install malware</a></h6>
                            <div class="post-meta-single mt-3">
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-white">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/post/4.png') }}" alt="img">
                            <a class="tag-base tag-orange" href="#">Food</a>
                        </div>
                        <div class="details">
                            <h6 class="title"><a href="#">TikTok will sue the US over threatened ban</a></h6>
                            <div class="post-meta-single mt-3">
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   -->
    </div>
    <!-- banner area end -->
      <!--Grid Start-->
    <div class="pd-top-80 pd-bottom-50" id="grid">
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
                                <a class="tag-base tag-purple" href="{{ route('article.view', $art)}}">{{$art->categorie}}</a><br>
                            </div>
                            <div class="details">
                                <div class="post-meta-single">
                                    <p><i class="fa fa-clock-o"></i>{{$art->created_at}}</p>
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

@include('partials.footer')