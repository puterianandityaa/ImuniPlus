<div class="back-to-top"></div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">Imuni<span class="text-primary">Plus</span></a>

                <div class="navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url ('vaccine') }}">Vaccine</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url ('contact') }}">Contact</a>
                        </li>

                        @if(Route::has('login'))
                        @auth

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url ('reservation') }}">Reservation</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('profile') }}">Profile</a>
                        </li>

                        <x-app-layout>
                        </x-app-layout>
                        

                        @else

                        <li class="nav-item">
                            <a href="{{ route('login') }}">
                                <button class="btn btn-primary ml-lg-3" id="form-login-open2">Login</button>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}">
                                <button class="btn btn-primary ml-lg-3" id="form-register-open">Register</button>
                            </a>
                        </li>

                        @endauth
                        @endif

                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>