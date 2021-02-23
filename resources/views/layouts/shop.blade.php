<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- dynamischmaken op basis van route name denk ik zo --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>

    <body class="">

        <header>
            @include('layouts.partials.header')
        </header>

        <main class="container-fluid mx-auto main-shop">

            <div class="row">

                <div class="col-2">
                    {{-- if uri is shop ->hidden --}}
                    <a href="/shop">Terug naar de shop</a>
                </div>

                <div class="col-8">
                    logo eat art
                </div>


                <div class="col-2">
                    <div class="row justify-content-end mr-4">
                        {{-- if page order/shoppingcart -> hidden --}}
                        <x-shop.shoppingcart_icon>

                        </x-shop.shoppingcart_icon>
                    </div>
                </div>

            </div>

            <section>
                @yield('content')
            </section>

        </main>

        <footer>
            @include('layouts.partials.footer')
        </footer>

    </body>

</html>
