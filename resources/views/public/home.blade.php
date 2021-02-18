@extends ('layouts.public')

@section('content')

<main class="main-public container-fluid mx-auto">

    <div class="row">

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

            <div class="row">
                @include('public/partials/public_site_nav')
            </div>

            <div class="row">
                <div class="content-main-home container-fluid p-2 my-2 mx-auto">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 text-center mt-3 mb-4">
                            <img src="{{url('images/eat art logo_vrijstaand_zw.png')}}"
                            class="d-flex mx-auto home-main-eatart-logo" alt="eat-art logo small">
                            <h3 class="main-home-anno" >Sinds 2018</h3>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 bg-light text-center">
                            <h2>Inhoud</h2>
                            <article>
                                <h3>
                                    Wervende welkomstekst
                                </h3>
                                <p>
                                    wat is eatart plus call to action
                                </p>
                            </article>
                            <article>
                                <h3>
                                    Twee smaken Shop open of dicht
                                </h3>
                                <p>
                                    in 2 zinnen toelichting
                                </p>
                                <p>
                                    in 2 zinnen toelichting
                                </p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="col-2 pl-0">
            <div class="row mb-2 mt-4 ml-1 mr-5 p-1 justify-content-center public-shop-btnarea">
                <x-public.public-shop-button>

                </x-public.public-shop-button>
            </div>
            <div class="row mb-2 mt-4 ml-1 mr-5 justify-content-center public-shop-btnarea">
                {{-- if er is een sale dan alle sale namen --}}
                Nu Te Koop <br> Sale Naam
            </div>
        </div>

    </div>

</main>

@endsection









