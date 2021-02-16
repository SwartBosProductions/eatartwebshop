<x-guest-layout>
    <x-auth.auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-auth.application-logo width="82" />
            </a>
        </x-slot>

        <div class="card-body">
            <!-- Validation Errors -->
            <x-auth.auth-validation-errors class="mb-4" :errors="$errors" />


            <form method="POST" action="{{ route('register') }}">
                    @csrf
                <div class="col-12">

                    <!-- Name -->
                    <div class="row">

                        <div class="col-5">
                            <div class="form-group">
                                <x-auth.label for="first_name" :value="__('Voornaam')" />

                                <x-auth.input id="first_name" type="text" name="first_name" :value="old('first_name')" required autofocus/>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="form-group">
                                <x-auth.label for="insertion" :value="__('Tussenvoegsel')" />

                                <x-auth.input id="insertion" type="text" name="insertion" :value="old('insertion')"/>
                            </div>
                        </div>

                        <div class="col-5">
                            <div class="form-group">
                                <x-auth.label for="last_name" :value="__('Achternaam')" />

                                <x-auth.input id="last_name" type="text" name="last_name" :value="old('last_name')" required/>
                            </div>
                        </div>

                    </div>
                    <!-- Email Address -->
                    <div class="form-group">
                        <x-auth.label for="email" :value="__('Email')" />

                        <x-auth.input id="email" type="email" name="email" :value="old('email')" required/>
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <x-auth.label for="password" :value="__('Wachtwoord')" />

                        <x-auth.input id="password" type="password"
                                        name="password"
                                        required autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group">
                        <x-auth.label for="password_confirmation" :value="__('Bevestig wachtwoord')" />

                        <x-auth.input id="password_confirmation" type="password"
                                        name="password_confirmation" required />
                    </div>

                    <!-- Credentials-->
                    <div class="form-group">
                        <div class="form-group">
                            <x-auth.label for="birthday" :value="__('Geboortedatum')" />

                            <x-auth.input id="birthday" type="text" name="birthday" :value="old('birthday')" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <x-auth.label for="street" :value="__('Straatnaam')" />

                            <x-auth.input id="street" type="text" name="street" :value="old('street')" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <x-auth.label for="house_num" :value="__('Huisnummer')" />

                            <x-auth.input id="house_num" type="text" name="house_num" :value="old('house_num')" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <x-auth.label for="house_num_addition" :value="__('Toevoeging')" />

                            <x-auth.input id="house_num_addition" type="text" name="house_num_addition" :value="old('house_num_addition')" required autofocus />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <x-auth.label for="postal_code" :value="__('Postcode')" />

                            <x-auth.input id="postal_code" type="text" name="postal_code" :value="old('postal_code')" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <x-auth.label for="city" :value="__('Plaatsnaam')" />

                            <x-auth.input id="city" type="text" name="city" :value="old('city')" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <x-auth.label for="usergroup_id" :value="__('Relatie tot NHL-Stenden')" />

                            <x-auth.input id="usergroup_id" type="number" name="usergroup_id" :value="old('usergroup_id')" required/>
                        </div>
                    </div>
                    <div>
                        <x-auth.input id="role_id" type="hidden" name="role_id" value="3"/>
                    </div>
                </div>




                <div class="mb-0">
                    <div class="d-flex justify-content-end align-items-baseline">
                        <a class="text-muted mr-3 text-decoration-none" href="{{ route('login') }}">
                            {{ __('Heb je al een account ?') }}
                        </a>

                        <x-auth.button>
                            {{ __('Registreren') }}
                        </x-auth.button>
                    </div>
                </div>
            </form>
        </div>
    </x-auth.auth-card>
</x-guest-layout>
