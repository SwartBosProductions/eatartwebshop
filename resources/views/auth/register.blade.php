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

                <!-- Name -->
                <div class="form-group">
                    <x-auth.label for="name" :value="__('Name')" />

                    <x-auth.input id="name" type="text" name="name" :value="old('name')" required autofocus />
                </div>

                <!-- Email Address -->
                <div class="form-group">
                    <x-auth.label for="email" :value="__('Email')" />

                    <x-auth.input id="email" type="email" name="email" :value="old('email')" required />
                </div>

                <!-- Password -->
                <div class="form-group">
                    <x-auth.label for="password" :value="__('Password')" />

                    <x-auth.input id="password" type="password"
                                    name="password"
                                    required autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <x-auth.label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-auth.input id="password_confirmation" type="password"
                                    name="password_confirmation" required />
                </div>

                <div class="mb-0">
                    <div class="d-flex justify-content-end align-items-baseline">
                        <a class="text-muted mr-3 text-decoration-none" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-auth.button>
                            {{ __('Register') }}
                        </x-auth.button>
                    </div>
                </div>
            </form>
        </div>
    </x-auth.auth-card>
</x-guest-layout>
