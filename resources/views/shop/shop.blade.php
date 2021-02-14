
@extends ('layouts.shop')

@section('content')
<main class="main-shop container-fluid mx-auto" >

    <div class="nav-sale container-fluid p-2 my-2 mx-auto">
        <div class="row justify-content-center">
            <div class=" col-12 col-lg-10 bg-light text-center">
                <div class="row">
                    <div class="col-3 bg-light">
                        <h2>Sale naam</h2>
                    </div>
                    <div class="col-6 bg-light">
                        <p>Sale description</p>
                    </div>
                    <div class="col-3 bg-warning">
                        Sale searchfield/buttons
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-shop-content container-fluid p-2 my-2 mx-auto">
        <div class="row justify-content-center">
            <div class=" col-10 col-lg-8 bg-light text-center">
                <article>
                    <h3>
                        Serie naam 1
                    </h3>
                    <img src="images/is-dit-kunst-of-kan-het-weg.png" alt="">
                </article>
                <article>
                    <h3>
                        Serie naam 2
                    </h3>
                    <img src="images/is-dit-kunst-of-kan-het-weg.png" alt="">
                </article>
                <article>
                    <h3>
                        Serie naam 3
                    </h3>
                    <img src="images/is-dit-kunst-of-kan-het-weg.png" alt="">
                </article>
                <article>
                    <h3>
                        Serie naam 4
                    </h3>
                    <img src="images/is-dit-kunst-of-kan-het-weg.png" alt="">
                </article>
                <article>
                    <h3>
                        Serie naam 5
                    </h3>
                    <img src="images/is-dit-kunst-of-kan-het-weg.png" alt="">
                </article>
                <article>
                    <h3>
                        Serie naam 6
                    </h3>
                    <img src="images/is-dit-kunst-of-kan-het-weg.png" alt="">
                </article>
            </div>
        </div>
    </div>

</main>
@endsection
