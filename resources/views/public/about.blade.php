@extends ('layouts.public')

@section('content')

<main class="main-public container-fluid mx-auto">

    <div class="row">

        <div class="col-2">

            <div class="row mt-2 mr-1 justify-content-end">
                <x-public.main-home-button>
                    {{ __('Home') }}
                </x-public.main-home-button>
                {{--home button  --}}
            </div>
            <div class="row mt-4 mr-1 justify-content-end">
                @include('public/partials/about_eatart_nav')
            </div>

        </div>

        <div class="col-8">

            <div class="row">
                @include('public/partials/public_site_nav')
            </div>

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

        </div>

        <div class="col-2">

        </div>

    </div>

</main>
@endsection
