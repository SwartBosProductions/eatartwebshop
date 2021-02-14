@extends ('layouts.shop')

@section('content')
<main class="main-shop container-fluid mx-auto" >

    <div class="nav-sale container-fluid p-2 my-2 mx-auto">
        <div class="row justify-content-center">
            <div class=" col-12 col-lg-10 bg-light">
                <div class="row">
                    <div class="col-3 bg-light">
                        <h2>Winkelwagen</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-shop-content container-fluid p-2 my-2 mx-auto">
        <div class="row justify-content-center">
            <div class=" col-10 col-lg-8 bg-light text-center">
                <h2>In Winkelwagen</h2>
                <article>
                    <h3>
                        Product 1
                    </h3>
                </article>
                <article>
                    <h3>
                        Product 2
                    </h3>
                </article>
            </div>
        </div>
    </div>

</main>
@endsection
