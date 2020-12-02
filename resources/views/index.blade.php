<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>QRestaurant</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="../resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="../resources/css/app.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <style type="text/css">
        #reveal1,#reveal2,#reveal3 {
            opacity: 0;
            -webkit-transition: all 0.8s ease-in-out;
            -moz-transition: all 0.8s ease-in-out;
            -ms-transition: all 0.8s ease-in-out;
            -o-transition: all 0.8s ease-in-out;
            transition: all 0.8s ease-in-out;
        }
        #reveal1.visible,#reveal2.visible,#reveal3.visible {
            opacity: 1;
            -webkit-transform: none;
            -moz-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }
    </style>
</head>

<body>
<div id="backdrop"></div>
<div id="mySidenav" class="sidenav">
    @include('login')

</div>
<nav id="navx" class="navbar sticky-top navbar-dark navbar-expand-lg bg-transparent h2">
    <a class="navbar-brandv h1" href="#"><span class="ont-weight-bold">QR</span>estaurant</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto align-self-end">

            <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#tutorials">Tutorials</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#kontakt">Kontakt</a>
            </li>
            @if (Route::has('login'))
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" onclick="openNav()">Login</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('register') }}">Register</a>
                        </li>
                    @endif
                @endif
            @endif
        </ul>
    </div>
</nav>

<main data-spy="scroll" data-target="#navx" data-offset="100" id="main" role="main" class="container-fluid">

    <div id="trigger1"></div>
    <div id="reveal1" class="row h-100">
        @include('home')
    </div>

    <div id="trigger2"></div>
    <div id="reveal2" class="row h-100 ">
        @include('tutorials')
    </div>

    <div id="trigger3"></div>
    <div id="reveal3" class="row h-100">
        @include('kontakt')
    </div>
</main>
<footer class="footer">
    {{--    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})--}}
    <span class="text-white">&copy; 2020 <span class="font-weight-bold">QR</span>estaurant</span>
</footer>
<script src="../resources/js/jquery-3.5.1.slim.min.js"></script>
<script src="../resources/js/bootstrap.bundle.min.js"></script>
<script src="../resources/js/sidenav.js"></script>
<script src="../resources/js/ScrollMagic.min.js"></script>
<script src="../resources/js/debug.addIndicators.min.js"></script>
<script src="../resources/js/reveal-content.js"></script>
<script src="../resources/js/bs-custom-file-input.js"></script>
<script>
    $(document).ready(function() {
        bsCustomFileInput.init()
    });

</script>
</body>
</html>
