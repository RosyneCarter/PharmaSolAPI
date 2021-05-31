@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

</head>

<body background="">
    <br> <br> <br> <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="margin-left: 60px">
            <div class="card" style="margin-left: 60px">
                <div class="card-header"><strong>{{ __('LANCER LA COMMANDE') }}</strong></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('welcome.welcome.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="text"  class="col-md-8 col-form-label">{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$fournisseur->email}}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="text"  class="col-md-8 col-form-label">{{ __('Nom') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$fournisseur->name}}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <label for="text" class="col-md-8 col-form-label">{{ __('Message') }}</label>
                                <input id="iconLeft4-1" type="text" class="form-control message mr-1 ml-50" name="message" placeholder="Ecrivez votre message">
                                @error('Message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
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
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                            
                        </section>
                        <br><br>
                        <a href = "" style="float: right;"><button class = "btn btn-primary" title="Ajouter" id="plus"><i class="fa fa-plus"></i></button></a>
                        <a href = "" style="float: right;"><button class = "btn btn-primary" title="Ajouter" id="minus"><i class="fa fa-minus"></i></button></a>
                        <input type="text" name="fournisseurId" value="{{$fournisseur->id}}" hidden>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function() {
        $('select').selectpicker();
    });
</script>
@endsection







