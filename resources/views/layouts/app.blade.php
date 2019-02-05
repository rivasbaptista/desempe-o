<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div id="app">

        <ul id="dropdown1" class="dropdown-content orange darken-4 white-text ">
                <li><a href="" class="white-text"><i class="material-icons white-text">account_box</i>Perfil</a></li>
                <li><a href="" class="white-text"><i class="material-icons small white-text">help</i>Ayuda</a></li>
                <li class="divider"></li>
                <li><a href="{{ route('logout') }}" class="white-text" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">exit_to_app</i>Salir</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>

        </ul>

        <ul class="sidenav sidenav-fixed orange darken-4 white-text" id="slide-out">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="images/background.png">
                </div>
                <a href="#user"><img class="circle" src="images/defaultuser.png"></a>
                <a href="#name"><span class="white-text name">{{ Auth::user()->name }}</span></a>
                <a href="#email"><span class="white-text email">{{ Auth::user()->email }}</span></a>
            </div>
            <div class="divider"></div>
        </li>
            <li><a href="badges.html" class="white-text">Evaluaciones</a></li>

        </ul>

        <div class="navbar-fixed ">
            <nav class="nav-app">
              <div class="nav-wrapper blue darken-4">
                <a href="" data-target="slide-out" class="sidenav-trigger show-on-large "><i class="material-icons">menu</i></a>
                <a href="" class="brand-logo"><img src="{{ url('images/logo.png') }}" class="logo-nav" alt=""></a>
                <ul class="right hide-on-med-and-down">
                @guest
                    <li><a href="{{ route('login') }}">login</a></li>
                @else
                 
             
                   <!-- Dropdown Trigger -->
                  <li><a class="dropdown-trigger" href="" data-target="dropdown1"><i class="material-icons right">arrow_drop_down</i>{{ Auth::user()->name }}</a>
                  </li>
                  @endguest
                </ul>
              </div>
            </nav>
        </div>      

        <main >
            @yield('content')
        </main>
    </div>
</body>
</html>
