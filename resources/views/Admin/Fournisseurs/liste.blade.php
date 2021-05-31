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
    @livewireStyles
<body background="">
    <div class="row justify-content-center">
        <div class="col-md-2"></div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header" align="center"></h1><strong>{{ ('LISTE DES COMMANDES') }}</strong></h1></div>
                    <div class="card-body">
                        <div class="dt-buttons btn-group">
                    </div>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th scope = "col"> # </th>
                            <th scope = "col"> Fournisseurs </th>
                            <th scope = "col"> Produits </th>
                            <th scope = "col"> Date </th>
                            <th scope = "col"> Statut </th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th scope = "col"> # </th>
                            <th scope = "col"> Fournisseurs </th>
                            <th scope = "col"> Produits </th>
                            <th scope = "col"> Date </th>
                            <th scope = "col"> Statut </th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @livewire('alert-id')
                    </tbody>
                </div>
            </div>
        </div>
    </div>
</body>
@livewireScripts
 {{-- <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Alerte ! ! </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="">
                <label for="pet-select">Choisir le statut : </label>
                <select name="pets" id="pet-select">
                    <option value="dog">En Attente</option>
                    <option value="cat">Annulée</option>
                    <option value="hamster">Livrée</option>
                </select>
                <input type="text" id="int">
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    $("#mode").click(function() {
        $modal = $('#mode').val();
        alert($modal);
        $("#int").val($modal);
    } );
</script> --}}
</html>
@endsection
