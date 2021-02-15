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
                        <h2>Nu in de Shop Verkrijgbaar</h2>

                        <p>login om te winkelen of kom je een kijkje nemen?</p>

                        <p>laat zien wat er momenteel in de winkel te koop is zonder koop functionaliteit</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-2">

        </div>

    </div>

</main>
@endsection
