<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/laundry.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        @if (Auth::user() && Auth::user()->role == 'staff')
                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/admin') }}">
                            Admin Console
                        </a>
                        @else
                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Online Laundry Booking') }}
                        </a>
                        @endif
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="">Why JUNSTAR</a></li>
                            <li><a href="">Pricing</a></li>
                            <li><a href="">Contact</a></li>
                            <!-- Authentication Links -->
                            @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                            @else

                            @if (Auth::user()->role == 'staff')
                            <li><a href="{{ url('admin') }}">Admin Console</a></li>
                            @else
                            <li><a href="{{ url('book') }}">Book Order</a></li>
                            <li><a href="{{ url('orders')}}">My Orders</a></li>
                            <li><a href="{{ url('profile') }}">My Profile</a></li>
                            @endif

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                @yield('title')
                            </div>
                            <div class="panel-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/ajax.js') }}"></script>
    </body>
</html>
