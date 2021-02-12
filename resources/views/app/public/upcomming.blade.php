@extends ('layouts.public')

@section('content')
<main class="main-public container-fluid mx-auto">

    @include('layouts/partials/public_site_nav')

    <div class="content-main-home container-fluid p-2 my-2 mx-auto">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-8 bg-light text-center">
                <h2>Verwacht in de EatArt Shop</h2>

                <p>aankondiging toekomstige sales</p>

                <p>collecties waar nu aan gewerkt word</p>

            </div>
        </div>
    </div>

</main>
@endsection
