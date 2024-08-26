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
                <div class="row mt-3 mb-4">
                    <div class="col-md-10">
                        <form action="{{ url('article/'.$article->id.'/commentaire') }}" class="border" method="POST">
                            @csrf
                            <h6><i>Commentaire :</i></h6>
                            <div class="form-group">
                                <textarea name="content" class="form-control" ></textarea>
                                <button type="submit" class="btn btn-outline-success">Commenter</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-5 pt-5">
                <div class="row mt-5">
                    <div class="col-md-12">
                       @foreach($youtube as $link)
                       @if($link->status == 0 && $link->contact == $article->id)
                            <h6>Regarder la vidéo sur notre chaine <i class="fa fa-youtube"></i></h6>
                            <div class="card" style="width: 18rem;">
                                <img src="{{$link->image}}" class="card-img-top" alt="{{$link->title}}">
                                <div class="card-body">
                                    <h5 class="card-title">{{$link->title}}</h5>
                                    <p class="card-text">{{$link->created_at->format('d/m/y')}}</p>
                                    <a href="{{$link->lien}}" target="_blank" class="btn btn-danger d-flex">
                                        Visiter
                                    </a>
                                </div>
                            </div>
                       @endif
                       @endforeach
                    </div>
                </div>
                <div class="row mt-5 pt-5">
                    <div class="col-md-12">
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
                                                    <li><i class="fa fa-clock-o"></i>{{$c->created_at->format('d:m:y')}}</li>
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
        </div>
        <!-- contenu articles & autres categorie  -->

        <!-- Publicités YouTube -->
        <div class="row">
            <div class="col-lg-10">
                <div>
                    <img src="../assets/img/youtube.png" width="80%" alt="youtube">
                </div>
                <div>
                    <h6>
                        Découvrez notre chaîne YouTube, où nous approfondissons les sujets qui vous intéressent le plus ! Si vous aimez les articles que vous lisez ici, vous adorerez nos vidéos riches en contenu, conseils pratiques, et analyses détaillées. <br>
                        Abonnez-vous pour ne rien manquer et profitez d'une nouvelle manière d'explorer nos thématiques avec des vidéos captivantes et informatives. <br>
                        Rejoignez-nous sur YouTube et enrichissez votre expérience en apprenant avec nous au quotidien !
                    </h6>
                </div>
            </div>
        </div>
    </div>  
    <hr>
@include('partials.footer')