<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit:400,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <ul id="menu" class="sidenav sidenav-fixed rojo">
        <li>
            <div class="user-view">
                <a href="{{ route('home') }}"><img class="responsive-img" src="img/iso.png"></a>
            </div>
        </li>
        <li><a class="white-text titulo" href="">Llantas</a></li>
        <li><a class="white-text titulo" href="">Maquinaria   </a></li>
        <li><a class="white-text titulo" href="">Contacto</a></li>
        <li><a class="white-text titulo" href="">Blog</a></li>
        @auth
        <li>
            <a class="dropdown-trigger white-text" href="#" data-target="dropdown">{{ Auth::user()->name }}</a>
        </li>
        @endauth
    </ul>


    <div class="rss hide-on-med-and-down">
        <a href=""><i class="fab fa-facebook-f white-text icons"></i></a>
        <a href=""><i class="fab fa-instagram white-text icons"></i></a>
    </div>

    <ul id='dropdown' class='dropdown-content rojo'>
        <li class="rojo"><a class="white-text " href="">Administración</a>
        <li class="rojo">
            <a class="white-text " href="#!" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>

    @yield('content')


    <!-- Scripts -->
    @yield('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    
</body>
</html>
