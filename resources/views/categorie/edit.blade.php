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
                    {{ __("Modification Categorie") }}
                </h2>
            </div>
            <div class="col-md-2">
                <a href="{{ route('article.index') }}" class="btn btn-danger">Retour</a>
            </div>
        </div>
        
    </x-slot>

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="row">
                    <div class="col-md-8">
                        <form action="{{ route('categorie.update', $categorie->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="exampleInputName">Nom Categorie</label>
                                <input type="text" class="form-control" name="nom" value="{{$categorie->nom}}" id="exampleInputName" aria-describedby="nameHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputText">Description Categorie</label>
                                <input type="text" class="form-control" name="description" value="{{$categorie->description}}" id="exampleInputText">
                            </div>
                            <!-- <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div> -->
                            <button type="submit" class="btn btn-success">Editer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>