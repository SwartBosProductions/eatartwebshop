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
            <div class="row justify-content-center">
                <div class="content-main-home container-fluid p-2 my-2 mx-auto">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 text-center">
                            <h2 class="h2-upcomming">
                                Verwacht in de
                                <img src="{{url('images/eat art logo_vrijstaand_zw.png')}}"
                                class="mx-auto upcomming-main-eatart-logo" alt="eat-art logo small">
                                <div class="h2-upcomming-marked">
                                    WebShop
                                </div>
                            </h2>
                            <p class="p-upcomming">collecties waar nu aan gewerkt word</p>
                        </div>
                    </div>
                    <div class="row justify-content-center my-2">
                        <div class=" col-10 col-lg-8 bg-light text-center">
                            {{-- special series -> list --}}
                            <h3>
                                >>> Paas collectie <<<
                            </h3>
                            <i>
                            <h4>
                                Extra
                                <sub>
                                    voor de liefhebber !
                                </sub>
                            </h4>
                            </i>
                        </div>
                    </div>
                    <div class="row justify-content-center my-2">
                        <div class=" col-10 col-lg-8 bg-light text-center">
                            <h3 class="h3-upcomming">
                                >>> Werk in uitvoering <<<
                            </h3>
                            <p class="p-upcomming">
                                collectie thuiswerk
                                <sub>
                                    lockdown 2020/2021
                                </sub>
                            </p>
                            {{-- only for upcomming series -> list --}}
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
        </div>
        <div class="col-2 pl-0">

        </div>
    </div>
</main>
@endsection
