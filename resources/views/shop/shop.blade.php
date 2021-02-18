
@extends ('layouts.shop')

@section('content')
<main class="main-shop container-fluid mx-auto" >

    <div class="nav-sale container-fluid p-2 my-2 mx-auto">
        <div class="row justify-content-center">
            <div class=" col-12 col-lg-10 bg-light text-center">
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
            </div>
        </div>
    </div>

    <div class="main-shop-content container-fluid p-2 my-2 mx-auto">
        <div class="row justify-content-center">
            <div class=" col-10 col-lg-8 bg-light text-center">
                @foreach ($products as $product)
                <section>
                    <h3>
                        {{$product->serie_name}}
                    </h3>
                    <img src="{{$product->picture}}" alt="voorbeeld afbeelding van serie product" height="80">
                </section>
                @endforeach
            </div>
        </div>
    </div>

</main>
@endsection
