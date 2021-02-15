@extends ('layouts.admin')

@section('content')
<main class="main-admin container-fluid mx-auto">
    <div class="content-admin-dashb container-fluid p-2 my-2 mx-auto">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-8 text-center mt-3 mb-4">
                <h1>ADMIN announcements.blade.php</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-10 col-lg-8 bg-light text-center">
                <h2>Admin CRUD actions voor nieuws</h2>
                <article>
                    <h3>
                        Nieuws
                    </h3>
                </article>
                <article>
                    <h3>
                        Verwachr in de Shop
                    </h3>
                </article>
            </div>
        </div>
    </div>
</main>
@endsection