@extends('layouts.app')

@section('content')

<body background="">
    <br> <br> <br> <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>{{ __('MODIFIER UNE VENTE') }}</strong></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('/recettes.update') }}">
                        @csrf
                        <section  id="elm">
                            <div class="row"  id="elm1">
                                <div class="col-md-6">
                                    <label for="name" class="col-md-8 col-form-label">{{ __('Nom_Commercial') }}</label>
                                        <select class="form-control" id="multiselect" name="Nom_Commercial[]" required>
                                            @foreach($produits as $produit)
                                                <option value="{{$produit->Nom_Commercial}}">{{$produit->Nom_Commercial}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="date" class="col-md-8 col-form-label">{{ __('Quantite') }}</label>
                                    <select class="form-control" id="multiselect" name="Quantite[]" required>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            
                        </section>
                        <br><br>
                        <input type="submit" value="Enregistrer" class="btn btn-primary">
                    <a href = "" style="float: right;"><button class = "btn btn-primary" title="Ajouter" id="plus"><i class="fa fa-plus"></i></button></a>
                    <a href = "" style="float: right;"><button class = "btn btn-primary" title="Ajouter" id="minus"><i class="fa fa-minus"></i></button></a>
            
                </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
