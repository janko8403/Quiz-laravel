@extends('layouts.app_start')

@section('content')

<div class="row mt-5">
    <div class="col-md-7">
        <img style="height:80%;" class="img-fluid img-center" src="/images/growing.svg" alt="pepco">
    </div>
    <div class="col-md-4 offset-md-1">
    
        <div class="login-form">

            <p>LOG IN</p>

            <p class="small">Log in with your business e-mail address. <br>Select the language in which you want to see the content of the website.</p>

            <form method="POST" action="{{ URL('signup') }}">

                @csrf

                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control @if (Session::has('user_exist')) is-invalid @endif" name="email" value="" required placeholder="E-mail">

                        @if (Session::has('user_exist'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{Session::get('user_exist')}}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">

                        <select class="form-control" id="select-language" name="language" required>
                            <option value="0" class="add-choise">-------</option>
                            @foreach ($languages as $language) 
                            <option value="{{ $language->lng }}">{{ $language->long_lng }}</option>
                            @endforeach
                        </select>

                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-login">
                            {{ __('LOGIN') }}
                        </button>

                        <div class="spacer s1"></div>

                    </div>
                </div>
            </form>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-md-6 offset-md-3">
            
        <h2 class="text-center">CONTACT</h2>
        <p class="text-center">In case of any problems, please let us know at <a href="mailto:conference2021@pepco.eu">conference2021@pepco.eu</a></p>
        <div class="spacer s2"></div>

    </div>
</div>

@endsection