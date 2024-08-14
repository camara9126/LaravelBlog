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
                    {{ __("Categorie") }}
                </h2>
            </div>
            <div class="col-md-2">
                <a href="{{ route('categorie.create') }}" class="btn btn-primary">Ajout Categorie</a>
            </div>
        </div>

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="row">
                    <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($categorie->count() > 0)
                            @foreach($categorie as $cat)
                            <tr>
                            <th scope="row">{{$cat->id}}</th>
                            <td>
                                <img src="{{asset($cat->image)}}" width="200" alt="">
                            </td>
                            <td>{{$cat->nom}}</td>
                            <td>{{$cat->description}}</td>
                            <td>
                                <a href="{{ route('categorie.edit',['categorie'=>$cat->id]) }}" class="btn btn-warning"><img src="img/mise-a-jour.png" width="20" alt=""></a>
                                <form action="{{ route('categorie.destroy',['categorie'=>$cat->id]) }}" type="button" method="POST" onsubmit="return confirm('Supprimer ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger"><img src="img/poubelle.png" width="20" alt=""></button>
                                </form>
                                    
                            </td>
                            </tr>
                            @endforeach
                            @endif  
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@include('includes.footer')
