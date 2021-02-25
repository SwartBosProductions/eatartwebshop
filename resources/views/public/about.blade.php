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
                        <img src="{{url('images/eat art logo_vrijstaand_zw.png')}}"
                        class="mx-auto py-0 museum-main-eatart-logo" alt="eat-art logo">
                        <h2 class="pt-0 pb-2 mb-2 h2-museum-of">
                            Over Eat Art
                        </h2>
                    </div>
                </div>

                <div class="row justify-content-center mb-3 museum-content">

                    <div class=" col-12 col-lg-10 text-center bg-content-quick">
                        <article>
                            <h3>
                                EatArt: hoe het allemaal begon
                            </h3>
                            <p>
                                Studenten Docent Beeldende Kunst en Vormgeving van NHL Stenden in Leeuwarden volgen in hun tweede jaar het vak Toegepaste Vormgeving. Het oorspronkelijke idee van EatArt was om een snackmachine te vullen met kunstvoorwerpen. Toen dit te bewerkelijk bleek is gekozen voor een prachtige kast in het Document Centre. Elke student maakt een serie van vier producten die als een 'kunstsnack' te koop zijn bij de repro.
                            </p>
                        </article>
                        <article>
                            <h3>
                                EatArt: de opdracht
                            </h3>
                            <p>
                                Vanwege corona komen docenten en studenten al een jaar vrijwel niet meer fysiek op school. Ook kunnen opa's en oma's en andere belangstellenden de producten niet gemakkelijk kopen. Daarnaast leeft de wens om de producten te tonen aan een breder publiek. De opdracht is om een eenvoudige webshop te bouwen. Omdat de shop maar een gedeelte van het jaar open zal zijn moet de website ook een museale functie hebben. Tot slot is er de behoefte om allerlei soorten andere NHL-werkstukken te kunnen verkopen tijdens een eindejaarsuitverkoop. Het logo is aangeleverd door NHL Stenden en bestaat uit geknipte letters van snoeprepen. Look en feel van de website mocht rauw/punkachtig zijn.
                            </p>
                        </article>
                        <article>
                            <h3>
                                EatArt: de oplossing
                            </h3>
                            <p>
                                Een belangrijke noot die ForestBlack heeft gekraakt in het functioneel ontwerp is het onderscheid tussen museum en shop. We hebben ervoor gekozen een harde scheidslijn te trekken: voor de shop moet je je eerst registreren en inloggen. In het publieke gedeelte is iedereen welkom en kun je alle collecties bekijken, ook de huidige collectie die in de shop te koop is. Een belangrijk onderscheid in het datamodel is dat collecties intact blijven, ook als ze niet meer te koop zijn: een collectie wordt bepaald door de groep makers. Daarnaast werken we met Sales en een Sale wordt bepaald door de periode van verkoop. Dat kunnen ook producten zijn die niet tot een collectie behoren, bijvoorbeeld bij de eindejaarsverkoop.
                            </p>
                        </article>
                        <article>
                            <h3>
                                EatArt: het ontwerp
                            </h3>
                            <p>
                                Als achtergrond hebben we gekozen voor het materiaal waar de kast van gemaakt is. Zowel in de shop als in het publieke gedeelte tonen we steeds één van de vier producten uit een serie van een designer. De bezoeker kan doorklikken naar de hele serie en in de shop daar ook tot aankoop overgaan.
                            </p>
                        </article>
                        <article>
                            <h3>
                                EatArt: klantcontact
                            </h3>
                            <p>
                                Tijdens de projectperiode hebben we driemaal overlegd met het productiehuis van de NHL. De eerste keer hebben we doorgevraagd over de wensen. De tweede keer hebben we ons functioneel ontwerp en datamodel gepresenteerd en gefinetuned. De derde keer hebben we de eerste impressies gedeeld, ook met de twee docenten Vormgeving. Dit leverde nuttige feedback op.
                            </p>
                        </article>
                        <article>
                            <h3>
                                EatArt: Work in Progress
                            </h3>
                            <p>
                                De website is nog lang niet klaar. Folkert en Jorrit nemen een weekje vrij en kijken daarna wat er volgens hen nodig is om het project af te ronden richting production. Het eerstvolgende overleg met NHL Stenden zal leiden tot een go of no go, waarbij we ook de randvoorwaarden voor implementatie aan bod laten komen (veiligheid, betalingen, beheer etc).
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
