<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Laravel Girls</title>
   <!-- Bootstrap core CSS -->
    <link href="{!! asset('/css/bootstrap.min.css') !!}" rel="stylesheet" />
   <!-- Template Stylesheets -->
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet" />
   <!-- Custom Animations -->
    <link href="{!! asset('css/animate.css') !!}" rel="stylesheet" />
   <!-- Magnific Popup Css -->
    <link href="{!! asset('css/magnific-popup.css') !!}" rel="stylesheet" />
   <!-- Font Icons -->
    <link href="{!! asset('css/font-awesome.css') !!}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{!! asset('css/etlinefont.css') !!}">
   <!-- Owl Carousel Css -->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/owl.carousel.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/owl.theme.css') !!}">
   <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
    @include('preloader')
    @include('navigation')
    @include('home')
    @include('services')
    @include('about')
    @include('porfolio')
    @include('contact')
    @include('footer')

<script src="{!! asset('js/jquery-1.11.1.min.js') !!}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
<!-- Plugin JavaScript -->
<script src="{!! asset('js/jquery.scrollTo.min.js') !!}"></script>
<script src="{!! asset('js/jquery.nav.min.js') !!}"></script>
<script src="{!! asset('js/appear.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/owl.carousel.js') !!}"></script>
<script src="{!! asset('js/jquery.mixitup.js') !!}"></script>
<script src="{!! asset('js/jquery.magnific-popup.min.js') !!}"></script>
<!-- Custom Theme JavaScript -->
<script src="{!! asset('js/custom.js') !!}"></script>
<!-- Contact Form JavaScript -->
<script src="{!! asset('js/jqBootstrapValidation.js') !!}"></script>
<script src="{!! asset('js/contact_me.js') !!}"></script>
</body>
</html>