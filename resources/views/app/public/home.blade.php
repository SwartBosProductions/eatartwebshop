<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- dynamischmaken op basis van route name denk ik zo --}}
        <title> Eat-Art - HOME - </title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>

    <body class="">

        <header>

            <div class="container-fluid fixed-fixed py-4 pr-0 mt-4 mb-2 mr-4">

                <div class="row bg-dark p-2 pl-4 mr-4">

                    <div class="col-6 pl-4">
                            <img src="{{url('images/eat art logo_vrijstaand_tn.png')}}"
                                class="" alt="eat-art logo small">

                            {{-- picto's eat-art sociale media --}}
                    </div>

                    <div class="col-6 pr-2 my-auto">
                        <div class="d-flex justify-content-end align-items-center pr-2">
                            @if (Route::has('login'))
                                <div class="brand-a1">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="eatart-a1 mx-2">Username Profile page</a>
                                        {{-- fix logout link  --}}
                                        <a href="{{ route('logout') }}" class="eatart-a1 mx-2">Logout</a>
                                    @else
                                        <a href="{{ route('login') }}" class="eatart-a1 mx-2">Login</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="eatart-a1 mx-2">Register</a>
                                        @endif
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>

                </div>

            </div>

        </header>


        <main class="main-public" >

            <div class="container-fluid p-2 my-2 mx-auto">

                <div class="row justify-content-center">
                    <div class=" col-10 col-lg-8 bg-light text-center">
                        <h1>Content</h1>
                    </div>
                </div>

            </div>

        </main>

        <footer>

            <div class="container-fluid fixed-bottom p-4 my-2 ml-4">

                <div class="row bg-dark pl-4 my-auto">

                    <div class="col-6 pl-2 my-auto">

                        <img src="{{url('images/NHL_Stenden_logo_NL_white_RGB.png')}}"
                        class=" pl-2 m-1" alt="nhl-stenden logo small" height="56">


                    </div>

                    <div class="col-6 text-end pr-4 my-auto">

                        <div class="text-sm text-muted d-flex justify-content-end  align-items-center pr-2">
                            <div class="vers-pwdby pb-2">
                                <div class="d-flex justify-content-end">
                                    Laravel v{{ Illuminate\Foundation\Application::VERSION }}
                                </div>
                                <div class="d-flex justify-content-end ">
                                    <sub>
                                        powerd by
                                    </sub>
                                </div>
                            </div>
                            <img src="{{url('images/forestblack-logo-V20-tn.jpg')}}"
                                class="pr-4 m-1" alt="forestblack logo small" height="40">
                        </div>

                    </div>

                </div>

            </div>

        </footer>







    </body>

</html>
