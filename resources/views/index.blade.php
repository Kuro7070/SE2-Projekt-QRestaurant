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
        #reveal1, #reveal2, #reveal3 {
            opacity: 0;
            -webkit-transition: all 0.8s ease-in-out;
            -moz-transition: all 0.8s ease-in-out;
            -ms-transition: all 0.8s ease-in-out;
            -o-transition: all 0.8s ease-in-out;
            transition: all 0.8s ease-in-out;
        }

        #reveal1.visible, #reveal2.visible, #reveal3.visible {
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
    @include('speisekarte-upload')
    <div id="trigger1"></div>
    <div id="reveal1" class="row h-100 justify-content-center align-content-center">
        @include('home')
    </div>

    <div id="trigger2"></div>
    <div id="reveal2" class="row h-100 justify-content-center align-content-center">
        @include('tutorials')
    </div>

    <div id="trigger3"></div>
    <div id="reveal3" class="row bg-dark h-75 justify-content-center align-content-center">
        @include('contact')
    </div>


    <div class="row h-25 bg-light">
        {{--    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})--}}
        <span class="text-white">&copy; 2020 <span class="font-weight-bold">QR</span>estaurant</span>
    </div>
</main>
<script src="../resources/js/jquery-3.5.1.js"></script>
<script src="../resources/js/bootstrap.bundle.min.js"></script>
<script src="../resources/js/sidenav.js"></script>
<script src="../resources/js/ScrollMagic.min.js"></script>
<script src="../resources/js/debug.addIndicators.min.js"></script>
<script src="../resources/js/reveal-content.js"></script>
<script src="../resources/js/bs-custom-file-input.js"></script>
<script src="../resources/js/upload-file.js"></script>

<script>
    $('#my-modal').on('show.bs.modal', function (event) {
        var myVal = $(event.relatedTarget).data('val');
        $(this).find(".modal-body").text(myVal);
    });
</script>
<script>
    let email = $('#email');
    let nachricht = $('#nachricht');
    let name = $('#name');
    let buttonStatus = $('#contact-button-status');

    let mailError = $("#errors-email");
    let nachrichtError = $("#errors-nachricht");
    let nameError = $("#errors-name");

    let successBar = '<div class="alert alert-success w-50 fixed-bottom mx-auto alert-dismissible fade show" role="alert"><strong>Vielen Dank für Deine Nachricht!</strong> Wir werden uns so schnell wie möglich bei Dir melden!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';

    $('#contact-form').submit(function (e) {
        e.preventDefault();
        document.getElementById('contact-spinner').style.display = "inline-block";
        buttonStatus.removeClass('fa-check').removeClass('text-success');
        buttonStatus.removeClass('fa-times').removeClass('text-danger');

        $.ajax({
            method: "POST",
            url: "{{route('kontakt')}}",
            data: {name: name.val(), email: email.val(), nachricht: nachricht.val(), "_token": "{{ csrf_token() }}"},


            success: function (data) {
                clearInputsAndErrors();
                document.getElementById('contact-spinner').style.display = "none";
                name.val("");
                email.val("");
                nachricht.val("");
                document.getElementById('contact-button-status').style.display = "inline-block";
                buttonStatus.addClass('fa-check').addClass('text-success');
                $('#main').append(successBar);
            },
            error: function (xhr, status, error) {
                document.getElementById('contact-spinner').style.display = "none";
                document.getElementById('contact-button-status').style.display = "inline-block";
                buttonStatus.addClass('fa-times').addClass('text-danger');
                clearInputsAndErrors();
                $.each(xhr.responseJSON.errors, function (key, item) {
                    $('#' + key).addClass('is-invalid');
                    $("#errors-" + key).append(item)
                });

            }
        })
    });

    email.on("input", function () {
        email.removeClass('is-invalid');
        mailError.empty();
        document.getElementById('contact-button-status').style.display = "none";

    });

    nachricht.on("input", function () {
        nachricht.removeClass('is-invalid');
        nachrichtError.empty();
        document.getElementById('contact-button-status').style.display = "none";
    });

    name.on("input", function () {
        name.removeClass('is-invalid');
        nameError.empty();
        document.getElementById('contact-button-status').style.display = "none";
    });

    function clearInputsAndErrors() {
        email.removeClass('is-invalid');
        nachricht.removeClass('is-invalid');
        name.removeClass('is-invalid');
        mailError.empty();
        nachrichtError.empty();
        nameError.empty();
    }
</script>
</body>
</html>
