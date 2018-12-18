<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .cabecera img{
            /*height:100px;*/
        }
        .cabecera{
            background-color:#F1F1F1;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @auth
                        @if (Session::get("rol")=='Admin')
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item"><a class="nav-link" href="{{route('AdminHome')}}">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('AdministrarUsers')}}">Administrar</a></li>
                                <li class="nav-item disabled"><a class="nav-link" href="">Solicitudes Vacaciones (Proximamante)</a></li>
                            </ul>
                        @else
                        <ul class="navbar-nav mr-auto">
                                <li class="nav-item"><a class="nav-link" href="">SOY USER</a></li>
                            </ul>
                        @endif
                    @endif

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nombre }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="{{route('AdminConfig') }}" class="dropdown-item">Configuración</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="cabecera pt-2">
            <div class="row d-flex justify-content-around">
                <div class="col-s3 col-3 d-flex align-items-center">
                    <img src="https://tellevamosalagloria.com/wp-content/uploads/2018/09/en-la-gloria-sticky-logo.png" alt="LOGO" class="img-fluid">    
                </div>
                <div class="col-s3 col-3 d-flex align-items-center">
                    <h3 class="text-center">VACACIONES DE BIENESTAR</h3>
                </div>
                <div class="col-s3 col-3 d-flex align-items-center">
                    <img src="https://tellevamosalagloria.com/wp-content/uploads/2018/09/en-la-gloria-sticky-logo.png" alt="LOGO" class="img-fluid">
                </div>
            </div>
        </div>
        <main class="py-4">
            <div class="row">
                
            </div>
            @yield('content')


        </main>
    </div>
</body>
</html>
