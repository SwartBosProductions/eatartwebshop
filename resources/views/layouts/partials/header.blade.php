<div class="container-fluid fixed-top py-4 pr-0 mt-2 mb-2 mr-4">
    <div class="row p-0 ml-0 mr-4 my-auto header-bg">
        <div class="col-6 pl-4 my-auto">
            <a href="/current" class="header-brand-webshop">
                <img src="{{url('images/eat art logo_vrijstaand_tn.png')}}"
                class="header-img-eatart" alt="eat-art logo small">
                Webshop
            </a>
        </div>
        <div class="col-6 pl-4 my-auto">
            <div class="d-flex justify-content-end align-items-center pr-2">
                @if (Route::has('login'))
                    <div class="btn-group brand-a1" role="group">
                        @auth
                            <div class="btn p-2 m-1 btn-inlog-register">
                                <a href="{{ url('/dashboard') }}" class="eatart-a1 mx-2">
                                    Gebruiker pagina
                                </a>
                                {{-- route logout link  --}}
                            </div>
                            <div class="btn p-2 m-1 btn-inlog-register">
                                <a href="{{ route('logout') }}" class="eatart-a1 mx-2">
                                    Uitloggen
                                </a>
                            </div>
                        @else
                            <div class="btn p-2 m-1 btn-inlog-register">
                                <a href="{{ route('login') }}" class="eatart-a1 mx-2">
                                    Inloggen
                                </a>
                            </div>
                            @if (Route::has('register'))
                                <div class="btn p-2 m-1 btn-inlog-register">
                                    <a href="{{ route('register') }}" class="eatart-a1 mx-2">
                                        Registreren
                                    </a>
                                </div>
                            @endif
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

