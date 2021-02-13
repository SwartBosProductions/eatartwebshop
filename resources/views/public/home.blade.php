@extends ('layouts.public')

@section('content')
<main class="main-public container-fluid mx-auto">

    @include('public/partials/public_site_nav')

    <div class="content-main-home container-fluid p-2 my-2 mx-auto">

        <div class="row justify-content-center">
            <div class="col-10 col-lg-8 text-center mt-3 mb-4">
                <img src="{{url('images/eat art logo_vrijstaand_zw.png')}}"
                class="d-flex mx-auto" height="124" alt="eat-art logo small">
                <h2>Kreet Missie</h2>

            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-10 col-lg-8 bg-light text-center">
                <h2>Inhoud</h2>
                <article>
                    <h3>
                        Wervende welkomstekst
                    </h3>
                    <p>
                        wat is eatart plus call to action
                    </p>
                </article>
                <article>
                    <h3>
                        Twee smaken Shop open of dicht
                    </h3>
                    <p>
                        in 2 zinnen toelichting
                    </p>
                    <p>
                        in 2 zinnen toelichting
                    </p>
                </article>
            </div>
        </div>
    </div>

</main>
@endsection









