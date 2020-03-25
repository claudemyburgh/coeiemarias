@component('mail::message')
# Hi, {{ $name }}

We have recived your email and get back to you as soon as posible.


Thanks,<br>
{{ config('app.name') }}
@endcomponent
