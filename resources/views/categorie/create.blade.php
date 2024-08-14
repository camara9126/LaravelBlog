@include('includes.header')

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
                    {{ __("Ajout Categorie") }}
                </h2>
            </div>
            <div class="col-md-2">
                <a href="{{ route('categorie.index') }}" class="btn btn-danger">Retour</a>
            </div>
        </div>
        

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('categorie.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName">Nom Categorie</label>
                                <input type="text" class="form-control" name="nom" id="exampleInputName" aria-describedby="nameHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputText">Description Categorie</label>
                                <textarea name="description" class="form-control" id=""></textarea>
                            </div>
                            <div class="form-group">
                                <label class="exampleInputText">Image Categorie</label>
                                <input type="file" name="image" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
