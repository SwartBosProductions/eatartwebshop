<x-guest-layout>
    <x-auth.auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-auth.application-logo width="82" />
            </a>
        </x-slot>
        <div class="card-body reg-body">
            <!-- Validation Errors -->
            <x-auth.auth-validation-errors class="mb-4" :errors="$errors" />
            <form method="POST" action="{{ route('register') }}">
                    @csrf
                <div class="col-12 ">
                    <div class="row">
                        <h2 class="h2-auth">
                            Registreren
                        </h2>
                    </div>
                    <div class="row">
                        <h3 class="h3-auth">
                            - -
                        </h3>
                    </div>
                    <div class="row">
                        <h3 class="h3-auth">
                            Om in te loggen :
                        </h3>
                    </div>
                    <div class="row">
                        <p class="p-auth">
                            (Met deze gegevens kan je straks gebruikmaken van de Webshop)
                        </p>
                    </div>
                    <!-- Email Address -->
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group">
                                <x-auth.label for="email" :value="__('Email')" />
                                <x-auth.input id="email" type="email"
                                    name="email" :value="old('email')" required autofocus/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <!-- Password -->
                            <div class="form-group">
                                <x-auth.label for="password" :value="__('Wachtwoord')" />
                                <x-auth.input id="password" type="password"
                                    name="password" required autocomplete="new-password" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <!-- Confirm Password -->
                            <div class="form-group">
                                <x-auth.label for="password_confirmation"
                                    :value="__('Bevestig wachtwoord')" />
                                <x-auth.input id="password_confirmation" type="password"
                                    name="password_confirmation" required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h3 class="h3-auth">
                            - -
                        </h3>
                    </div>
                    <div class="row">
                        <h3 class="h3-auth">
                            Wat we verder nog graag willen weten :
                        </h3>
                    </div>
                    {{-- relation / role --}}
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <x-auth.label for="usergroup_id"
                                        :value="__('Relatie tot NHL-Stenden')" />
                                        <select id="usergroup_id" name="usergroup_id" required>
                                            <option value=""> - - </option>
                                            <option value="1">Personeel</option>
                                            <option value="2">Student</option>
                                            <option value="3">Geen relatie tot NHL</option>
                                            </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    {{-- role hidden input (appeared in datalist-dropdown before) --}}
                    <div>
                        <x-auth.input id="role_id" type="hidden" name="role_id" value="3"/>
                    </div>
                    <!-- Name -->
                    <div class="row justify-content-between">
                        <div class="col-5">
                            <div class="form-group">
                                <x-auth.label for="first_name" :value="__('Voornaam')" />
                                <x-auth.input id="first_name" type="text"
                                    name="first_name" :value="old('first_name')" required/>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <x-auth.label for="insertion"
                                    :value="__('Tussenvoegsel')" />
                                <x-auth.input id="insertion" type="text"
                                    name="insertion" :value="old('insertion')"/>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <x-auth.label for="last_name"
                                    :value="__('Achternaam')" />
                                <x-auth.input id="last_name" type="text"
                                    name="last_name" :value="old('last_name')" required/>
                            </div>
                        </div>
                    </div>
                    {{-- Date of birth --}}
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <x-auth.label for="birthday"
                                        :value="__('Geboortedatum')" />
                                    <x-auth.input id="birthday" type="date"
                                        name="birthday" :value="old('birthday')" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h3 class="h3-auth">
                            - -
                        </h3>
                    </div>
                    <div class="row">
                        <h3 class="h3-auth">
                            Adresgegevens :
                        </h3>
                    </div>
                    <div class="row">
                        <p class="p-auth">
                            (indien producten worden verzonden zal dit adres gebruikt worden)
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div class="form-group">
                                <div class="form-group">
                                    <x-auth.label for="street"
                                        :value="__('Straatnaam')" />
                                    <x-auth.input id="street" type="text"
                                        name="street" :value="old('street')" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <x-auth.label for="house_num"
                                        :value="__('Huisnummer')" />
                                    <x-auth.input id="house_num" type="text"
                                        name="house_num" :value="old('house_num')" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <div class="form-group">
                                    <x-auth.label for="house_num_addition"
                                        :value="__('Toevoeging')" />
                                    <x-auth.input id="house_num_addition" type="text"
                                        name="house_num_addition" :value="old('house_num_addition')" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <div class="form-group">
                                    <x-auth.label for="postal_code"
                                        :value="__('Postcode')" />
                                    <x-auth.input id="postal_code" type="text"
                                        name="postal_code" :value="old('postal_code')" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="form-group">
                                <div class="form-group">
                                    <x-auth.label for="city"
                                        :value="__('Plaatsnaam')" />
                                    <x-auth.input id="city" type="text"
                                        name="city" :value="old('city')" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h3 class="h3-auth">
                        - -
                    </h3>
                </div>
                <!-- Akkoord voorwaarden-->
                <div class="row d-flex justify-content-end align-items-baseline mr-2">
                    <div class="form-group">
                        <div class="form-check">
                            <x-auth.checkbox id="conditions_confirmed"
                                name="conditions_confirmed"/>
                            <a href="/conditions" class="a-auth">
                                <label class="form-check-label" for="conditions_confirmed">
                                    Ga je akkoord met&nbsp;
                                </label><a href="/conditions">onze voorwaarden</a>?

                                {{-- <label class="form-check-label" for="conditions_confirm">
                                    {{ __('Ga je akkoord met onze voorwaarden') }}
                                </label> --}}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-end align-items-baseline mr-2">
                    <a class="text-muted mr-3" href="{{ route('login') }}">
                        {{ __('Heb je al een account ?') }}
                    </a>
                    <x-auth.button>
                        {{ __('Registreren') }}
                    </x-auth.button>
                </div>
            </form>
        </div>
    </x-auth.auth-card>
</x-guest-layout>
