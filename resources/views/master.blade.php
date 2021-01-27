<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('script0')
    <meta name="keywords" content="FxMyDevice (FMD)," />
    <meta name="author" content="Fix My Device">
    <!-- Favicons Icon -->
    <link rel="icon" href="{{ asset('images/Aiexpt4.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('images/Aiexpt4.png') }}" type="image/x-icon" />
    <title>@if (! empty($title)) <?= $title; ?> @else Welcome to Skoolblike - Homepage @endif</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    @yield('script1')
</head>
<body>

@include('layouts.menu')

@yield('content')

@include('layouts.footer')

<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script type="text/javascript">

    $('.carousel').carousel({
        interval: 3500, // in milliseconds
        pause: 'none' // set to 'true' to pause slider on mouse hover
    })

</script>
<script type="text/javascript">
    $( "a.submenu" ).click(function() {
        $( ".menuBar" ).slideToggle( "normal", function() {
// Animation complete.
        });
    });
    $( "ul li.dropdown a" ).click(function() {
        $( "ul li.dropdown ul" ).slideToggle( "normal", function() {
// Animation complete.
        });
        $('ul li.dropdown').toggleClass('current');
    });
</script>
@yield('script2')
</body>
@yield('script3')
</html>