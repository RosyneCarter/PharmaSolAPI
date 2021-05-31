@extends('layouts.app')

@section('content')

<body background="">
    <br> <br> 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>{{ __('MODIFIER UN PRODUIT') }} &nbsp; </strong>{{$produits->Nom_Commercial}}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('/text.update', $produits->id)}}">
                        @csrf  
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name" class="col-md-8 col-form-label">{{ __('Nom_Commercial') }}</label>
                            
                                <input id="name" type="text" class="form-control @error('Nom_Commercial') is-invalid @enderror" name="Nom_Commercial" value="{{$produits->Nom_Commercial}}" required autocomplete="Nom_Commercial" autofocus>
                                    @error('Nom_Commercial')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="number"  class="col-md-8 col-form-label">{{ __('Numéro_Lot') }}</label>
                                <input id="number" type="number" class="form-control @error('Numéro_Lot') is-invalid @enderror" name="Numéro_Lot" value="{{$produits->Numéro_Lot}}" required autocomplete="new-Numéro_Lot">
                                    @error('Numéro_Lot')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="password" class="col-md-8 col-form-label">{{ __('Prix') }}</label>
                                <select class="form-control" id="multiselect" name="prix" required>
                                    @foreach($prix as $prix)
                                        <option value="{{$prix->id}}">{{$prix->prix}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="text" class="col-md-8 col-form-label">{{ __('Dosage') }}</label>
                                <input id="text" type="text" class="form-control @error('dosage') is-invalid @enderror" name="Dosage" value="{{$produits->Dosage}}" required autocomplete="new-dosage">
                                    @error('dosage')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="password" class="col-md-8 col-form-label">{{ __('Categorie') }}</label>
                                <select class="form-control" id="multiselect" name="categorie" required>
                                    @foreach($categories as $categorie)
                                        <option value="{{$categorie->id}}">{{$categorie->categorie}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="col-md-8 col-form-label">{{ __('Type') }}</label>
                                <select class="form-control" id="multiselect" name="type" required>
                                    @foreach($types as $type)
                                        <option value="{{$type->id}}">{{$type->type}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="text"  class="col-md-8 col-form-label">{{ __('Emplacement') }}</label>
                                <input id="text" type="text" class="form-control @error('Emplacement') is-invalid @enderror" name="Emplacement" value="{{$produits->Emplacement}}" required autocomplete="new-Emplacement">
                                    @error('Emplacement')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="number"  class="col-md-8 col-form-label">{{ __('Quantité') }}</label>
                                <input id="number" type="number" class="form-control @error('quantité') is-invalid @enderror" name="Quantité" value="{{$produits->Quantité}}" required autocomplete="new-quantité">
                                    @error('quantité')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="Date-Exp"  class="col-md-8 col-form-label">{{ __('Date-Exp') }}</label>
                                <input id="date" type="date" class="form-control @error('Date-Exp') is-invalid @enderror" name="date_Exp" value="{{$produits->date_Exp}}" required autocomplete="new-date_Exp">
                                    @error('Date-Exp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="col-md-8 col-form-label">{{ __('Forme') }}</label>
                                <select class="form-control" id="multiselect" name="forme" required>
                                    @foreach($formes as $forme)
                                        <option value="{{$forme->id}}">{{$forme->forme}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br><br>
                        <button type="submit" class="btn btn-primary">Modifier</button>
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
