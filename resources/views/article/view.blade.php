<x-app-layout>
    <x-slot name="header">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @elseif(Session::has('danger'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('danger') }}
                </div>
            @endif
        <div class="row">
            <div class="col-md-10">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __("Articles") }}
                </h2>
            </div>
            <div class="col-md-2">
                <a href="{{ route('article.create') }}" class="btn btn-primary">Ajout Article</a>
            </div>
        </div>
        
    </x-slot>
</x-app-layout>
<div class="py-10">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
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
                            <div class="col-md-9">
                                <h3 class="">{{$article->title}}</h3>
                                <img src="{{ asset($article->image) }}" width="90%" alt="{{$article->title}}">
                            </div>
                            <div class="col-md-3 mt-5 pt-5">
                                <ul class="border"type="none">
                                    <li><h6 class="">Categorie :</h6><i>{{$article->categorie}}</i></li><br>
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
            </div>
        </div>
    </div>
</div>