@extends ('layouts.admin')

@section('content')

<main class="main-admin container-fluid mx-auto my-auto">

    <div class="row justify-content-center">

        <div class="col-2">
            <x-admin.admin-dashboard-button>
                {{ __('DashBoard') }}
            </x-admin.admin-dashboard-button>
        </div>

        <div class="col-8">

            <div class="row justify-content-center">
                <div class="col-10 col-lg-8 text-center mt-3 mb-4">
                    <h1 class="h1-admin">ADMIN page name</h1>
                </div>
            </div>

        </div>

        <div class="col-2">
            {{-- evt allert positie --}}
        </div>

    </div>

    <div class="row justify-content-center">
        <div class="col-10 col-lg-8 text-center mt-3 mb-4 btn-group-admin-options">
            @include('admin/partials/admin_options_nav')
        </div>
    </div>

    <div class="row justify-content-center">

        <div class="col-12 col-lg-10 bg-light text-center my-4">

            <div class="row">

                <div class="col-12 my-2 mx-auto">
                    Meldingen
                </div>

            </div>

            <div class="row">

                <div class="col-12 my-2 mx-auto">
                    Melding van webshop aan admin
                </div>

            </div>

        </div>

    </div>

</main>

@endsection









