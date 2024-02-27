<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta name="application-name" content="{{ config('app.name') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @hasSection('title')
            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://kit.fontawesome.com/cc98f54b6e.css" crossorigin="anonymous">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        @livewireStyles
        @filamentStyles
        @vite('resources/sass/app.scss')
    </head>

    <body class="antialiased">
        @yield('body')
        @livewireScripts
        @filamentScripts
        @vite('resources/js/app.js')
    </body>
</html>
