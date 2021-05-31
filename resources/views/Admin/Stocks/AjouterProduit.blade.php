@extends('layouts.app')

@section('content')

<body background="">
    <br> <br> <br> <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>{{ __('AJOUTER UN PRODUIT DANS LE STOCK') }}</strong></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('Stocks.Stocks.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name" class="col-md-4 col-form-label">{{ __('Emplacement') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="date" class="col-md-4 col-form-label">{{ __('Quantité') }}</label>
                                <input id="number" type="number" class="form-control @error('Quantité') is-invalid @enderror" name="number" required autocomplete="new-date">
                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="date" class="col-md-4 col-form-label">{{ __('Numero de lot') }}</label>
                                <input id="number" type="number" class="form-control @error('Numero de lot') is-invalid @enderror" name="number" required autocomplete="new-date">
                                    @error('numero de lot')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="text" class="col-md-4 col-form-label">{{ __('Dosage') }}</label>
                                <input id="text" type="text" class="form-control @error('dosage') is-invalid @enderror" name="text" value="{{ old('dosage') }}" required autocomplete="Dosage" autofocus>
                                @error('dosage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="text"  class="col-md-4 col-form-label">{{ __('Produits') }}</label>
                                <select class="form-control" id="multiselect" name="produit[]" required>
                                    @foreach($produits as $produits)
                                        <option value="{{$produits->Nom_Commercial}}">{{$produits->Nom_Commercial}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br><br>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
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
