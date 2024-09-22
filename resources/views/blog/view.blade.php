@include('partials.entete')

    <div class="container mb-5">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    <h5 class="text-center text-success">{{ Session::get('success') }}</h5>
                </div>
            @elseif(Session::has('danger'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('danger') }}
                </div>
            @endif

        <!-- Nom-Title-Image Start -->
        <div class="row mt-5 pb-4">
            <div class="col-lg-9 col-md-12">
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
        </div>
        <!-- Nom-Title-Image End  -->

        <!-- content et video Start  -->
        <div class="row">
            <div class="col-lg-9 col-md-9 border pt-3">
                {!! $article->content !!}
            </div>
            
                    <div class="col-lg-3 col-md-3 mb-5 pt-5">
                        @foreach($youtube as $link)
                         @if($link->status == 0 && $link->contact == $article->id)
                        <div class="row border">
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
                        </div>
                         @endif
                        @endforeach
                        <div class="row mt-5 pl-2 border">
                            <div>
                                <img src="../assets/img/youtube.png" width="100%" alt="youtube">
                            </div>
                            <div>
                                <em>
                                    Découvrez notre chaîne YouTube, où nous approfondissons les sujets qui vous intéressent le plus ! Si vous aimez les articles que vous lisez ici, vous adorerez nos vidéos riches en contenu, conseils pratiques, et analyses détaillées. <br>
                                    Abonnez-vous pour ne rien manquer et profitez d'une nouvelle manière d'explorer nos thématiques avec des vidéos captivantes et informatives. <br>
                                    Rejoignez-nous sur YouTube et enrichissez votre expérience en apprenant avec nous au quotidien ! <br>
                                    <a href="https://www.youtube.com/channel/channel/UC7BeQNpcwLNhLuBNsWsDB4A" target="_blank" class="btn btn-success text-center d-flex">Visiter</a>
                                </em>
                            </div> 
                        </div>
                    </div>
               
        </div>
        <!-- content et video End  -->  
                 
        <!-- Commentaire Start  -->
        <div class="row mt-3 mb-4">
            <div class="col-md-9 bg-light">
                <h5 class="text-center pt-2">Cette article vous plaisent, merci de Commenter !</h5>
                <form action="{{ url('article/'.$article->id.'/commentaire') }}" class="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name"><h6>Nom :</h6></label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email"><h6>Email :</h6></label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="comment"><h6>Votre Commentaire :</h6></label>
                        <textarea name="content" class="form-control" rows="5" required></textarea>
                    </div>
                        <button type="submit" class="btn btn-outline-success">Envoyer le commentaire</button>
                    </div>
                    
                </form>
            </div>
        </div>
        <!-- Commentaire End  -->

    </div>  
    <hr>
@include('partials.footer')