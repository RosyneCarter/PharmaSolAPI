@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
<img src="" alt=" " class="brand-image img-circle elevation-3" style="opacity: .8"> {{ config('', 'PharMaSol') }}
@endcomponent
@endslot
{{-- Body --}}
    {{ $slot }}
{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} {{ config('', 'PharMaSol') }}. @lang('Tous droits reservés.')
@endcomponent
@endslot
@endcomponent
