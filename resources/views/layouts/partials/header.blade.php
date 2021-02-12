

    <div class="container-fluid fixed-top py-4 pr-0 mt-4 mb-2 mr-4">

        <div class="row bg-dark p-2 pl-4 mr-4">

            <div class="col-6 pl-4">
                <div class="row">
                    <div class="col-6 pr-0">
                        <img src="{{url('images/eat art logo_vrijstaand_tn.png')}}"
                        class="d-flex mx-auto" alt="eat-art logo small">
                    </div>
                    <div class="col-6 pl-0">
                        <h1 class="">Webshop</h1>
                    </div>
                </div>
                <div class="row mx-2 my-2">
                    <div class="col-12">
                        <div class="btn-group justify-content-center mx-auto">
                            <a href="/news" type="button" class="btn btn-sm btn-outline-secondary my-auto">
                                Nieuws
                            </a>
                            <a href="/about" type="button" class="btn btn-sm btn-outline-secondary my-auto">
                                About
                            </a>
                            <a href="/contact" type="button" class="btn btn-sm btn-outline-secondary my-auto">
                                Contact
                            </a>
                            sociale media picto's
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-6 pr-2 my-auto">
                <div class="d-flex justify-content-end align-items-center pr-2">
                    @if (Route::has('login'))
                        <div class="brand-a1">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="eatart-a1 mx-2">Username Profile page</a>
                                {{-- route logout link  --}}
                                <a href="{{ route('logout') }}" class="eatart-a1 mx-2">Logout</a>
                            @else
                                <a href="{{ route('login') }}" class="eatart-a1 mx-2">Login</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="eatart-a1 mx-2">Register</a>
                                @endif
                            @endif
                        </div>
                    @endif
                </div>
            </div>

        </div>

    </div>

</header>
