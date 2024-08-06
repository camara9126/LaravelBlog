<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-md-10">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __("Commentaires") }}
                </h2>
            </div>
            <div class="col-md-2">
                <a href="{{ route('article.index') }}" class="btn btn-danger">Retour </a>
            </div>
        </div>
        
    </x-slot>   
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Commentaire</th>
                                <th scope="col">ID_Article</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comment as $c)
                            <tr>
                                <th scope="row">{{$c->id}}</th>
                                <td>{{$c->content}}</td>
                                <td>{{$c->article_id}}</td>
                                <td>{{$c->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>