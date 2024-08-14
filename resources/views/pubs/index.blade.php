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
                    {{ __("Pulicité") }}
                </h2>
            </div>
            <div class="col-md-2">
                <a href="{{ route('pub.create') }}" class="btn btn-primary">Ajout Pub</a>
            </div>
        </div>

    <div class="py-10">
        
        <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> -->
                <div class="row bg-white">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Titre</th>
                                    <th scope="col">Lien</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Date Creation</th>
                                    <th scope="col">Statut</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($pubs->count() > 0)
                                @foreach($pubs as $pub)
                                <tr>
                                    <th scope="row">{{ $pub->id }}</th>
                                    <td>
                                        <img src="{{ asset($pub->image) }}" width="200" alt="">
                                    </td>
                                    <td>{{ $pub->title }}</td>
                                    <td>{{ $pub->lien }}</td>
                                    <td>{{ $pub->contact }}</td>
                                    <td>{{ $pub->created_at }}</td>
                                    <td>
                                        @if ($pub->status)
                                            <form action="{{ route('pub.deactivate',['pub' => $pub->id]) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-danger">OFF</button>
                                            </form>
                                        @else
                                            <form action="{{ route('pub.activate',['pub' => $pub->id]) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-success">ON</button>
                                            </form>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('pub.show',['pub' => $pub->id]) }}" class="btn btn-outline-primary"><img src="img/oeil.png" width="20" alt=""></a><br>
                                        <a href="{{ route('pub.edit',['pub' => $pub->id]) }}" class="btn btn-outline-warning"><img src="img/mise-a-jour.png" width="20" alt=""></a>
                                        <form action="{{ route('pub.destroy',['pub' => $pub->id]) }}" type="button" method="post" onsubmit="return confirm('Supprimer ?')">
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
            <!-- </div>
        </div> -->
    </div>
    @include('includes.footer')

