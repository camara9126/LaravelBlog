@include('includes.header')

        <div class="row">
            <div class="col-md-10">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __("Nouvelle publication") }}
                </h2>
            </div>
            <div class="col-md-2">
                <a href="{{ route('pub.index') }}" class="btn btn-danger">Annuler</a>
            </div>
        </div>
        
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <form action="{{ route('pub.store') }}" method="post" enctype="multipart/form-data" id="create_form">
                        @csrf
                            <div class="row">
                                <div class="col-md-6 form-group text-center">
                                    <label for="">Titre <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control text-center" value="" name="title" required>
                                </div>
                                <div class="col-md-6 form-group text-center">
                                    <label for="">Lien <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control text-center" value="" name="lien" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group text-center">
                                    <label for="">Contact<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="" name="contact" required>
                                </div>
                                <div class="col-md-6 form-group text-center">
                                    <label for="">Image<span class="text-danger">*</span></label>
                                    <input type="file" class="form-control text-center" value="" name="image" required>
                                </div>
                            </div>
                            <div class="row">
                                <button type="submit" class="btn btn-outline-success">Publier</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
@include('includes.footer')
       
           