@extends ('layouts.public')

@section('content')
<main class="main-public container-fluid mx-auto">

    @include('layouts/partials/public_site_nav')

    <div class="content-main-home container-fluid p-2 my-2 mx-auto">
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
                </article>
            </div>
        </div>
    </div>

</main>
@endsection









