<div class="slide-nav">
    <ul class="mobile-nav">
        <li>
            <a class="link-mobile" href="{{route('home')}}#about-event" data-href="about-event">@lang('menu.event')</a>
        </li>
        <li>
            <a class="link-mobile" href="{{route('home')}}#agenda" data-href="agenda">@lang('menu.agenda')</a>
        </li>
        <li>
            <a class="link-mobile" href="{{route('home')}}#speakers" data-href="speakers">@lang('menu.speakers')</a>
        </li>
        <li>
            <a class="link-mobile" href="{{route('home')}}#competitions" data-href="competitions">@lang('menu.competitions')</a>
        </li>
        <li>
            <a class="link-mobile" href="{{route('home')}}#contact" data-href="contact">@lang('menu.contact')</a>
        </li>
        <li>
            <a class="link-mobile" href="/quiz">@lang('menu.quiz')</a>
        </li>
        <li>
            <a class="link-mobile" href="/live-broadcast" data-href="competitions">@lang('menu.trans')</a>
        </li>
        <li>
            <a
                href="{{ route('logout') }}"
                onclick="event.preventDefault();
                        document.getElementById('logout-user').submit();">
                @lang('menu.logout')
            </a>
        </li>

        <form id="logout-user" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

    </ul>

</div>
