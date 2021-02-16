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
                    <div class="col-10 col-lg-8 bg-light text-center">
                        <h2>Contact</h2>
                        <article>
                            <h3>
                                EatArt
                            </h3>
                            <p>
                                Contact gegevens / map plugin?
                            </p>
                            <p>
                                openingstijden fysieke shop
                            </p>
                        </article>
                        <article>
                                    <a href="https://www.facebook.com/eatart/" type="button" class="dropdown-item btn btn-group-eatartsocial">
                                        <img src="{{url('icons/iconmonstr-facebook-2.svg')}}"
                                        class="eatart-social-icon" alt="eat-art icon facebook">
                                    </a>
                                    <a href="https://twitter.com/eatart" type="button" class="dropdown-item btn btn-group-eatartsocial">
                                        <img src="{{url('icons/iconmonstr-twitter-2.svg')}}"
                                        class="eatart-social-icon" alt="eat-art icon twitter">
                                    </a>
                                    <a href="https://www.instagram.com/eatart/" type="button" class="dropdown-item btn btn-group-eatartsocial">
                                        <img src="{{url('icons/iconmonstr-instagram-12.svg')}}"
                                        class="eatart-social-icon" alt="eat-art icon instagram">
                                    </a>
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










