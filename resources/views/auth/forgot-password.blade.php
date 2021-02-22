<x-guest-layout>
    <x-auth.auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-auth.application-logo width="82" />
            </a>
        </x-slot>

        <div class="card-body">
            <div class="mb-4">
                {{ __('Wachtwoord vergeten ? Geen probleem, als je al geregistreerd bent; vul je email adres in en we sturen je een email waar je een nieuw wachtwoord mee kan aanmaken. Anders ga naar de registratie pagina.') }}
            </div>

            <div class="card-body">
                <!-- Session Status -->
                <x-auth.auth-session-status class="mb-3" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth.auth-validation-errors class="mb-3" :errors="$errors" />

                <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                    <div class="form-group">
                        <x-auth.label for="email" :value="__('Email')" />

                        <x-auth.input id="email" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <x-auth.button>
                            {{ __('Email Wachtwoord Reset Link') }}
                        </x-auth.button>
                    </div>
                </form>
            </div>
        </div>
    </x-auth.auth-card>
</x-guest-layout>
