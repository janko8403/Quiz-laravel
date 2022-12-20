@extends('auth.app')

@section('content')

<form method="POST" action="{{ route('register') }}" class="register-form">

    <section class="login-section">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-7">
                    <div class="card-main">

                        <div class="card-header-main">
                            <div class="title">
                                REJESTRACJA NA SPOTKANIE ONLINE <br />
                                <b>5 kwietnia 2021 r.</b><br />
                                <b>godzina 19:30</b>
                            </div>

                            <div class="spacer s3"></div>

                            <div class="title">
                                ,,PREMIUM IDEAS - Spotkanie z pomysłem"<br /><br />
                                <b>Dla zarejestrowanych uczestników mamy wspaniałą niespodziankę – książkę tematycznie związaną ze spotkaniem.</b>
                            </div>
                        </div>

                        <ul class="menu">
                            <li><a class="active" href="{{ url('/register') }}">Rejestracja</a></li>
                            <li><a href="{{ url('/login') }}">Logowanie</a></li>
                        </ul>

                        <div class="card-body-main">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Imię">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus placeholder="Nazwisko">

                                    @error('surname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="company" type="text" class="form-control @error('company') is-invalid @enderror" name="company" value="{{ old('company') }}" autocomplete="company" placeholder="Firma (jeśli dotyczny)">

                                    @error('company')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <input id="nip" type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" autocomplete="nip" placeholder="NIP (jeśli dotyczny)">

                                    @error('nip')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Hasło">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Powtórz hasło">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <p class="small">Informujemy, że administratorem podanych przez Państwa danych osobowych jest BNP Paribas Bank Polska S.A. („Bank”) z siedzibą w Warszawie przy ul. Kasprzaka 2, 01-211 Warszawa, zarejestrowany w rejestrze przedsiębiorców Krajowego Rejestru Sądowego przez Sąd Rejonowy dla m.st. Warszawy w Warszawie, XIII Wydział Gospodarczy Krajowego Rejestru Sądowego, pod nr KRS 0000011571, posiadający NIP 526-10-08-546 oraz kapitał zakładowy w wysokości 147 418 918 zł, w całości wpłacony. Dane przetwarzane są w celu umożliwienia udziału w wydarzeniu. Więcej informacji o zasadach przetwarzania danych osobowych znajduje się na stronie www https://www.bnpparibas.pl/repozytorium/rodo.</p>
                                    <div class="spacer s1"></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="green-bg">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-7">
                    <div class="card-main">
                        <div class="card-header-main">
                            <h2>KSIĄŻKA NIESPODZIANKA</h2>
                            <p class="text-left"><b>Jeżeli chcą Państwo otrzymać od Banku książkę niespodziankę, prosimy o podanie swojego numeru telefonu:</b></p>

                            <div class="row">
                                <div class="col-md-6">
                                    <input style="background: #fff;" id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="phone" placeholder="Telefon">

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="spacer s1"></div>
                            
                            <p class="small text-justify">Podanie numeru telefonu jest niezbędne do ustalenia sposobu wysyłki książki. W tym celu, skontaktuje się z Państwem przedstawiciel spółki MasterBrand sp. z o.o., która w imieniu Banku realizuje wysyłkę książek. </p>
                            
                            <p class="small text-justify">Uwaga: w okresie do 15 maja 2021 r. podjęte zostaną 3 próby kontaktu telefonicznego. W razie braku możliwości skontaktowania się z Państwem w tym czasie, książka nie zostanie do Państwa wysłana.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="login-section-three">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-7">
                    <div class="card-main">
                        <div class="card-header-main">
                            <h3>ZGODY, DZIĘKI KTÓRYM BĘDĄ PAŃSTWO MOGLI BYĆ NA BIEŻĄCO Z ATRAKCYJNYMI PROMOCJAMI I WSZYSTKIMI WYDARZENIAMI ORGANIZOWANYMI PRZEZ BANK BNP PARIBAS</h3>
                            
                            <div class="spacer s2"></div>

                            <div class="checkbox">
                                <p class="small text-justify">*Wyrażam zgodę na przetwarzanie przez Bank moich danych osobowych dla celów komunikacyjnych i marketingowych dotyczących kolejnych wydarzeń online organizowanych przez BNP Paribas Bank Polska S.A. w przyszłości, a także nowych produktów, usług, promocji produktów BNP Paribas Bank Polska S.A.</p>
                                <div class="box-label">
                                    <label class="radio-inline"><input type="radio" value="TAK" name="agree-bank" checked>Tak</label>
                                    <label class="radio-inline"><input type="radio" value="NIE" name="agree-bank">Nie</label>
                                </div>
                            </div>

                            <div class="spacer s4"></div>

                            <div class="checkbox">
                                <p class="small text-justify">*Wyrażam zgodę na przetwarzanie przez Bank moich danych osobowych dla celów komunikacyjnych i marketingowych usług podmiotów wchodzących w skład grupy kapitałowej, do której należy Bank. Szczegółowy wykaz danych dotyczących tej grupy znajduje się na stronie internetowej Banku (www.bnpparibas.pl) oraz w oddziałach Banku.</p>
                                <div class="box-label">
                                    <label class="radio-inline"><input type="radio" value="TAK" name="agree-kom" checked>Tak</label>
                                    <label class="radio-inline"><input type="radio" value="NIE" name="agree-kom">Nie</label>
                                </div>
                            </div>

                            <div class="spacer s4"></div>

                            <div class="checkbox">
                                <p class="small text-justify">*Wyrażam zgodę, zgodnie z ustawą z dnia 18 lipca 2002 r. o świadczeniu usług drogą elektroniczną na otrzymywanie drogą elektroniczną, w tym poprzez wiadomości SMS oraz email, informacji dotyczących nowych produktów, usług, promocji produktów BNP Paribas Bank Polska S.A. oraz usług podmiotów wchodzących w skład grupy kapitałowej, do której należy Bank. Szczegółowy wykaz danych dotyczących tej grupy znajduje się na stronie internetowej Banku (www.bnpparibas.pl) oraz w oddziałach Banku. </p>
                                <div class="box-label">
                                    <label class="radio-inline"><input type="radio" value="TAK" name="agree-sms" checked>Tak</label>
                                    <label class="radio-inline"><input type="radio" value="NIE" name="agree-sms">Nie</label>
                                </div>
                            </div>

                            <div class="spacer s4"></div>

                            <div class="checkbox">
                                <p class="small text-justify">*Wyrażam zgodę na przedstawianie przez Bank drogą telefoniczną informacji dotyczących ofert lub promocji produktów i usług oferowanych przez Bank, zgodnie z ustawą z dnia 16 lipca 2004 r. Prawo telekomunikacyjne. </p>
                                <div class="box-label">
                                    <label class="radio-inline"><input type="radio" value="TAK" name="agree-prom" checked>Tak</label>
                                    <label class="radio-inline"><input type="radio" value="NIE" name="agree-prom">Nie</label>
                                </div>
                            </div>

                            <div class="spacer s3"></div>

                            <p class="small text-left">* Pola obowiązkowe do uzupełnienia</p>

                            <div class="spacer s1"></div>

                            <button type="submit" class="btn btn-submit btn-center">
                                {{ __('Zarejestruj się') }}
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</form>

@endsection
