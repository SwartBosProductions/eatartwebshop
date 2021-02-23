@extends ('layouts.shop')

@section('content')
<main class="container-fluid mx-auto main-shop " >

    <div class="container-fluid p-2 my-2 mx-auto nav-sale ">
        <div class="row justify-content-center">
            <div class=" col-12 col-lg-10 bg-light">


                <div class="row">
                    <div class="col-3 bg-light">
                        <h2>Winkelwagen</h2>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="container-fluid p-2 my-2 mx-auto main-shop-content ">
        <div class="row justify-content-center">
            <div class=" col-10 col-lg-8 bg-light text-center">


                <h2>In Winkelwagen</h2>
                @if (is_countable($items) && count($items) > 0)
                    @foreach ($items as $item)
                    <article>
                    <h3>
                        <img src="{{$item['picture']}}" alt="afbeelding van het item" height="80">
                    </h3>
                    </article>
                    <article>
                        <h3>
                            Naam: {{$item['name']}}
                        </h3>
                    </article>
                    <article>
                        <h3>
                            Prijs: {{$item['price']}}
                        </h3>
                    </article>
                    @endforeach
                @else
                <article>
                    <h3>
                        Geen producten in winkelwagen
                    </h3>
                </article>
                @endif




            </div>
        </div>
    </div>

</main>
@endsection
