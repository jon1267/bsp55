<!DOCTYPE html>
<html lang="RU">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BizSpeak') }}</title>
    <!--  Bootstrap Style -->
    <link href="{{asset('bspeak/assets/css/bootstrap.css') }}" rel="stylesheet" />
    <!--  Font-Awesome Style -->
    <link href="{{ asset('bspeak/assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!--  Font-Awesome Animation Style -->
    <link href="{{ asset('bspeak/assets/css/font-awesome-animation.css') }}" rel="stylesheet" />
    <!--  Pretty Photo Style -->
    <link href="{{ asset('bspeak/assets/css/prettyPhoto.css') }}" rel="stylesheet" />
    <!--  Google Font Style -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!--  Custom Style -->
    <link href="{{ asset('bspeak/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/jon_style.css') }}" rel="stylesheet" >
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!--  Jquery Core Script -->
    <script src="{{ asset('bspeak/assets/js/jquery-1.10.2.js') }}"></script>
    <script src="{{asset('js/jon_scripts.js')}}"></script>

</head>
<body>

    @yield('navigation')

    @yield('content')
    {{--
        @yield('slider') @yield('homes') @yield('special') @yield('testimonials')
        @yield('homesBottoms') @yield('justStatus') @yield('mediaSection')
    --}}

    @yield('footer')

<!--  Jquery Core Script -->
<!-- <script src="{{ asset('bspeak/assets/js/jquery-1.10.2.js') }}"></script> выше -->
<!--  Core Bootstrap Script -->
<script src="{{ asset('bspeak/assets/js/bootstrap.js') }}"></script>
<!--  PrettyPhoto Script (нужен токо в портфолио) -->
<script src="{{ asset('bspeak/assets/js/jquery.prettyPhoto.js') }}"></script>
<!--  Custom Scripts -->
<script src="{{ asset('bspeak/assets/js/custom.js') }}"></script>

</body>
</html>
