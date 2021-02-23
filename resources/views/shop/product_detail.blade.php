@extends ('layouts.shop')

@section('content')


    <div class="main-shop-content container-fluid p-2 my-2 mx-auto">

        <div class="row justify-content-center">

            <div class="col-10 col-lg-8 bg-light">
                <div class="row">
                    <div class="col-10 col-lg-8 bg-light">
                        <h2>
                            Serie: {{$serie_name}}
                        </h2>
                        <h2>
                            Designer: {{$designer}}
                        </h2>
                        <h2>
                            Hier komen 0 tot 3 linkjes moet ik nog aanpassen.
                        </h2>
                    </div>
                </div>
            </div>

        </div>



        <div class="row justify-content-center">

            <div class=" col-10 col-lg-8 bg-light text-center">

                <div class="row p-2">

                    {{-- @foreach product in serie current id --}}
                    @foreach ($products as $product)
                    <div class="col-3 p-2 m-2">
                        <section class="">

                                {{-- = link naar product detail page / daar knop koop en gaat ie in de winkelmand --}}
                                {{-- <img src="product picture" alt="voorbeeld afbeelding van serie product" height="80"> --}}
                                {{-- * blur if sold --}}
                                <h3>
                                    <img src="{{$product->picture}}" alt="afbeelding van het product" height="80">
                                    {{$product->product_name}}
                                </h3>

                            <div class="">
                                <h4>
                                    {{$product->description}}
                                </h4>
                                <h4>
                                    &euro; {{$product->price}}
                                </h4>
                                <h4>
                                    * Meer info & koopknop
                                    <a href="{{ route('addToCart', ['id' => $product->id]) }}">Voeg toe aan winkelwagen</a>
                                </h4>
                            </div>
                        </section>
                    </div>
                    @endforeach
                    {{-- @endforeach --}}

                </div>

            </div>

        </div>
    </div>

@endsection
