<x-guest-layout>
    <x-auth.auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-auth.application-logo width="82" />
            </a>
        </x-slot>

        <div class="card-body">
            <div class="mb-4 small text-muted">
                {{ __('Leuk dat je een account hebt aangemaakt! Voor dat we verder kunnen kan je het account verrifieren door op de link in de email te klikken die we je hebben gestuurd. Mocht je geen email van ons ontvangen hebben, kunnen we je een nieuw email bericht sturen.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="alert alert-success" role="alert">
                    {{ __('We hebben een verificatie email naar het adres gestuurd wat je bij de registratie hebt ingevuld.') }}
                </div>
            @endif

            <div class="mt-4 d-flex justify-content-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <x-auth.button>
                            {{ __('Opnieuw verificatie email versturen') }}
                        </x-auth.button>
                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="btn btn-link">
                        {{ __('Logout') }}
                    </button>
                </form>
            </div>
        </div>
    </x-auth.auth-card>
</x-guest-layout>
