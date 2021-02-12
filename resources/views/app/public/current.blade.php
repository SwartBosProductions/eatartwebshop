@extends ('layouts.public')

@section('content')
<main class="main-public container-fluid mx-auto">

    @include('layouts/partials/public_site_nav')

    <div class="content-main-home container-fluid p-2 my-2 mx-auto">
        <div class="row justify-content-center">
            <div class=" col-10 col-lg-8 bg-light text-center">
                <h2>Nu in de Shop Verkrijgbaar</h2>

                <p>login om te winkelen of kom je een kijkje nemen?</p>

                <p>laat zien wat er momenteel in de winkel te koop is zonder koop functionaliteit</p>
            </div>
        </div>
    </div>

</main>
@endsection
