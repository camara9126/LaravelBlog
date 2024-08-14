@include('partials.entete')
    <div class="container mb-5">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @elseif(Session::has('danger'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('danger') }}
                </div>
            @endif

    </div>

        <div class="container mt-5">
            <div class="row mb-5 mt-5">
                <div class="col-lg-3 bg-sky col-md-6">
                    <div class="section-title">
                        <h5 class="title">Vos articles par theme</h5>
                    </div>
                    <!-- <div class="post-slider owl-carousel"> -->
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
                                                        <li><i class="fa fa-clock-o"></i>{{$c->created_at->format('d/m/Y')}}</li>
                                                    </ul>
                                                </div>
                                                <h5 class="title">
                                                    <a href="{{ route('categorie.show', ['categorie'=>$c->id]) }}">
                                                        {{strtoupper($c->nom)}}:<br>
                                                        {{strtoupper($c->description)}}
                                                    </a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                    <!-- </div> -->
                </div>
                <div class="col-lg-9 bg-sky col-md-6">
                    <div class="section-title text-center">
                        <h4 class="title">{{strtoupper($categorieshow->nom)}}</h4>
                    </div>
                   <ul class="" type="circle">
                        @if($categorieshow->count() > 0)
                        @foreach($article as $art)
                        @if($categorieshow->id == $art->category_id)
                    
                    <div class="service d-flex h-100 pt-2">
                        <div class="service-number mr-4">
                            <img src="{{asset($art->image)}}" alt="img">
                        </div>
                        <div class="service-about">
                            <h5>
                                <a href="{{route('article.view', $art)}}">{{$art->title}}</a>
                            </h5>
                            <!-- <p>{!!Str::limit($art->content, 200)!!}</p> -->
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @else
                        <p>pas d'article disponible pour ce theme !</p>
                    @endif
                   </ul>
                </div>
            </div>
        </div>
   
@include('partials.footer')