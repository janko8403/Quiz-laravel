<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('backend/css/app.css') }}" rel="stylesheet">
    <style>
        textarea {
            width: 100%;
        }
    </style>
</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
        <div class="logo">
            <a href="{{ url('admin/dashboard') }}" class="simple-text logo-normal">
                CMS PEPCO
            </a>
        </div>
        <div class="sidebar-wrapper">

            @if (Auth::check() && Auth::user()->hasRole('Admin'))
                <ul class="nav">
                    <li class="nav-item {{ (Request::is('admin/dashboard') ? 'active' : '') }}">
                        <a class="nav-link" href="{{ url('admin/dashboard') }}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-item {{ (Request::is('admin/users', 'admin/users') ? 'active' : '') }}">
                        <a class="nav-link" data-toggle="collapse" href="#users-nav">
                            <i class="material-icons">person</i>
                            <p>U??ytkownicy
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="users-nav">
                            <ul class="nav">
                                <li class="nav-item {{ (Request::is('admin/users') ? 'active' : '') }}">
                                    <a class="nav-link" href="{{ url('admin/users') }}">
                                        <span class="sidebar-mini"><i class="material-icons">people</i></span>
                                        <span class="sidebar-normal"> U??ytkownicy</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item {{ (Request::is('admin/messages') ? 'active' : '') }}">
                        <a class="nav-link" href="{{ url('admin/messages') }}">
                            <i class="material-icons">chat</i>
                            <p>Wiadomo??ci</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#competition-nav">
                            <i class="material-icons">center_focus_strong</i>
                            <p>Konkursy
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="competition-nav">
                            <ul class="nav">

                                <li class="nav-item {{ (Request::is('admin/competition/1') ? 'active' : '') }}">
                                    <a class="nav-link" href="{{ url('admin/competition/1') }}">
                                        <span class="sidebar-mini"><i
                                                class="material-icons">center_focus_weak</i></span>
                                        <span class="sidebar-normal"> Konkurs 1</span>
                                    </a>
                                </li>
                                <li class="nav-item {{ (Request::is('admin/competition/2') ? 'active' : '') }}">
                                    <a class="nav-link" href="{{ url('admin/competition/2') }}">
                                        <span class="sidebar-mini"><i
                                                class="material-icons">center_focus_weak</i></span>
                                        <span class="sidebar-normal"> Konkurs 2 </span>
                                    </a>
                                </li>
                                <li class="nav-item {{ (Request::is('admin/competition/3') ? 'active' : '') }}">
                                    <a class="nav-link" href="{{ url('admin/competition/3') }}">
                                        <span class="sidebar-mini"><i
                                                class="material-icons">center_focus_weak</i></span>
                                        <span class="sidebar-normal"> Konkurs 3</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#language-nav">
                            <i class="material-icons">language</i>
                            <p>J??zyk
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="language-nav">
                            <ul class="nav">
                                <li class="nav-item {{ (Request::is('admin/language') ? 'active' : '') }}">
                                    <a class="nav-link" href="{{ url('admin/language') }}">
                                        <span class="sidebar-mini"><i class="material-icons">language</i></span>
                                        <span class="sidebar-normal"> Wszystkie</span>
                                    </a>
                                </li>
                                <li class="nav-item {{ (Request::is('admin/langman') ? 'active' : '') }}">
                                    <a class="nav-link" href="{{ url('admin/langman') }}">
                                        <span class="sidebar-mini"><i class="material-icons">g_translate</i></span>
                                        <span class="sidebar-normal"> T??umaczenia</span>
                                    </a>
                                </li>


                                <li class="nav-item {{ (Request::is('admin/add-language') ? 'active' : '') }}">
                                    <a class="nav-link" href="{{ url('admin/add-language') }}">
                                        <span class="sidebar-mini"><i class="material-icons">library_add</i></span>
                                        <span class="sidebar-normal"> Dodaj j??zyk</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            @endif
            @if (Auth::check() && Auth::user()->hasRole('Editor'))
                <ul class="nav">
                    <li class="nav-item {{ (Request::is('admin/dashboard') ? 'active' : '') }}">
                        <a class="nav-link" href="{{ url('admin/dashboard') }}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#language-nav">
                            <i class="material-icons">language</i>
                            <p>J??zyk
                                <b class="caret"></b>
                            </p>
                        </a>

                        <div class="collapse" id="language-nav">
                            <ul class="nav">
                                <li class="nav-item {{ (Request::is('admin/language') ? 'active' : '') }}">
                                    <a class="nav-link" href="{{ url('admin/language') }}">
                                        <span class="sidebar-mini"><i class="material-icons">language</i></span>
                                        <span class="sidebar-normal"> Wszystkie</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            @endif

        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand">@yield('title')</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            {{-- <a class="nav-link" href="{{ url('admin/notifications') }}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">notifications</i>

                                @if (Auth::user()->unreadnotifications->count() > 0)
                                    <span class="notification">{{ Auth::user()->unreadnotifications->count() }}</span>
                                 @endif
                            </a> --}}

                            {{-- @if (Auth::user()->unreadnotifications->count() > 0)
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    @foreach(Auth::user()->unreadnotifications as $notification)
                                        <a class="dropdown-item" href="{{ url('admin/notifications') }}">{{ $notification->data['message'] }}</a>
                                    @endforeach
                                </div>
                            @else
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ url('admin/notifications') }}">Brak nowych powiadomie??</a>
                                </div>
                            @endif --}}
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">person</i>
                                <p class="d-lg-none d-md-block">
                                    Account
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                {{-- <a class="dropdown-item" href="{{ url('admin/account') }}">Profil</a> --}}
                                {{-- <a class="dropdown-item" href="{{ url('admin/') }}">Ustawienia</a> --}}
                                <div class="dropdown-divider"></div>
                                @if ( Auth::check())
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        Wyloguj si??
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                @endif
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            @yield('content')
        </div>
    </div>
</div>
<!--   Core JS Files   -->
<script src="{{ asset('backend/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('backend/js/core/popper.min.js') }}"></script>
<script src="{{ asset('backend/js/core/bootstrap-material-design.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<!-- Plugin for the momentJs  -->
<script src="{{ asset('backend/js/plugins/moment.min.js') }}"></script>
<!--  Plugin for Sweet Alert -->
<script src="{{ asset('backend/js/plugins/sweetalert2.js') }}"></script>
<!-- Forms Validations Plugin -->
{{-- <script src="{{ asset('backend/js/plugins/jquery.validate.min.js') }}"></script> --}}
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{ asset('backend/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
<!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
{{-- <script src="{{ asset('backend/js/plugins/bootstrap-selectpicker.js') }}"></script> --}}
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{ asset('backend/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
<!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{ asset('backend/js/plugins/bootstrap-tagsinput.js') }}"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('backend/js/plugins/jasny-bootstrap.min.js') }}"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
{{-- <script src="{{ asset('backend/js/plugins/fullcalendar.min.js') }}"></script> --}}
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
{{-- <script src="{{ asset('backend/js/plugins/jquery-jvectormap.js') }}"></script> --}}
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('backend/js/plugins/nouislider.min.js') }}"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="{{ asset('backend/js/plugins/arrive.min.js') }}"></script>
<!-- Chartist JS -->
<script src="{{ asset('backend/js/plugins/chartist.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('backend/js/plugins/bootstrap-notify.js') }}"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('backend/js/material-dashboard.js?v=2.1.1') }}" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script>
    $(document).ready(function () {
        $().ready(function () {
            $sidebar = $('.sidebar');
            $sidebar_img_container = $sidebar.find('.sidebar-background');
            $full_page = $('.full-page');
            $sidebar_responsive = $('body > .navbar-collapse');
            window_width = $(window).width();
            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();
            if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                    $('.fixed-plugin .dropdown').addClass('open');
                }
            }
            $('.fixed-plugin a').click(function (event) {
                // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });
            $('.fixed-plugin .active-color span').click(function () {
                $full_page_background = $('.full-page-background');
                $(this).siblings().removeClass('active');
                $(this).addClass('active');
                var new_color = $(this).data('color');
                if ($sidebar.length != 0) {
                    $sidebar.attr('data-color', new_color);
                }
                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }
                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data-color', new_color);
                }
            });
            $('.fixed-plugin .background-color .badge').click(function () {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');
                var new_color = $(this).data('background-color');
                if ($sidebar.length != 0) {
                    $sidebar.attr('data-background-color', new_color);
                }
            });
            $('.fixed-plugin .img-holder').click(function () {
                $full_page_background = $('.full-page-background');
                $(this).parent('li').siblings().removeClass('active');
                $(this).parent('li').addClass('active');
                var new_image = $(this).find("img").attr('src');
                if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    $sidebar_img_container.fadeOut('fast', function () {
                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $sidebar_img_container.fadeIn('fast');
                    });
                }
                if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
                    $full_page_background.fadeOut('fast', function () {
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                        $full_page_background.fadeIn('fast');
                    });
                }
                if ($('.switch-sidebar-image input:checked').length == 0) {
                    var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                }
                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                }
            });
            $('.switch-sidebar-image input').change(function () {
                $full_page_background = $('.full-page-background');
                $input = $(this);
                if ($input.is(':checked')) {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar_img_container.fadeIn('fast');
                        $sidebar.attr('data-image', '#');
                    }
                    if ($full_page_background.length != 0) {
                        $full_page_background.fadeIn('fast');
                        $full_page.attr('data-image', '#');
                    }
                    background_image = true;
                } else {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar.removeAttr('data-image');
                        $sidebar_img_container.fadeOut('fast');
                    }
                    if ($full_page_background.length != 0) {
                        $full_page.removeAttr('data-image', '#');
                        $full_page_background.fadeOut('fast');
                    }
                    background_image = false;
                }
            });
            $('.switch-sidebar-mini input').change(function () {
                $body = $('body');
                $input = $(this);
                if (md.misc.sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    md.misc.sidebar_mini_active = false;
                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();
                } else {
                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');
                    setTimeout(function () {
                        $('body').addClass('sidebar-mini');
                        md.misc.sidebar_mini_active = true;
                    }, 300);
                }
                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function () {
                    window.dispatchEvent(new Event('resize'));
                }, 180);
                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function () {
                    clearInterval(simulateWindowResize);
                }, 1000);
            });
        });
    });
</script>

@if(Session::has('message'))
    <script>
        $.notify({
            message: '{{ Session::get('message') }}'
        }, {
            type: '{{ Session::get('type') }}'
        });
    </script>
@endif

<!-- <script src="{{ asset('backend/js/plugins/ckeditor.js') }}"></script>
    <script src="{{ asset('backend/js/plugins/jquery.js') }}"></script>
    <script>
        $('textarea').ckeditor();
    </script> -->

</body>

</html>
