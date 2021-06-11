<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!--Materialice-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>

<body>
<div id="app">
    @if(Auth::user())
        <div class="navbar-fixed" >
            <nav>
                <div class="nav-wrapper" style="background-color: #385d7a  ">
                    <a href="/home" class="brand-logo right" style="margin-right: 30px">
                        <img src="{{ Storage::disk('public') -> url ('/app/logo.png') }}" style="width: 50px;">
                    </a>
                </div>
            </nav>
        </div>

        <ul id="slide-out" class="sidenav">
            <li>
                <div class="user-view">
                    <div class="background" style="background-color: teal ">
                        <img src="">
                    </div>
                    <a href="#user"><img src="{{ Storage::disk('public') -> url (Auth::user() -> url) }}" alt="" class="circle" style="margin:0 auto"></a>
                    <a href="#name"><span class="white-text name">{{ Auth::user() -> name }}</span></a>
                    <a href="#email"><span class="white-text email">{{ Auth::user() -> email }}</span></a>
                </div>
            </li>
            <li><a href="#!"><i class="material-icons">panorama</i>Plantillas</a></li>
            <li><a href="#!"><i class="material-icons">location_on</i>Ubicacion de tiendas</a></li>
            <li><a href="#!"><i class="material-icons">local_shipping</i>Reserva</a></li>
            <li><div class="divider"></div></li>
            <li class="text-center">
                <form id="logout-form"  action="/logout_force" method="POST">
                    @csrf
                    <button type="submit" class="waves-effect waves-light btn-small black">Logout</button>
                </form>
            </li>
        </ul>
        <a href="#" data-target="slide-out" class="sidenav-trigger btn-floating btn-large waves-effect waves-light teal btn-menu-principal">
            <i class="material-icons" style="color: white">menu</i>
        </a>


    @endif

    @yield('image')
    <main class="py-4">
        @yield('content')
    </main>
</div>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
    });
</script>

</body>
</html>

<script type="text/javascript">

     $(document).ready(function(){
         var height = $(window).height();
         $('#app').height(height);
     });

</script>

<style lang="scss">

    #app {
        width: 100%;
        margin-top: 0px;
        margin: 0 auto;
        border-right: solid #1b4b72;
        border-left: solid #1b4b72;
        padding: 0px;
        background-color: white;
    }
    .logo{
        width: 70%;
        margin-top:10px;
    }
    .perfil {
        width: 50px;
        border-radius: 25px;
    }
    .sidenav-trigger{
        position: fixed;
    }
    .btn-menu-principal {
        margin-top: -60px;
        margin-left: 50px;
        z-index: 100;
    }
    .navbar-fixed {
        z-index:10;
    }
    a:hover{
        text-decoration: none;
    }
</style>
