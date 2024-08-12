<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-md-10">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __("Modification Article") }}
                </h2>
            </div>
            <div class="col-md-2">
                <a href="{{ route('article.index') }}" class="btn btn-danger">Annuler </a>
            </div>
        </div>
    </x-slot>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form action="{{ route('article.update', $article->id) }}" method="post" enctype="multipart/form-data" id="update_form">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group text-center">
                                <label for="">Categorie <span class="text-danger">*</span></label>
                                <select name="category_id" id="" class="form-control" required>
                                    <option value="">Veuillez choisir une categorie</option>
                                    @foreach($categorie as $cat)
                                    <option value="{{$cat->id}}">{{strtoupper($cat->nom)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 form-group text-center">
                                <label for="">Auteur <span class="text-danger">*</span></label>
                                <input type="text" class="form-control text-center" value="{{$article->auteur }}" name="auteur" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group text-center">
                                <label for="">Titre<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{$article->title }}" name="title" required>
                            </div>
                            <div class="col-md-6 form-group text-center">
                                <label for="">Image<span class="text-danger">*</span></label>
                                <img src="{{ $article->image }}" alt="" width="100" height="90">
                                <input type="file" class="form-control text-center" value="{{$article->image }}" name="image" required>
                            </div>
                        </div>
                        <div class="row mt-4 mb-5">
                            <div class="col-md-10 form-group text-center">
                                <label for="">Description<span class="text-danger">*</span></label><br>
                                <input type="hidden" class="form-control text-center" id="content" name="content" >
                                    <div id="editeur" >{!! $article->content !!}</div>
                            </div>
                            <div class="col-md-2 mt-5 pt-5">
                                <button type="submit" class="btn btn-outline-success">Editer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        var quill = new Quill('#editeur', {
            theme: 'snow'
        });

        var form = document.getElementById('update_form');
        form.onsubmit = function() {
            var content = document.querySelector('input[name=content]');
            content.value = quill.root.innerHTML;
        };
    </script>
    
</x-app-layout>