@component('mail::message')
# Hi There
{{ $name }} contacted you thourgh the {{ config('app.name') }} website. Here is what they have to say.

## {{ $subject }}
------

{!! nl2br($message) !!}


@endcomponent
