@extends('layouts.app')

@section('content')

<body background="">
    <br>
<div class="container">
    <div class="row justify-content-center" style="margin-left: 150px">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>{{ __('AJOUTER UN EMPLOYE') }}</strong></div>
                <div class="card-body">
                    <form method="POST" action="{{route('Home.Home.store') }}">
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
                                <label for="password" class="col-md-8 col-form-label">{{ __('Mot de passe') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="password-confirm" class="col-md-8 col-form-label">{{ __('Confirmer') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                            @can('manage-role')
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="password" class="col-md-8 col-form-label">{{ __('Role') }}</label>
                                    <select class="form-control" id="multiselect" name="role[]" required>
                                        @foreach($roles as $role)
                                            <option value="{{$role->id}}">{{$role->role}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @endcan
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







