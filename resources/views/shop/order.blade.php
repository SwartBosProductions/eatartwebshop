
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
                        <?php $subtotal = 0 ?>
                        @foreach ($products as $product)
                        <tr>
                            <td><img src="{{$product['picture']}}" alt=""></td>
                            <td>{{$product['name']}}</td>
                            <td>{{$product['designer']}}</td>
                            <td>&euro;&nbsp;{{$product['price']}}</td>
                        </tr>
                        <?php $subtotal += $product['price']?>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Subtotaal:</td>
                            <td>&euro;&nbsp;{{$subtotal}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Verzendkosten:</td>
                            <td>&euro;&nbsp;6.95</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Totaal te betalen:</td>
                            <td>&euro;&nbsp;{{$subtotal += 6.95}}</td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
        <div>
            <p>Controleer alstublieft uw bestelling en het verzendadres.</p>
            <p>Uw adresgegevens kunt u aanpassen in uw gebruiksprofiel.</p>
            <p>Klopt alles? Ga dan naar betalen.</p>
            <a href="/shop/payment">Naar betalen</a>
        </div>
        <div class="row justify-content-center">
            <div class=" col-10 col-lg-8 text-center">
                <h2>Verzendgegevens</h2>
                <p>{{$user->full_name}}</p>
                <p>{{$user->street_name}}&nbsp;{{$user->house_num}}&nbsp;{{$user->house_num_addition}}</p>
                <p>{{$user->postal_code}}&nbsp;{{$user->city}}</p>
            </div>
        </div>
    </div>

@endsection
