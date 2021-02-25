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

                    <div class=" col-10 col-lg-8 text-center">
                        <img src="{{url('images/eat art logo_vrijstaand_zw.png')}}"
                        class="mx-auto py-0 museum-main-eatart-logo" alt="eat-art logo">
                        <h2 class="pt-0 pb-2 mb-2 h2-museum-of">
                            Nieuws
                        </h2>
                    </div>

                </div>

                <div class="row justify-content-center mb-3 museum-content">

                    <div class="row justify-content-center mb-3">

                        <div class=" col-12 col-lg-10 bg-content-quick text-center">
                            <article>
                                <h3>
                                    DEMO DAY
                                </h3>
                                <p>
                                    Vrijdag 26 februari is Demo Day: de presentatie van de tussenstand van ons EatArt-project. Je kunt meekijken via de Google Meet. We zijn om 11.30 uur aan de beurt, maar volg vooral alle demo's vanaf 9.15 uur.
                                </p>
                            </article>
                            <hr>
                            <article>
                                <h3>
                                    EatArt blijkt gezond
                                </h3>
                                <p>
                                    Uit nieuw onderzoek van de universiteit van Harvard blijkt dat kunstconsumptie goed is voor lichaam en geest. Kunst-eters zijn gedurende een jaar lang vergeleken met fast-food-vreters en een controlegroep met een normaal dieet. Wat bleek? De kunsteters waren minder aangekomen en scoorden hoger op zowel geluk, creativiteit als intelligentie. Ook hadden zij een actiever liefdesleven. EatArt!
                                </p>
                            </article>
                            <hr>
                            <article>
                                <h3>
                                    Geruchten over livegang EatArt houden aan
                                </h3>
                                <p>
                                    Meerdere anonieme bronnen rondom NHL Stenden en CodeGorilla bevestigen dat een livegang van de EatArt Webshop aanstaande is. Deze zou gepland staan voor komend najaar. Folkert en Jorrit van ForestBlack waren niet bereikbaar voor commentaar, zij hadden het te druk met het voorbereiden van Demo Day.
                                </p>
                            </article>
                            <hr>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-2">

        </div>

    </div>

</main>
@endsection
