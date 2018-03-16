<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/css/materialize.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <title>{{ config('app.name') }}</title>
</head>
<body>
<main>
    <nav class="indigo"> 
        <div class="nav-wrapper container">
            <a href="#" data-target="slide-out" class="sidenav-trigger">
                <!--<i class="material-icons">menu</i>-->
                <a href="/" class="brand-logo">Sistema de Inventario</a>
            </a>
        </div>
    </nav>
    <!-- SideNav -->
    <ul id="slide-out" class="sidenav">
        <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
        <li><a href="#!">Second Link</a></li>
        <li><div class="divider"></div></li>
        <li><a class="subheader">Subheader</a></li>
        <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    </ul>
    <div class="container">
        @yield('content')
    </div>
</main>
<footer class="page-footer indigo">
    <div class="footer-copyright">
        <div class="container">
            © 2018 Hecho por <a href="https://segasi.cl" target="_blank">Segasi</a>
        </div>
    </div>
</footer>
<script src="/js/materialize.min.js"></script>
<script src="/js/init.js"></script>
@include('layouts.toast')
</body>
</html>