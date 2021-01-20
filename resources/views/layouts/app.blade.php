<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

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
                    <div class="dropdown dropleft">
                        <img
                                src="{{\App\Http\Controllers\UserController::getProfilePic()}}" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                class="nav-profile-picture rounded-circle">

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            this.closest('form').submit();">Logout</a>
                            </form>

                            <a class="dropdown-item" href="#profil">Profil</a>
                        </div>
                    </div>
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
    @include('edit-data')
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
    <div id="reveal3" class="row h-75 justify-content-center align-content-center">
        @include('contact')
    </div>
    <div class="row h-40 bg-dark">
        <span class="text-white">&copy; 2021 <span class="font-weight-bold">QR</span>estaurant</span>
    <div class="container">
        <div class="sidebar-column col-md-4">
            <aside id="text-1" class="text-white"><h3 class="widget-title">IMPRESSUM</h3>			<div class="textwidget"><p>Mister QRest<br>
                        QRest Straße 20<br>
                        22012 Hamburg</p>
                    <p>Telefon &nbsp;+49 123 4567 8910</p>
                    <p><strong>MAIL&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</strong><a href="mailto:qrest@qrest.com">qrest@qrest.com</a></p>
                </div>
            </aside>

    </div>
    </div>
    </div>
</main>
<script src="../resources/js/jquery-3.5.1.js"></script>
<script src="../resources/js/bootstrap.bundle.min.js"></script>
<script src="../resources/js/sidenav.js"></script>
<script src="../resources/js/ScrollMagic.min.js"></script>
<script src="../resources/js/reveal-content.js"></script>
<script src="../resources/js/bs-custom-file-input.js"></script>
<script src="../resources/js/upload-file.js"></script>
<script src="../resources/js/contact.js"></script>
<script src="../resources/js/jquery.pwstrength.js"></script>

<script>
    $('#pw-confirm').hide();

    $('#new-password').on("input", function () {
        if ($('#new-password').val()) {
            $('#pwindicator').show();
            $('#new-password').pwstrength();
        } else {
            $('#pwindicator').hide();

        }
        let pwConfirm = '<i class="fas fa-check-double text-success"></i>';
        $('#pw-confirm').empty();
        if ($('#new-password').val() === $('#new-password-confirm').val()) {
            $('#pw-confirm').append(pwConfirm);
            $('#pw-confirm').show();
        } else {
            $('#pw-confirm').empty();
            $('#pw-confirm').hide();

        }
    });
    $('#new-password-confirm').on("input", function () {
        let pwConfirm = '<i class="fas fa-check-double text-success"></i>';
        $('#pw-confirm').empty();
        if ($('#new-password').val() === $('#new-password-confirm').val()) {
            $('#pw-confirm').append(pwConfirm);
            $('#pw-confirm').show();
        } else {
            $('#pw-confirm').empty();
            $('#pw-confirm').hide();

        }
    });
</script>
<script>
    $('#my-modal').on('show.bs.modal', function (event) {
        var modalTitle = "Speisekarte löschen?";
        var path = $("#open-remove-pdf-modal-button").data('path');
        let modalText = 'Möchtest Du diese Speisekarte wirklich löschen? <br> <object class="h-100 w-100" data="' + path + '" type="application/pdf"></object>';

        $(this).find(".modal-title").text(modalTitle);
        $(this).find(".modal-text").html(modalText);

        $("#remove-pdf-button").click(function (e) {
            e.preventDefault();
            $('#pdfs-backdrop').css('display', 'inline-flex');
            document.getElementById('remove-pdf-spinner').style.display = "inline-block";
            document.getElementById('remove-pdf-button').setAttribute('disabled', '');
            $.ajax({
                method: "POST",
                url: $("#open-remove-pdf-modal-button").data('href'),
                data: {
                    path: $("#open-remove-pdf-modal-button").data('name'),
                },
                success: function (data) {
                    $('#my-modal').modal('hide');
                    $('#pdfs').load('pdfs', function () {
                        $('#pdfs-backdrop').hide();
                    });
                    document.getElementById('remove-pdf-spinner').style.display = "none";
                    document.getElementById('remove-pdf-button').removeAttribute('disabled');
                },
                error: function (xhr, status, error) {
                    $('#pdfs').load('pdfs', function () {
                        $('#pdfs-backdrop').hide();
                    });
                    document.getElementById('remove-pdf-spinner').style.display = "none";
                    document.getElementById('remove-pdf-button').removeAttribute('disabled');
                },
            })
        });
    });
</script>
<script>
    $('#remove-account-modal').on('show.bs.modal', function (event) {
        var modalTitle = "Account unwiderruflich löschen?";
        var modalText = "Möchtest Du uns wirklich verlassen? <strong>Dein Account wird vollständig und unwiderruflich aus dem System entfernt.</strong>";

        $(this).find(".modal-title").text(modalTitle);
        $(this).find(".modal-text").html(modalText);

        $("#remove-account-button").click(function (e) {
            document.getElementById('remove-account-spinner').style.display = "inline-block";
        });
    });
</script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
</body>
</html>
