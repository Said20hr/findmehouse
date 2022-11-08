<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Find Me house') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- FAVICON FILES -->
        <link href="assets/images/favicon.png" rel="apple-touch-icon" sizes="144x144">
        <link href="assets/images/favicon.png" rel="apple-touch-icon" sizes="120x120">
        <link href="assets/images/favicon.png" rel="apple-touch-icon" sizes="76x76">
        <link href="assets/images/favicon.png" rel="shortcut icon">

        <!-- CSS FILES -->
        <link rel="stylesheet" href="{{asset('assets/')}}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('assets/')}}/fonts/iconfonts.css">
        <link rel="stylesheet" href="{{asset('assets/')}}/css/plugins.css">
        <link rel="stylesheet" href="{{asset('assets/')}}/css/style.css">
        <link rel="stylesheet" href="{{asset('assets/')}}/css/responsive.css">
        <link rel="stylesheet" href="{{asset('assets/')}}/css/color.css">
        <!-- Scripts -->
        <!-- Alpine Plugins -->
        <script defer src="https://unpkg.com/@alpinejs/mask@3.x.x/dist/cdn.min.js"></script>

        <!-- Alpine Core -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
    <x-jet-banner />
    <div id="dtr-wrapper" class="clearfix dtr-section dtr-bg-shapes-type-2">
        <x-guest.includes.preloader/>
        <x-guest.includes.header/>

        <div class="">
            {{ $slot }}
        </div>

        <x-guest.includes.footer/>

    </div>


        @stack('modals')

        @livewireScripts
    <script src="{{asset('assets/')}}/js/jquery.min.js"></script>
    <script src="{{asset('assets/')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('assets/')}}/js/plugins.js"></script>
    <script src="{{asset('assets/')}}/js/slick.min.js"></script>
    <script src="{{asset('assets/')}}/js/custom.js"></script>
    </body>
</html>
