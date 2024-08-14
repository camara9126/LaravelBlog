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

        <!-- image & details(auteur-ceation-commentaire ) -->
        <div class="row mt-5 pb-4">
            <div class="col-lg-9 col-md-6">
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
            </div>
            <div class="col-lg-3 mt-5 pt-5">
                <ul class="border bg-sky" type="none">
                    <li><h6 class="">Categorie :</h6><i>
                        @foreach($categorie as $cat)
                        @if($cat->id == $article->category_id)
                        {{$cat->nom}}
                        @endif
                        @endforeach
                    </i></li><br>
                    <li><h6 class="">Auteur :</h6><i>{{$article->auteur}}</i></li><br>
                    <li><h6 class="">Date de création :</h6><i>{{$article->created_at}}</i></li><br>
                    @if($article->commentaire->count() > 0)
                        <li><h6 class="">Commentaire :</h6><i>{{$article->commentaire->count()}}</i></li><br>
                    @endif
                </ul>
            </div>    
        </div>

        <!-- contenu articles & autres categorie  -->
        <div class="row">
            <div class="col-lg-9 col-md-6">
                <div class="">{!! $article->content !!}</div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item border bg-sky">
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
                                            {{strtoupper($c->nom)}}: <br>
                                            {{strtoupper($c->description)}}
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
        <div class="container mt-5 mb-4">
            <div class="col-md-5  border">
                <form action="{{ url('article/'.$article->id.'/commentaire') }}" method="POST">
                    @csrf
                    <h6>Commentaire :</h6>
                    <textarea name="content" class="form-control" ></textarea>
                    <button type="submit" class="btn btn-outline-success">Commenter</button>
                </form>
            </div>
        </div>
    </div>
        
    <hr>
@include('partials.footer')