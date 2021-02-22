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
                        <h2 class="h2-museum">
                            Museum
                        </h2>
                        <h2 class="h2-museum-of">
                            of
                        </h2>
                        <img src="{{url('images/eat art logo_vrijstaand_zw.png')}}"
                        class="mx-auto museum-main-eatart-logo" alt="eat-art logo small">
                    </div>

                </div>

                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 text-center">

                        <div class="wrapper">

                            <div class="row">
                                {{-- for each row collection name zwarte text op background hout --}}

                                @foreach ($products as $product)
                                <div class="col-10 col-lg-6 item">
                                    <div class="polaroid">
                                        <img src="{{$product->picture}}">
                                        <div class="caption p-1">
                                            {{$product->serie_name}}
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>

        <div class="col-2 pl-0">

        </div>

    </div>

</main>
@endsection
