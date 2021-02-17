@extends ('layouts.admin')

@section('content')

<main class="main-admin container-fluid mx-auto">

    <div class="content-admin-dashb container-fluid p-2 my-2 mx-auto">

        <div class="row justify-content-center">

            <div class="col-2">
                <x-admin.admin-dashboard-button>
                    {{ __('Admin DashBoard') }}
                </x-admin.admin-dashboard-button>
            </div>

        </div>


        <div class="row justify-content-center">
            <div class="col-10 col-lg-8 text-center mt-3 mb-4">
                <h1>ADMIN products.blade.php</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-10 col-lg-8 bg-light text-center">
                <h2>Admin CRUD actions products/shop/sale/periode</h2>
                <article>
                    <h3>
                        Actions menu balk
                    </h3>
                </article>
                <article>
                    <h3>
                        werkveld
                    </h3>
                </article>
            </div>
        </div>
    </div>
</main>
@endsection
