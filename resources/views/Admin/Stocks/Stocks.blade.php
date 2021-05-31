@extends('layouts.app')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>PharMaSol</title>
</head>
<body background="">
<section id="basic-datatable">
    <div class="row justify-content-center">
        <div class="col-md-2"></div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header" align="center"></h1><strong>{{ ('STOCKS') }}</strong></h1></div>
                <div class="card-body">
                    <table class = "table table-striped table-bordered" id="example">
                    <thead>
                        <tr>
                        <th scope = "col"> # </th>
                        <th scope = "col">Nom_Commercial</th>
                        <th scope = "col"> Numero_Lot </th>
                        <th scope = "col"> Quantité </th>
                        <th scope = "col"> Emplacement </th>
                    </thead>
                    <tbody>
                    @foreach ($produits as $produit)
                    <tr>
                    <th scope = "row"> {{$produit->id}} </th>
                    <td> {{$produit->Nom_Commercial}} </td>
                    <td> {{$produit->Numéro_Lot}} </td>
                    <td> {{$produit->Quantité}} </td>
                    <td> {{$produit->Emplacement}} </td>
                    @endforeach  
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</body>
</html>
    
@endsection
