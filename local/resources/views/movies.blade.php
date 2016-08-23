<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta name="csrf_token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="vendors/dracula/dragula.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header>
            <h1>Kameo</h1>
        </header>
        <section id="container" class="wrapper" data-sortable=".card">
            @foreach ($movies as $movie)
                <figure class="card" data-position="{{$movie['order']}}" data-id="{{$movie['id']}}">
                    <img src="{{$movie['image']}}" alt="">
                    <figcaption>
                        <h2>{{$movie['title']}}</h2>
                        <h3>{{$movie['real_name']}}</h3>
                    </figcaption>
                    <ul>
                        <li><span class="icon-calendar"></span>{{$movie['release_date']}}</li>
                        <li><span class="icon-stopwatch"></span>{{$movie['duration']}}</li>
                    </ul>
                </figure>
            @endforeach
        </section>
       <script src="vendors/dracula/dragula.min.js"></script>
       <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
       <script src="js/main.js"></script>
    </body>
</html>
