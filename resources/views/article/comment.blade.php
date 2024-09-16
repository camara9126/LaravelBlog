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
            <div class="col-md-12">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __("Commentaires") }}
                </h2>
            </div>
            
        </div>
        
        <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Commentaires</th>
                                <th scope="col">Articles Commentés</th>
                                <th scope="col">Dates</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comment as $c)
                            <tr>
                                <th scope="row">{{$c->id}}</th>
                                <td>{{$c->content}}</td>
                                <td>
                                    @foreach($article as $art)
                                    @if($art->id == $c->article_id)
                                        {{$art->title}}
                                    @endif
                                    @endforeach
                                </td>
                                <td>{{$c->created_at}}</td>
                                <td>
                                <form action="{{ route('commentaire.destroy', $c) }}" type="button" method="post" onsubmit="return confirm('Supprimer ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger"><img src="img/poubelle.png" width="20" alt=""></button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
