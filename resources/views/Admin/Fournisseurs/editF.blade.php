@extends('layouts.app')


@section('content')

<body background="">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modifier Le Fournisseur<strong>{{$fournisseur->name}}</strong></div>
                <div class="card-body">
                <form action="{{route('Fournisseurs.Fournisseurs.update', $fournisseur->id)}}" method="POST">
                    @csrf  
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name" class="col-md-4 col-form-label">{{ __('Nom') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$fournisseur->name}}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="col-md-4 col-form-label">{{ __('Adresse Mail') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$fournisseur->email}}" required autocomplete="email">
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
                            <input id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{$fournisseur->adresse}}" required autocomplete="adresse">
                                @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="contact" class="col-md-4 col-form-label">{{ __('Contact') }}</label>
                            <input id="" type="" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{$fournisseur->contact}}" required autocomplete="contact">
                                @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                        <div class="col-md-6" align="center">
                            &nbsp;&nbsp;&nbsp;<br>
                            <br><br>
                            <button type="submit" class="btn btn-primary">Modifier les informations</button>
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







