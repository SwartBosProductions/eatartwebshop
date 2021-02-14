<x-guest-layout>
    <x-auth.auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-auth.application-logo width="82" />
            </a>
        </x-slot>

        <div class="card-body">
            <div class="mb-4 text-sm text-muted">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>

            <!-- Validation Errors -->
            <x-auth.auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div class="form-group">
                <x-auth.label for="password" :value="__('Password')" />

                <x-auth.input id="password" type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <div class="d-flex justify-content-end mt-4">
                <x-auth.button class="ml-4">
                    {{ __('Confirm') }}
                </x-auth.button>
            </div>
        </form>
        </div>
    </x-auth.auth-card>
</x-guest-layout>
