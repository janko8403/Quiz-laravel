@component('mail::message')

<h3 style="text-align:left">Mail ze strony conference2021pepco.eu</h3>

<p><strong>Imię:</strong> {!! $name !!}</p>
<p><strong>Email:</strong> {!! $email !!}</p>
<p><strong>Treść pytania:</strong> {!! $msg !!}</p>

@endcomponent