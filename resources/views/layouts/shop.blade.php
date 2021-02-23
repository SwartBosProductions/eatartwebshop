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

            <div class="row justify-content-center">

                <div class="col-2 pr-0">

                    <div class="row mt-2 mr-1 justify-content-end">
                        <x-shop.back-shop-button>
                            {{ __('Terug naar de Shop') }}
                        </x-shop.back-shop-button>
                    </div>
                </div>

                <div class="col-8">
                    <div class="row justify-content-center">
                        <img src="{{url('images/eat art logo_vrijstaand_zw.png')}}"
                        class="shop-eatart-logo" alt="eat-art logo">
                    </div>
                    <div class="row justify-content-center">
                        <h2 class="h2-shop">
                            Webshop
                        </h2>
                    </div>

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
