
@extends ('layouts.shop')

@section('content')
<main class="container-fluid mx-auto main-shop">

    <div class="container-fluid p-2 my-2 mx-auto nav-sale">
        <div class="row justify-content-end mr-4">

            <div class="col-2">
                <x-shop.shoppingcart_icon>

                </x-shop.shoppingcart_icon>
            </div>

        </div>
    </div>

    <div class="container-fluid p-2 my-2 mx-auto main-shop-content">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-8 bg-light text-center">

                <div class="row">
                    @foreach ($sales as $sale)
                    <div class="col-6 bg-light">
                        <h2>{{$sale->sale_name}}</h2>
                    </div>
                    @endforeach
                    <div class="col-4 bg-warning">
                        Sale searchfield/buttons
                    </div>
                </div>



                <div class="row p-2">

                        @foreach ($products as $product)
                        <div class="col-3 p-2 m-2">
                            <section class="">
                                <a href="#">
                                    {{-- = link naar product detail page / daar knop koop en gaat ie in de winkelmand --}}
                                    <h3>
                                        Serie: {{$product->serie_name}}
                                    </h3>
                                    <img src="{{$product->picture}}" alt="voorbeeld afbeelding van serie product" height="80">
                                </a>
                                <div class="">
                                    <h4>
                                        * Nog 2 stuks beschikbaar
                                    </h4>
                                    <h4>
                                        * Wat willen we hier nog meer vertellen?
                                    </h4>
                                </div>
                            </section>
                        </div>
                        @endforeach

                </div>
            </div>
        </div>
    </div>

</main>
@endsection
