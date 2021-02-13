@extends ('layouts.public')


@section('content')
<main class="main-public container-fluid mx-auto">

    @include('public/partials/public_site_nav')

    <div class="content-main-home container-fluid p-2 my-2 mx-auto">
        <div class="row justify-content-center">
            <div class=" col-10 col-lg-8 bg-light text-center">
                <h2>About</h2>
                <article>
                    <h3>
                        EatArt hoe het allemaal begon
                    </h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo sunt itaque, dolorem aliquid quo cum deleniti in doloremque doloribus vero aperiam consectetur consequatur. Voluptas quo excepturi, exercitationem doloribus odio aperiam.
                    </p>
                </article>
                <article>
                    <h3>
                        EatArt wat de opdracht nu echt inhoud
                    </h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo sunt itaque, dolorem aliquid quo cum deleniti in doloremque doloribus vero aperiam consectetur consequatur. Voluptas quo excepturi, exercitationem doloribus odio aperiam.
                    </p>
                </article>
                <article>
                    <h3>
                        EatArt wat vinden studenten en klanten van eatart
                    </h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo sunt itaque, dolorem aliquid quo cum deleniti in doloremque doloribus vero aperiam consectetur consequatur. Voluptas quo excepturi, exercitationem doloribus odio aperiam.
                    </p>
                </article>
            </div>
        </div>
    </div>

</main>
@endsection
