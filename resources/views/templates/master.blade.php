<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>FirstJob.com</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}">

    <!-- External Css -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/et-line.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/plyr.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/flag.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/jquery.nstSlider.min.css') }}" />

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/main.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CRoboto:300i,400,500" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icon-114x114.png">


    <!--[if lt IE 9]>
    <script src="{{ asset('user/assets/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/respond.min.js') }}"></script>


    <![endif]-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
{{ View::make('templates/navbar') }}
    @yield('main-content')
{{ View::make('templates/footer') }}

</body>
</html>
