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
            <!-- categories list  -->
            <div class="container">
                <div class="row mt-3 mb-5">
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
            <!-- categories list  -->

            
                    <div class="row bg-sky">
                        <div class="col-lg-9 col-md-6">
                            @if($resultat->isNotEmpty())
                            @foreach($resultat as $res)
                                @if($res->count() == 1)
                                    <div class="row">
                                        <div class="col-md-12">
                                            <sup><h5 style="text-transform:uppercase;" class="bg-primary text-center text-warning">
                                                @foreach($categorie as $cat)
                                                    @if($cat->id == $article->category_id)
                                                    {{$cat->nom}}
                                                    @endif
                                                @endforeach
                                            :</h5></sup>
                                            <h3 class="">{{$article->title}}</h3>
                                            <div class="view">
                                                <img src="{{ asset($article->image) }}" alt="{{$article->title}}">
                                            </div>
                                            <div class="border pt-3">{!! $article->content !!}</div>
                                        </div>
                                    </div>                                    
                                @elseif($res->count() >= 2)
                                    <div class="row">
                                        <div class="col-lg-12 bg-sky col-md-6">
                                            <ul class="" type="circle">
                                                <div class="service d-flex h-100 pt-2">
                                                    <div class="service-numbers mr-4">
                                                        <img src="{{asset($res->image)}}" alt="img">
                                                    </div>
                                                    <div class="service-about">
                                                        <h5>
                                                            <a href="{{route('article.view', $res)}}">{{$res->title}}</a>
                                                        </h5>
                                                        <p>
                                                            <a href="{{route('article.view', $res)}}">{!!Str::limit($res->content, 120)!!}</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                @else
                                <div class="row">
                                    <div class="col-lg-12 bg-sky col-md-12">
                                        <h5>Aucune articles trouvé !</h5>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                            @endif
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="item border">
                                @foreach($categorie as $c)
                                <div class="single-post-list-wrap">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{$c->image}}" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>{{$c->created_at}}</li>
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
                    
                   
                         
              
    </div>
        
    <hr>
@include('partials.footer')