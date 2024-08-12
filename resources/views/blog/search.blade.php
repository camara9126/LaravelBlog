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

            @if($resultat->isNotEmpty())
            @foreach($resultat as $res)
                <div class="row mt-5 pb-4">
                    <div class="col-md-9">
                        <sup class="bg-success text-white">
                            @foreach($categorie as $cat)
                            @if($cat->id == $res->category_id)
                                {{$cat->nom}}
                            @endif
                            @endforeach
                        </sup><h3 class="">{{$res->title}}</h3>
                        <img src="{{ asset($res->image) }}" width="80%" alt="{{$res->title}}">
                    </div>
                    <div class="col-md-3 mt-5 pt-5">
                        <ul class="border"type="none">
                            <li><h6 class="">Categorie :</h6><i>
                            @foreach($categorie as $cat)
                            @if($cat->id == $res->category_id)
                                {{$cat->nom}}
                            @endif
                            @endforeach
                            </i></li><br>
                            <li><h6 class="">Auteur :</h6><i>{{$res->auteur}}</i></li><br>
                            <li><h6 class="">Date de création :</h6><i>{{$res->created_at}}</i></li><br>
                            @if($res->commentaire->count() > 0)
                                <li><h6 class="">Commentaire :</h6><i>{{$res->commentaire->count()}}</i></li><br>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="border">{!! $res->content !!}</div>
                    </div>
                </div>
                <div class="row d-right mt-5 mb-4">
                    <div class="col-md-5  border">
                        <form action="{{ url('article/'.$res->id.'/commentaire') }}" method="POST">
                            @csrf
                            <h6>Commentaire :</h6>
                            <textarea name="content" class="form-control" ></textarea>
                            <button type="submit" class="btn btn-outline-success">Commenter</button>
                        </form>
                    </div>
                </div>
            @endforeach
            @else
                <h6 class="text-center mt-4">Aucun résultat trouvé.</h6>
                <p class="text-center"><a href="/" class="btn btn-outline-success">-> Page d'accueil</a></p>
            @endif
    </div>
        
    <hr>
@include('partials.footer')