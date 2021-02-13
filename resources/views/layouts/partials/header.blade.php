<div class="container-fluid fixed-top py-4 pr-0 mt-4 mb-2 mr-4">

    <div class="row p-0 ml-0 mr-4 my-auto header-bg">

        <div class="col-6 pl-4 my-auto mx-auto">
            <a href="" class="header-brand-webshop">
                <img src="{{url('images/eat art logo_vrijstaand_tn.png')}}"
                class="header-img-eatart pr-2" alt="eat-art logo small">
                Webshop
            </a>
        </div>



        <div class="col-6 pl-4 my-auto">
            <div class="d-flex justify-content-end align-items-center pr-2">
                @if (Route::has('login'))
                    <div class="brand-a1">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="eatart-a1 mx-2">Gebruiker pagina</a>
                            {{-- route logout link  --}}
                            <a href="{{ route('logout') }}" class="eatart-a1 mx-2">Logout</a>
                        @else
                            <a href="{{ route('login') }}" class="eatart-a1 mx-2">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="eatart-a1 mx-2">Registreren</a>
                            @endif
                        @endif
                    </div>
                @endif
            </div>
        </div>

    </div>



</div>

