@extends ('layouts.shop')

@section('content')


    <div class="main-shop-content container-fluid p-1 my-1 mx-auto">

        <div class="row justify-content-center mb-3">

            <div class="col-10 col-lg-8">
                <div class="row p-2 serie-detail-content">
                    <div class="col-6">
                        <h2 class="h2-product-serie">
                            <strong>Serie :</strong>
                            {{$serie_name}}
                        </h2>
                        <h3 class="h3-product-designer">
                            <strong>Designer :</strong>
                            {{$designer}}
                        </h3>
                    </div>
                    <div class="col-6">
                        <div>
                            Hier komen 0 tot 3 linkjes moeten we nog aanpassen.
                        </div>
                    </div>

                </div>
            </div>

        </div>



        <div class="row justify-content-center my-1">

            <div class=" col-10 col-lg-8 text-center">

                <div class="row p-2">
                    <div class="col-12 px-2 pt-0 pb-2 product-detail-content">
                        @foreach ($products as $product)
                        <div class="row my-2 product-scroll-center" data-spy="scroll">

                            <div class="col-4">
                                <div class="row">
                                    <h3 class="h3-product-detail py-2 px-3 my-2 justify-content-arround">

                                    {{-- click picture enlarge in centerd frame --}}
                                    <img src="{{$product->picture}}" alt="afbeelding van het product"
                                        class=" mx-4 p-2 img-inlist-product">
                                        {{$product->product_name}}

                                    </h3>

                                </div>
                            </div>

                            <div class="col-6 py-4">
                                <div class="row p-2 product-detail">
                                    <h4 class="h4-product-detail">
                                        <strong>Beschrijving : </strong>
                                        {{$product->product_name  }}
                                    </h4>
                                    <p class="p-product-description">
                                        {{$product->description}}
                                    </p>
                                </div>
                            </div>

                            <div class="col-2 py-4">
                                <div class="row p-1 product-price my-auto">
                                    <h4 class="h4-product-price p-2">
                                        {{-- nice to have old fashion price stamp gun frame in fluor orange --}}
                                        &euro; {{$product->price}}
                                    </h4>
                                </div>
                                <div class="row p-0 m-0 justify-content-end">
                                    <sup class=""">
                                        excl. BTW
                                    </sup>
                                </div>




                                <div class="row px-1 py-4 justify-content-center">
                                    <div class="">
                                        <a href="{{ route('addToCart', ['id' => $product->id]) }}"
                                            class="btn btn-inlog-register eatart-a1 product-buy">
                                            In<br>Winkelwagen
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>

    </div>

@endsection
