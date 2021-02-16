<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>

    <body class="body-auth">

        <header>
            @include('layouts.partials.header')
        </header>

        <main class="main-public container-fluid mx-auto">

            <div class="row">

                <div class="col-2">

                    <div class="row mt-2 mr-1 justify-content-end">
                        <x-public.main-home-button>
                            {{ __('Home') }}
                        </x-public.main-home-button>
                    </div>
                </div>

                <div class="col-8">
                    <div class="">
                        <div class="container">
                            {{ $slot }}
                        </div>
                    </div>
                </div>

                <div class="col-2">

                </div>

            </div>

        </main>

        <footer>
            @include('layouts.partials.footer')
        </footer>

    </body>

</html>
