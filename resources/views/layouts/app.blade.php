<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon/user.png') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/style.css', 'resources/css/app.css', 'resources/css/btn.css', 'resources/css/dark-theme.css'])
    @vite(['resources/js/app.js', 'resources/js/script.js'])

</head>

<body id="body-pd" class="body-pd {{ $theme . '-theme' }}">
<div>

    <header class="header shadow-sm body-pd" id="header">
        <div class="header_toggle">
            <i class="fa-solid fa-bars" id="header-toggle"></i>
        </div>

        <div class="d-flex align-items-center">
            <div class="navbar-nav px-3">

                <i id="theme-toggle" class="fa-solid fa-{{ $theme == 'dark' ? 'sun' : 'moon' }}"></i>
            </div>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ ucfirst(Auth::user()->name) }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item ps-0" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa-solid fa-right-from-bracket mx-2"></i>
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </header>


    {{--<x-header/>--}}


    <x-sidebar/>
    <main class="main-content">
        @yield('content')
    </main>
</div>

<script>
    var toggle_icon = document.getElementById('theme-toggle');
    var body = document.getElementsByTagName('body')[0];
    var sun_class = 'fa-sun';
    var moon_class = 'fa-moon';
    var dark_theme_class = 'dark-theme';

    toggle_icon.addEventListener('click', function () {
        if (body.classList.contains(dark_theme_class)) {
            toggle_icon.classList.add(moon_class);
            toggle_icon.classList.remove(sun_class);

            body.classList.remove(dark_theme_class);

            setCookie('theme', 'light');
        } else {
            toggle_icon.classList.add(sun_class);
            toggle_icon.classList.remove(moon_class);

            body.classList.add(dark_theme_class);

            setCookie('theme', 'dark');
        }
    });

    function setCookie(name, value) {
        var d = new Date();
        d.setTime(d.getTime() + (365 * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }
</script>
</body>
</html>
