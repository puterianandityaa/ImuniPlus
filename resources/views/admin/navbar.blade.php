<nav class="navbar p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
        <a class="navbar-brand" href="{{ url('janji_temu') }}">Imuni<span class="text-primary">Plus</span></a>
    </div>
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button"
            data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
            @if(Route::has('login'))
            @auth
                <x-app-layout>
                </x-app-layout>
                @else
                <li class="nav-item">
                    <a href="{{ route('login') }}">
                    <button class="btn btn-primary ml-lg-3" id="form-login-open2">Login</button>                            </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('register') }}">
                    <button class="btn btn-primary ml-lg-3" id="form-register-open">Register</button>                        </a>
                </li>
            @endauth
            @endif
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
        </button>
    </div>
</nav>