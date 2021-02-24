@extends ('layouts.shop')

@section('content')

    <div class="main-shop-content container-fluid p-1 my-1 mx-auto">

        <div class="row justify-content-center mb-3">

            <div class="col-10 col-lg-8">
                <div class="row p-2 serie-detail-content">
                    <div class="col-6">
                        <h2>Winkelwagen</h2>

                    </div>
                    <div class="col-6">
                        <div class="row mt-2 mr-1 justify-content-end">
                            <x-shop.order-button>
                            </x-shop.order-button>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="row justify-content-center my-1">

            <div class=" col-10 col-lg-8 text-center">

                <div class="row p-2">
                    <div class="col-12 px-2 pt-0 pb-2 product-detail-content">

                        @if (is_countable($items) && count($items) > 0)
                        @foreach ($items as $item)

                        <div class="row my-2 product-scroll-center" data-spy="scroll">

                            <div class="col-4">
                                <div class="row">
                                    <h3 class="h3-product-detail py-2 px-3 my-2 justify-content-arround">
                                    <img src="{{$item['picture']}}" alt="afbeelding van het product"
                                        class=" mx-4 p-2 img-inlist-cart">
                                        <br>
                                        {{$item['name']}}
                                    </h3>
                                </div>
                            </div>

                            <div class="col-6 py-4">

                                <div class="row p-2 product-detail">
                                    <h4 class="h4-product-detail">
                                        <strong>Designer : </strong>
                                        {{$item['designer']}}
                                    </h4>
                                    <p class="p-product-description">
                                        {{$item['description']}}
                                    </p>
                                </div>
                            </div>

                            <div class="col-2 py-4">
                                <div class="row p-1 product-price my-auto">
                                    <h4 class="h4-cart-price p-2">
                                        {{-- nice to have old fashion price stamp gun frame in fluor orange --}}
                                        &euro; {{$item['price']}}
                                    </h4>
                                </div>
                                <div class="row p-0 m-0 justify-content-end">
                                    <sup class="">
                                        excl. BTW
                                    </sup>
                                </div>
                                <div class="row p-1 mt-2 justify-content-center">
                                    {{-- Lelijk linkje om backend mee te testen --}}
                                    <a href="{{ route('removeFromCart', ['id' => $item['id']]) }}">Verwijderen</a>
                                    {{-- <x-shop.delete-cart-button>
                                    </x-shop.delete-cart-button> --}}
                                </div>
                            </div>

                        </div>
                        @endforeach

                        @else
                        <div class="row p-2">
                            <div class="col-12 px-2 pt-0 pb-2">
                                <h3>
                                    Geen producten in winkelwagen !
                                </h3>
                            </div>
                        </div>
                        @endif

                    </div>
                </div>

            </div>

        </div>

    </div>

@endsection
