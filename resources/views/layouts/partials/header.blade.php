<div class="container-fluid fixed-top py-4 pr-0 mt-2 mb-2 mr-4">
    <div class="row p-0 ml-0 mr-4 my-auto header-bg">
        <div class="col-6 pl-4 my-auto">
            <a href="home" class="header-brand-webshop">
                <img src="{{url('images/eat art logo_vrijstaand_tn.png')}}"
                class="header-img-eatart" alt="eat-art logo small">
                Webshop <sub class="header-brand-webshop-more"> &nbsp; & more</sub>
            </a>
        </div>
        <div class="col-6 pl-4 my-auto">
            <div class="d-flex justify-content-end align-items-center pr-2">
                @if (Route::has('login'))
                    <div class="btn-group brand-a1" role="group">
                        @auth
                            {{-- if admin page hide/inactive button --}}
                            <div class="btn p-2 m-1 btn-inlog-register">
                                <a href="{{ url('/user/profile') }}" class="eatart-a1 mx-2">
                                    Gebruiker pagina
                                    {{-- get first/last name from database --}}
                                </a>
                            </div>
                            <form action="{{ route('logout') }}" method="POST"
                                class="btn p-2 m-1 btn-inlog-register">
                                    @csrf
                                    <a href="route('logout')" class="eatart-a1 mx-2"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        Uitloggen
                                    </a>
                            </form>
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
