@extends ('layouts.public')

@section('content')

<main class="main-public container-fluid mx-auto">

    <div class="row">

        <div class="col-2">

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

            <div class="content-main-home container-fluid p-2 my-2 mx-auto">

                <div class="row justify-content-center">

                    <div class="col-10 col-lg-8 mt-3 text-center">

                        <div class="row d-flex justify-content-center">
                            <img src="{{url('images/eat art logo_vrijstaand_zw.png')}}"
                            class="current-eatart-logo" alt="eat-art logo">
                            <h2 class="h2-current mt-3">
                                Fresh !
                            </h2>
                        </div>

                        <div class="row justify-content-center">
                            <p class="p-upcomming">
                                De recente collecties
                            </p>
                        </div>

                    </div>

                </div>

                <div class="row justify-content-center my-2">
                    <div class=" col-10 col-lg-8 bg-light text-center">
                        <h3>
                            Collectie:
                        </h3>
                        <h4>
                            <i> Valentijn collectie 2021</i>
                        </h4>

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


                <div class="row justify-content-center">



                    <div class=" col-10 col-lg-8 bg-light text-center">
                        <h3>
                            Vrijwerk :
                        </h3>
                        <h4>
                            <i> 1e semester vak:toegepast design 2021 </i>
                        </h4>
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

        </div>

    </div>

</main>
@endsection
