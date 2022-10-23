<header class="header shadow-sm body-pd" id="header">
    <div class="header_toggle">
        <i class="fa-solid fa-bars" id="header-toggle"></i>
    </div>

    <div class="d-flex">
        <i id="theme-toggle" class="icon-{{ $theme == 'dark' ? 'sun' : 'moon' }}"></i>

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


{{--<nav class="">--}}
{{--    <div class="container-fluid">--}}
{{--        --}}{{--        <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--        --}}{{--            {{ config('app.name') }}--}}
{{--        --}}{{--        </a>--}}

{{--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"--}}
{{--                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"--}}
{{--                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}

{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            <!-- Left Side Of Navbar -->--}}
{{--            <ul class="navbar-nav me-auto">--}}

{{--            </ul>--}}

{{--            <!-- Right Side Of Navbar -->--}}
{{--            <ul class="navbar-nav ms-auto">--}}
{{--                <!-- Authentication Links -->--}}

{{--                @guest--}}
{{--                    @if (Route::has('login'))--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}

{{--                    @if (Route::has('register'))--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                @else--}}

{{--                @endguest--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
