<!DOCTYPE html>
<html lang="{{ env('APP_LOCALE') }}">

<head>

    <title>{{ $title ?? 'Главная страница' }} {{ env('APP_NAME') }}</title>
    <meta charset="UTF-8">
    <meta name="description" content="AuCreative theme tempalte">
    <meta name="author" content="AuCreative">
    <meta name="keywords" content="AuCreative theme template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('client/images/icons/favicon.png') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('client/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/fonts/elegant-font/html-css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/vendor/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/vendor/revolution/css/navigation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/vendor/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/vendor/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/vendor/lightbox2/css/lightbox.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/vendor/animsition/dist/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/css/color.css') }}">
    @livewireStyles
</head>

<body class="animsition restyle-index">

    <x-header />
    {{ $slot }}
    <x-footer />
    <!-- Back to top -->
    <div class="btn-back-to-top hov-bg-main" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </span>
    </div>
    <script src="{{ asset('client/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('client/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('client/vendor/animsition/dist/js/animsition.min.js') }}"></script>
    <script src="{{ asset('client/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('client/js/slick-custom.js') }}"></script>
    <script src="{{ asset('client/vendor/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('client/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('client/vendor/revolution/js/jquery.themepunch.tools.min.j') }}s"></script>
    <script src="{{ asset('client/vendor/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('client/vendor/revolution/js/extensions/revolution.extension.video.min.j') }}s"></script>
    <script src="{{ asset('client/vendor/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('client/vendor/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('client/vendor/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('client/vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('client/vendor/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('client/vendor/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('client/vendor/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('client/vendor/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('client/js/slide-custom.js') }}"></script>
    <script src="{{ asset('client/vendor/lightbox2/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('client/vendor/parallax100/parallax100.js') }}"></script>
    <script>
        $('.parallax100').parallax100();
    </script>
    <script src="{{ asset('client/vendor/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('client/js/contact.js') }}"></script>
    <script src="{{ asset('client/js/main.js') }}"></script>
    @livewireScripts
</body>

</html>