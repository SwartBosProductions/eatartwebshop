
@extends ('layouts.shop')

@section('content')


    <div class="main-shop-content container-fluid p-2 my-2 mx-auto">

        <div class="row justify-content-center">
            <div class=" col-10 col-lg-8 text-center">
                <h2>Uw bestelling</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class=" col-10 col-lg-8 bg-light text-center">
                <table class="table table-striped table-hover table-bordered">

                    <thead>
                        <tr>
                            <th>Plaatje</th>
                            <th>Product</th>
                            <th>Ontwerper</th>
                            <th>Prijs</th>
                        </tr>
                    </thead>

                    <tbody>
                        {{$subtotal = 0}}
                        @foreach ($products as $product)
                        <tr>
                            <td><img src="{{$product['picture']}}" alt=""></td>
                            <td>{{$product['name']}}</td>
                            <td>{{$product['designer']}}</td>
                            <td>{{$product['price']}}</td>
                        </tr>
                        {{$subtotal += $product['price']}}
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Subtotaal:</td>
                            <td>&euro;{{$subtotal}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Verzendkosten:</td>
                            <td>&euro; 6.95</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Totaal te betalen:</td>
                            <td>&euro;{{$subtotal += 6.95}}</td>
                        </tr>
                    </tbody>

                </table>


            </div>
        </div>
    </div>

@endsection
