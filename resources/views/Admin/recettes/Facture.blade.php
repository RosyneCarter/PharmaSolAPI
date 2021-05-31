@extends('layouts.app')
@section('content')

<style>
@media print {
    .btn-primary{
        display: none;
    }
}
.form{
    background-image: url('dist/img/logo.png');
}
</style>
@if (strlen($alerte) > 0)
    <div style="text-align: center; background-color:#28a745; color:white;" id="alerte">
        <p>{{$alerte}}</p>
    </div>
@endif

<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <form id="frmFactura">
            <span style="position: absolute; top: 150px; center: 100px; background-color:rgb(18, 126, 235); padding-top: 10px; margin-left: 400px; margin-right:50px; width:700px;">
                <div align="center">
                    <img src="dist/img/logo.png" alt=" " class="brand-image img-circle elevation-3" style="margin-left: 10px; margin-right:50px; width:100px;">
                </div>
            <div class="row">
                <div class="col-md-8" style="margin-left: 10px; margin-right:0px; width:100px;">
                    <label style="margin-left: 0px" for="" class="col-md-4 col-form-label">{{ __('N Facture') }}
                        <p align="center"> {{$facture->nom}} </p>
                    </label>
                </div>
            </div>
            <br>
            <div class="container">
            <table border="5" width="5" cellspacing="3" cellpadding="1" class = "table table-striped table-bordered" id="example">
                <thead style="margin-left: 20px">
                    <tr style="margin-left: 20px">
                        <th >Nom_Commercial</th>
                        <th>Quantité</th>
                        <th>Prix</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody style="margin-left: 20px">
                    @foreach ($produits as $key1 => $id1) 
                        @foreach ($qtes as $key2 => $id2) 
                            @if ($key1 == $key2) 
                                <tr style="margin-left: 20px">
                                    @php
                                        $produit = App\produit::findOrFail($id1);
                                    @endphp
                                    <td>{{$produit->Nom_Commercial}}</td>
                                    <td>{{$id2}}</td>
                                    <td> {{implode(',', $produit->prix()->pluck('prix')->toArray())}} </td>
                                    @php
                                        // $produit = App\produit::findOrFail($produits);
                                        $somme = implode(',', $produit->prix()->pluck('prix')->toArray());
                                    @endphp
                                    <td>{{$id2 * $somme}} </td>
                                </tr>
                            @endif
                        @endforeach
                    @endforeach
                    <tr style="margin-left: 20px">
                        <td>
                            <label id="lbl">Total</label>
                            <td colspan="3" align="center">{{$facture->total}}</td>
                        </td>
                     </tr>
                </tbody>
            </table>
        </div>
            <br>
        </form>
        <span style="position: absolute; top: 50px; left: 700px;">
            <div class="w3-right footer" style="margin-left: 20px">
                <button id="print" onclick="window.print()" class="btn-primary" id="print-btn">Imprimer</button>
            </div>
        </span>
    </span>
        <br>
        <script>
            let alerte = document.getElementById('alerte');
            setTimeout(() => {
                alerte.style.display = 'none';
            }, 20000);
        </script>
@endsection

