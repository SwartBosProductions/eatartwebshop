<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- dynamischmaken op basis van route name denk ik zo --}}
        <title>@yield('title')</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>

    <body class="">

        <header>
            @include('layouts.partials.header')
        </header>

        <section>
            @yield('content')
        </section>

        <footer>
            @include('layouts.partials.footer')
        </footer>

    </body>

</html>
