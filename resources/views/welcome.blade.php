<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="../resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="../resources/css/app.css" rel="stylesheet">
    <!-- Styles -->

    <style>
        body {
            font-family: 'Montserrat';
        }
    </style>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><span class="font-weight-bold">QR</span>estaurant</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto align-self-end">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('register') }}">Register</a>
                            </li>
                        @endif
                    @endif
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<main role="main" class="container-fluid">
    <div class="row justify-content-end">
        <div class="col-sm-12 col-md-9 col-lg-6 mt-3 mb-3">

            <div class="card shadow-lg">
                <div class="card-body">
                    <h2 class="card-title">Kontaktloser Bestellprozess</h2>
                    {{--                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>--}}
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                        justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                        ipsum dolor sit amet.
                    </p>

                    <div class="row">
                        <div class="col-6">
                            <a href="{{ url('login') }}">
                                <button type="button" style="width: 100%" class="btn btn-outline-success">Login</button>
                            </a>
                            <p class="text-muted">Bereits registriert?</p>
                        </div>
                        <div class="col-6">
                            <a href="{{ url('register') }}">
                                <button type="button" style="width: 100%" class="btn btn-primary">Registrieren</button>
                            </a>
                            <p class="text-muted">Lorem ipsum dolor sit amet?</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
<footer class="footer">
    {{--    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})--}}
    <span class="m-2 text-white">&copy; 2020 <span class="font-weight-bold">QR</span>estaurant</span>
</footer>
<script src="../resources/js/jquery-3.5.1.slim.min.js"></script>
<script src="../resources/js/bootstrap.bundle.min.js"></script>
</body>
</html>
