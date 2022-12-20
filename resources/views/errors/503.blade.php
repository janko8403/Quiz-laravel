@extends('errors.layout.app')

@section('content')
<div class="spacer s4"></div>
<div class="spacer s4"></div>
<p class="text-center">error</p>
<h1 class="text-center">503</h1>
<a style="display:block;" class="text-center" href="{{ url('/') }}">Back to home page</a>
@endsection