<x-guest-layout>
    <x-auth.auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-auth.application-logo width="82" />
            </a>
        </x-slot>

        <div class="card-body">
            <!-- Session Status -->
            <x-auth.auth-session-status class="mb-3" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth.auth-validation-errors class="mb-3" :errors="$errors" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-group">
                    <x-auth.label for="email" :value="__('Email')" />

                    <x-auth.input id="email" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <!-- Password -->
                <div class="form-group">
                    <x-auth.label for="password" :value="__('Wachtwoord')" />

                    <x-auth.input id="password" type="password"
                             name="password"
                             required autocomplete="current-password" />
                </div>

                <!-- Remember Me -->
                <div class="form-group">
                    <div class="form-check">
                        <x-auth.checkbox id="remember_me" name="remember" />

                        <label class="form-check-label" for="remember">
                            {{ __('Onthouden') }}
                        </label>
                    </div>
                </div>

                <div class="mb-0">
                    <div class="d-flex justify-content-end align-items-baseline">
                        @if (Route::has('password.request'))
                            <a class="text-muted mr-2 text-decoration-none" href="{{ route('password.request') }}">
                                {{ __('Wachtwoord vergeten ?') }}
                            </a>
                        @endif
                        <x-auth.button>
                            {{ __('Login') }}
                        </x-auth.button>
                    </div>
                </div>

            </form>
        </div>
    </x-auth.auth-card>
</x-guest-layout>
