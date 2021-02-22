@extends ('layouts.public')

@section('content')

<main class="main-public container-fluid mx-auto">

    <div class="row">

        <div class="col-2">

            <div class="row mt-2 mr-1 justify-content-end">
                <x-public.main-home-button>
                    {{ __('Home') }}
                </x-public.main-home-button>
                {{--home button  --}}
            </div>
            <div class="row mt-4 mr-1 justify-content-end">
                @include('public/partials/about_eatart_nav')
            </div>

        </div>

        <div class="col-8">

            <div class="row">
                @include('public/partials/public_site_nav')
            </div>

            <div class="content-main-home container-fluid p-2 my-2 mx-auto">
                <div class="row justify-content-center">
                    <div class=" col-10 col-lg-8 bg-light text-center">
                        <h2>Museum of EatArt</h2>

                        <p>De geschiedenis van EatArt sales/collections/series</p>
                        <p>wat geweest is</p>

                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class=" col-10 col-lg-8  text-center">

                        <div class="wrapper">

                        <div class="item">
                            <div class="polaroid"><img src="https://image.ibb.co/b8UJBc/administration_architecture_big_ben_221166.jpg">
                            <div class="caption">Londen</div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="polaroid"><img src="https://image.ibb.co/mmyvrc/anniversary_balloons_birthday_68369.jpg">
                            <div class="caption">Ballonnen</div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="polaroid"><img src="https://image.ibb.co/hQaarc/antique_blur_camera_828378.jpg">
                            <div class="caption">Camera</div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="polaroid"><img src="https://image.ibb.co/crFarc/pexels_photo_100756.jpg">
                            <div class="caption">Bloem</div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="polaroid"><img src="https://image.ibb.co/fvekrc/action_adult_art_673649.jpg">
                            <div class="caption">Regenboog</div>
                            </div>
                        </div>

                        </div>

                    </div>
                </div>













                <div class="row justify-content-center">
                    <div class=" col-10 col-lg-8 bg-light text-center">
                        @foreach ($products as $product)
                        <section>
                            <h3>
                                {{$product->serie_name}}
                            </h3>
                            <img src="{{$product->picture}}" alt="voorbeeld afbeelding van serie product" height="160">
                        </section>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>

        <div class="col-2 pl-0">
            <div class="row mb-2 mt-4 ml-1 mr-5 p-1 justify-content-center public-shop-btnarea">
                <x-public.public-shop-button>

                </x-public.public-shop-button>
            </div>
            <div class="row mb-2 mt-4 ml-1 mr-5 justify-content-center public-sale-area">
                {{-- if er is een sale dan for each sale namen anders hidden ivm opmaak page--}}
                Nu Te Koop <br> Sale Naam
            </div>

            <div class="row mb-2 mt-4 ml-1 mr-5 justify-content-center public-repro-area">

                <a href="https://www.nhlstenden.com/">
                    <img src="{{url('images/NHL_Stenden_logo_NL_blue_RGB.png')}}"
                        class="side-logo-nhlstenden" alt="nhl-stenden logo">
                </a>

                <a href="https://dcnhlstenden.com/">
                    <div class="repro-side-title py-2">
                    Document Centre
                    </div>
                </a>

            </div>

        </div>

    </div>

</main>
@endsection
