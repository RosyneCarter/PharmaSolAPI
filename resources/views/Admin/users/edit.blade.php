@extends('layouts.app')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body background="">
<style>
   .upload {
        cursor: pointer;
        background-color: blue;
        color: #ffffff;
        padding: 10px 20px;
      }
      #upload {
        opacity: 0;
        position: absolute;
        z-index: -1;
      }       
</style>
</body>
</html>


<body background="{{asset('dist/img/photo8.png')}}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Modifier L'utilisateur</strong><strong>{{$user->name}}</strong></div>
                <div class="card-body">
                <form action="{{route('admin.users.update', $user)}}" method="POST">
                    @csrf  
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name" class="col-md-4 col-form-label">{{ __('Nom') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $user->name }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="col-md-4 col-form-label">{{ __('Adresse Mail') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $user->email}}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="text"  class="col-md-4 col-form-label">{{ __('Role') }}</label>
                            <select class="form-control" id="multiselect" name="role[]" required>
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->role}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="col-md-4 col-form-label">{{ __('select fichier') }}</label><br>
                            <label for="upload" class="upload">Upload a file</label>
                            <input  class="input-file-container bg-primary" type="file" name="photo" id="upload" />
                            
                       </div>
                    </div>
                <br><br>
                    <button type="submit" class="btn btn-primary">Modifier les informations</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div> 
</body>
@endsection







