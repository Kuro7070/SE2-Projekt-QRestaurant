<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="../../resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../resources/css/app.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');

        body {
            overflow: auto;
            background-image: url("https://i.stack.imgur.com/JICXS.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        iframe {
            width: 650px;
            height: 800px;
            border: solid black 2px;
            border-radius: 15px;
        }

        .header {
            color: white;
            font-family: 'Oswald', sans-serif;
            font-size: 2.3rem;
            margin-top: 25px;
            margin-bottom: 30px;
        }

        button {
            width: 150px;
            background: #1c7430;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 15px;
            margin-top: 30px;
            font-family: 'Oswald', sans-serif;
            font-size: 15px;

        }

        #btns {
            margin: 15px;
        }

        button:hover {

            cursor: pointer;
            background-color: #0f6674;

        }

        #pdf {
            border: white 2px solid;
            box-shadow: 0px 0px 25px white;
            margin-bottom: 30px;
        }


    </style>


    <script defer>

        function print() {

            let frame = document.getElementById('pdf');
            let content = frame.contentWindow;
            content.focus();
            content.print();
        }


    </script>

    <title>Show PDF</title>
</head>
<body>

<div class="container h-100" id="pdfmain">
    <div class="header"> Ihre Bestellung als PDF</div>

    @php

        //        sample uri
        //       /qrestaurant/public/storage/uploads/6004c27f7e957.pdf

        $uri = $_SERVER['REQUEST_URI'];
        $hash = explode("/", $uri);
        $hash = end($hash);
        $src = '/storage/uploads/'.$hash;
        $data=[
        'gastronom_id' =>  \App\Models\File::where('name','=',$hash)->firstOrFail()->gastronom_id
        ];
    @endphp
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <iframe class="w-100" id="pdf" type="application/pdf" src='{{asset($src)}}'></iframe>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="text-white w-100 justify-content-center">
                @include('corona', $data)
            </div>
        </div>
    </div>
    @auth()
        <div class="row text-white w-100 justify-content-center">
            <a class="mr-1" href="https://localhost/qrestaurant/public/">
                <button>Back</button>
            </a>
            <button class="ml-1" onclick="print()">Download PDF</button>
        </div>
    @endauth
</div>
</div>

</body>
<script src="../../resources/js/jquery-3.5.1.js"></script>
<script src="../../resources/js/bootstrap.bundle.min.js"></script>
<script src="../../resources/js/corona.js"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
</html>
