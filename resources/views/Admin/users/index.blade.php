@extends('layouts.app')


@section('content')
<body background="">
    <div class="row justify-content-center">
        <div class="col-md-2">
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"></h1><strong>{{ ('LISTE DES UTILISATEURS') }}</strong></h1></div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        @if (session('statut'))
                            <div class="alert alert-success">
                                {{session('statut')}}
                            </div>
                        @endif
                    <thead>
                        <tr>
                        <th scope = "col"> # </th>
                        <th scope = "col"> Nom </th>
                        <th scope = "col"> Email </th>
                        <th scope = "col"> Roles </th>
                        <th scope = "col"> Actions </th>
                    </thead>
                    <tfoot>
                        <th scope = "col"> # </th>
                            <th scope = "col"> Nom </th>
                            <th scope = "col"> Email </th>
                            <th scope = "col"> Roles </th>
                            <th scope = "col"> Actions </th> 
                    </tfoot>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                        <th scope = "row"> {{$user->id}} </th>
                        <td> {{$user->name}} </td>
                        <td> {{$user->email}} </td>
                        <td> {{implode(', ', $user->roles()->get()->pluck('role')->toArray())}} </td>
                        @can('manage-user')
                        <td>
                            <a href = "{{route('admin.users.show',$user->id)}}"><button class = "btn btn-warning" title="Vusialiser"><i class="fa fa-eye"></i></button></a>
                            
                            <a href = "{{route('admin.users.edit', $user->id)}}"><button class = "btn btn-success" title="Editer"><i class="fa fa-pencil"></i></button></a>
                        
                        <form action="{{route('admin.users.destroy', $user->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" title="supprimer"><i class="feather icon-trash" aria-hidden="true"></i></button>
                        </form>
                        </td>
                        @endcan
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
