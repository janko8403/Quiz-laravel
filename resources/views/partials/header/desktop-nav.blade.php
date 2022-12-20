<nav class="navbar navbar-expand-md navbar-default fixed-top">
    <div class="container">
        <button id="nav-icon" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
                aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}#about-event" data-href="#about-event">@lang('menu.event')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}#agenda" data-href="#agenda">@lang('menu.agenda')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}#speakers" data-href="#speakers">@lang('menu.speakers')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}#competitions" data-href="#competitions">@lang('menu.competitions')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}#contact" data-href="#contact">@lang('menu.contact')</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-link-pink" href="/quiz">@lang('menu.quiz')</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-link-pink" href="/live-broadcast">@lang('menu.trans')</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-link-logout"
                       href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                document.getElementById('logout-user').submit();">
                    <!-- @lang('menu.logout') -->
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                    </a>
                </li>

                <form id="logout-user" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </ul>
        </div>

        <a class="navbar-brand" href="{{ url('/home') }}"><img class="logo-page" src="/images/logo.svg" alt="pepco"></a>

    </div>

</nav>
