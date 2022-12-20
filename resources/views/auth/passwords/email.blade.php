@extends('auth.app')

@section('content')
<section class="login-section">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card-main">
                <div class="card-header-main">
                    <h2 class="text-center">{{ __('Zresetuj hasło') }}</h2>
                </div>

                <div class="card-body-main">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <button type="submit" class="btn btn-submit btn-center">
                                {{ __('Wyślij link') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
{{-- <section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img class="img-responsive" src="/images/Mateusz-Maciejewski.png" alt="Mateusz Maciejewski">
                            <div class="caption">
                                <h3>Mateusz Maciejewski</h3>
                                <p>Architekt rozwiązań x86 <br> Hewlett Packard Enterprise</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img class="img-responsive" src="/images/Andrzej-Szymczak.png" alt="Andrzej Szymczak">
                            <div class="caption">
                                <h3>Andrzej Szymczak</h3>
                                <p>Architekt rozwiązań <br> DC VMware Inc.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img class="img-responsive" src="/images/Piotr-Konieczny.png" alt="Piotr Konieczny">
                            <div class="caption">
                                <h3>Piotr Konieczny</h3>
                                <p>Chief Information Security Officer, <br> Niebezpiecznik.pl</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section> --}}
@endsection
