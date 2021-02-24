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
                    <div class=" col-10 col-lg-8 bg-light text-center">
                        <h2>Algemene voorwaarden</h2>
                        <article>
                            <h3>
                                Begripsbepalingen
                            </h3>
                            <p>
                                Afhakken van een Os, en hoe men daar mede handeldt, en hoe men de stukken best gebruikt. Als de Os doormidden gehakt is, dan moet men ieder zyde nog eens midden door laaten hakken, maar zo, dat de voorste zyde, het kortste is, om dat de ribbenstukken dan veel beeter uitkomen.Het bloedige van den hals, met den Afval; legt men byzonder, en is geschikt tot Huspot; en kan, na dat het uitgetrokken is en een dag of zes in 't zout gelegen heeft, gegeeten worden.
                            </p>
                        </article>
                        <article>
                            <h3>
                                Artikel 1
                            </h3>
                            <p>
                                De Harsten laat men een dag of vyf in het zout leggen en men moet ze niet te groot laaten hakken, om dat ze anders te ongeschikt zyn, en ieder een doet dit naa de groote van zyn huisgezin, ook zyn die Harsten dus zeer goed om in den Oven gezet en gebraaden te worden. Het vleesch om in de Kuip in te zouten, daar neemt men toe de zes klapstukken van de buyk, de twee staartstukken, de schouwderbladeren, de twee borststukken, de vier andere ribben, als men de twee beste ribben wil in de rook hangen, anders kan men ook de Paterstukken inzouten, en dan nog de twee ongeschikte ribben die by de schouders zitten; en men laat die stukken groot of klein hakken naa dat men het wil hebben en het huisgezin groot is.
                            </p>
                        </article>
                        <article>
                            <h3>
                                Artikel 2
                            </h3>
                            <p>
                                Het niervet is goed om te smelten, en te bewaren om het zelve van tyd tot tyd te gebruiken: de pens met de darmen laat men door de pens-vrouw wel ter degen schoon maaken, en men kykt het naderhand zelve naa, of het wel schoon is om het zindelyk te behandelen; Menschen van eenig vermogen gebruiken geen pooten en geen kop, maar de tong is goed om te rooken, En hoe men het vleesch zouten en rooken moet, zal ik hier naa zeggen.
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
