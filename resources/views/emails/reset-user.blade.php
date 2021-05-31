@component('mail::message')
# cliquez sur le lien suivant pour changer votre mot de passe...


<a href="{{('http://127.0.0.1:8000/password/create')}}">Cliquez ici</a>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Merci,<br>
{{ config('', 'PharMaSol') }}
@endcomponent

