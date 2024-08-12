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
        <div class="row mt-5 pb-4">
            <div class="col-lg-9">
                <sup class="bg-primary text-white">
                    @foreach($categorie as $cat)
                        @if($cat->id == $article->category_id)
                        {{$cat->nom}}
                        @endif
                    @endforeach
                    :</sup><h3 class="">{{$article->title}}</h3>
                <img src="{{ asset($article->image) }}" width="90%" alt="{{$article->title}}">
            </div>
            <div class="col-lg-3 mb-0 pb-0">
                <ul class="border"type="none">
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
        <div class="row">
            <div class="col-md-12">
                <div class="border">{!! $article->content !!}</div>
            </div>
        </div>
        <div class="row d-right mt-5 mb-4">
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