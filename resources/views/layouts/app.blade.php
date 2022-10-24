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

<body id="body-pd" class="body-pd">
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

</body>
</html>
