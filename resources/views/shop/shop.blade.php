
@extends ('layouts.shop')

@section('content')

    <div class="container-fluid p-2 my-2 mx-auto main-shop-content">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-8 text-center">

                <div class="row">
                    @foreach ($sales as $sale)
                    <div class="col-6 bg-light">
                        <h2>{{$sale->sale_name}}</h2>
                    </div>
                    @endforeach
                    <div class="col-6 bg-light">
                        Sale searchfield/buttons
                    </div>
                </div>



                <div class="row p-2 shop-content">

                        @foreach ($products as $product)
                        <div class="col-3 p-2 m-2 ">
                            <section class="">
                                <a href={{route('shop-product', ['serie_name' => $product->serie_name])}}>
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


@endsection
