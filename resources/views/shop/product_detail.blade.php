@extends ('layouts.shop')

@section('content')
<main class="main-shop container-fluid mx-auto" >

    <div class="nav-sale container-fluid p-2 my-2 mx-auto">
        <div class="row justify-content-center">
            <div class=" col-12 col-lg-10 bg-light">
                <div class="row">
                    <div class="col-12 bg-light">
                        <h2>
                            Serie: naam van selected
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-shop-content container-fluid p-2 my-2 mx-auto">
        <div class="row justify-content-center">
            <div class=" col-10 col-lg-8 bg-light text-center">

                <div class="row p-2">

                    {{-- @foreach product in serie current id --}}
                    <div class="col-3 p-2 m-2">
                        <section class="">

                                {{-- = link naar product detail page / daar knop koop en gaat ie in de winkelmand --}}
                                {{-- <img src="product picture" alt="voorbeeld afbeelding van serie product" height="80"> --}}
                                {{-- * blur if sold --}}
                                <h3>
                                    picture
                                    product naam
                                </h3>

                            <div class="">
                                <h4>
                                    * description
                                </h4>
                                <h4>
                                    * designer name
                                    * if ditale link foreach
                                </h4>
                                <h4>
                                    * Wat willen we hier nog meer vertellen?
                                </h4>
                            </div>
                        </section>
                    </div>
                    {{-- @endforeach --}}

                </div>

            </div>
        </div>
    </div>

</main>
@endsection
