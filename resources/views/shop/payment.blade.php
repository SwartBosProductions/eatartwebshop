@extends ('layouts.public')

@section('content')

<main class="main-public container-fluid mx-auto">

    <div class="row">

        <div class="col-2">

            <div class="row mt-2 mr-1 justify-content-end">
                <x-public.main-home-button>
                    {{ __('Home') }}
                </x-public.main-home-button>
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
                    <div class=" col-10 col-lg-8 text-center">
                        <img src="{{url('images/eat art logo_vrijstaand_zw.png')}}" class="mx-auto py-0 museum-main-eatart-logo" alt="eat-art logo">
                        <h2 class="pt-0 pb-2 mb-2 h2-museum-of">
                            Over Eat Art
                        </h2>
                    </div>
                </div>

                <div class="row justify-content-center mb-3 museum-content">

                    <div class=" col-12 col-lg-10 text-center bg-content-quick">
                        <h1>Hoera! U heeft betaald.</h1>
                        <p>Dat ging sneller dan verwacht, omdat we Mollie nog moeten implementeren.</p>
                        <p>En zo zijn er wel meer losse eindjes in dit project die we de komende maanden gaan vastknopen.</p>
                        <p>U ontvangt een email met een bevestiging van uw bestelling.</p>
                        <p>Een keer per week sturen we de bestelde producten op, dan ontvangt u weer een mailtje met een Track & Trace code.</p>
                        <p>In uw gebruiksprofiel kunt u de status van uw bestelling ook inzien.</p>
                    </div>

                </div>

            </div>

        </div>

        <div class="col-2">

        </div>

    </div>

</main>
@endsection
