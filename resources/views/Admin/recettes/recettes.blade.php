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
<style>
    @media print {
    .btn-primary{
        display: none;
    }
}
</style>
<body background="">
<section id="basic-datatable">
    <div class="row justify-content-center">
        <div class="col-md-2">
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header" align="center"></h1><strong>{{ ('RECETTES JOURNALIERES') }}</strong></h1></div>
                    <div class="card-body">
                    <table class = "table table-striped table-bordered" id="example">
                        <div class="dt-buttons btn-group">
                            <div>
                                <button id="print" onclick="window.print()" class="btn-primary buttons-print" tabindex="0" style="float: left">
                                    Print
                                </button>
                            </div>
                            <br><br>
                        </div>
                        <br>
                    </div>
                        <thead>
                            <tr> 
                                <td scope = "col" align="center"><strong>Heure</strong></td>
                                <td scope = "col" align="center"><strong>Nom de la Facture</strong></td>
                                <td scope = "col" align="center"><strong>Somme</strong></td>
                                {{-- <td scope = "col"> Total</td> --}}
                            </tr>
                        </thead>
                        <tfoot>
                            <tr> 
                                <td scope = "col" align="center"><strong>Heure</strong></td>
                                <td scope = "col" align="center"><strong>Nom de la Facture</strong></td>
                                <td scope = "col" align="center"><strong>Somme</strong></td>
                                {{-- <td scope = "col"> Total</td> --}}
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($factures as $item => $facture)
                                <tr>
                                    @php
                                        $date = date_format($facture->created_at, 'Y-m-d');
                                        $facture = $facture->whereDate('created_at', '=', $date)->get();
                                        $total = $facture->pluck('total');
                                        
                                    @endphp
                                    <td colspan="4" align="center"><strong> {{ $date }} </strong></td>
                                </tr>
                                
                                @foreach ($facture as $item)
                                    <tr>
                                        <td align="center"> {{date_format($item->created_at, 'H:i:s')}} </td>
                                        <td align="center"> {{$item->nom}} </td>
                                        <td align="center"> {{$item->total}} </td> 
                                    </tr>
                                   
                                @endforeach
                                <tr>
                                    <td colspan="3" align="right" style="padding-right:110px"> <strong>{{ array_sum($total->toArray()) }}</strong></td> 
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
    
@endsection
