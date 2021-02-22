@extends ('layouts.public')

@section('content')

<main class="main-public container-fluid mx-auto">

    <div class="row justify-content-center">

        <div class="col-2 pr-0">

            <div class="row mt-2 mr-1 justify-content-end">
                <x-public.main-home-button>
                    {{ __('Home') }}
                </x-public.main-home-button>
            </div>
            <div class="row mt-4 mr-1 justify-content-end">
                @include('public/partials/about_eatart_nav')
            </div>

        </div>

        <div class="col-8">

            <div class="row justify-content-center">
                @include('public/partials/public_site_nav')
            </div>

            <div class="row">
                <div class="content-main-home container-fluid p-2 my-2 mx-auto">

                    <div class="row justify-content-center">

                        <div class="col-10 col-lg-8 text-center mt-3 mb-4">

                            <a href="/login" class="main-webshop-btn">

                                <div class="row justify-content-center">
                                    <img src="{{url('images/eat art logo_vrijstaand_zw.png')}}"
                                    class="home-main-eatart-logo" alt="eat-art logo">
                                </div>

                                <div class="row justify-content-end">
                                    <h3 class="main-home-anno" >
                                        Sinds 2018
                                    </h3>
                                </div>

                                <div class="row justify-content-center">
                                    <h2 class="main-webshop-btn">
                                        Webshop
                                    </h2>
                                </div>
                                <div class="row justify-content-center">

                                </div>
                            </a>

                        </div>

                    </div>

                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-6 mt-1">

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">

                                    <div class="carousel-item active">
                                        <img class="d-block w-100 mx-auto "
                                            src="images/eatart-de_kast.png" alt="Eat Art kast bij document-center">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Ook te bezoeken !</h5>
                                            <p>Bij het document-centre van de NHL-Stenden</p>
                                        </div>
                                    </div>


                                    <div class="carousel-item">
                                        <img class="d-block w-100 mx-auto"
                                            src="images/is-dit-kunst-of-kan-het-weg.png" alt="Voorbeeld foto Eat Art product">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>naam van serie</h5>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>

        <div class="col-2 pl-0">
                {{-- spacer left public --}}
        </div>

    </div>

</main>

@endsection









