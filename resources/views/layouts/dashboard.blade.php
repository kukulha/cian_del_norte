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
    <a href="#" data-target="menu" class="sidenav-trigger menu hide-on-med-and-up fixed"><i class="material-icons rojo-text">menu</i></a>
    <ul id="menu" class="sidenav sidenav-fixed navy">
        <li>
            <div class="user-view">
                <a href="{{ route('home') }}"><img class="responsive-img" src="/img/iso.png"></a>
            </div>
        </li>
        <li><a class="white-text titulo" href="{{ route('home') }}">Ver Página</a></li>
        <li><a class="white-text titulo" href="{{ route('posts.index') }}">Artículos</a></li>
        <li><a class="white-text titulo" href="{{ route('categories.index') }}">Categorías</a></li>
        <li class="white-text titulo">
            <a class="white-text " href="#!" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('js/app.js') }}" ></script>
    @yield('scripts')
    
    
</body>
</html>
