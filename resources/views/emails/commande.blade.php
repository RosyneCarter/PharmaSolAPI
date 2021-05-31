<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PharMaSol</title>
</head>
<div align="center">
    <img src="{{asset('dist/img/logo.png')}}" alt=" " class="brand-image img-circle elevation-3" style="opacity: .8">
</div>
<body>
    {{$message}}
<br><br>
    @foreach ($quantite as $key1 => $quant) 
        @foreach ($produit as $key => $prod1) 
            @if($key1 === $key ) 
                <li>
                    {{$prod1}}
                    {{$quant}} 
                </li>
            @endif
        @endforeach
    @endforeach
    <footer>
        @component('mail::footer')
            © {{ date('Y') }} {{ config('', 'PharMaSol') }}. @lang('All rights reserved.')
        @endcomponent
    </footer>
</body>
</html>
