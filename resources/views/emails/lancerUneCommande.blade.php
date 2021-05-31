@component('mail::message')
# Introduction
                           
@foreach ($produit as $key => $prod) 
    @foreach ($quantite as $key1 => $quant) 
        @if($key == $key1 ) 
            
            {{$prod}}-{{$quant}}
            
        @endif
        
    @endforeach
@endforeach

{{$message}}




Merci,<br>
{{ config('', 'PharMaSol') }}
@endcomponent
