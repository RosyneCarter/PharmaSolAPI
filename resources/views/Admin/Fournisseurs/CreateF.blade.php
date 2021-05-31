@extends('layouts.app')

@section('content')

<body background="">
    <br> <br> <br> <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>{{ __('AJOUTER UN FOURNISSEUR') }}</strong></div>
                <div class="card-body">
                    <form method="POST" action="{{route('Fournisseurs.Fournisseurs.store')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                            <label for="name" class="col-md-8 col-form-label">{{ __('Nom') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="col-md-8 col-form-label">{{ __('Adresse Mail') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="adresse" class="col-md-4 col-form-label">{{ __('Adresse') }}</label>
                                <input id="adresse" type="text" class="form-control @error('Adresse') is-invalid @enderror" name="adresse" required autocomplete="new-adresse">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="number" class="col-md-8 col-form-label">{{ __('Contact') }}</label>
                                    <input id="number" type="number" class="form-control" name="contact" required autocomplete="new-contact">
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







