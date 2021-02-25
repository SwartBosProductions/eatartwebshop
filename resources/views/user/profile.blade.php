@extends ('layouts.public')

@section('content')
<main class="main-admin container-fluid mx-auto">

    <div class="content-main-home container-fluid p-2 my-2 mx-auto">

        <div class="row justify-content-center">
            <div class="col-10 col-lg-8 text-center mt-3 mb-4">

            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-10 col-lg-8 bg-light text-center">
                <strong>
                    <h2>Profiel van {{$user->full_name}}</h2>
                </strong>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-6 p-4 bg-light">
                <div class="row justify-content-left">
                    <h3>Gebruiksgegevens</h3>
                </div>
                <div class="row justify-content-left">
                    <section>
                        Naam: {{$user->full_name}}
                    </section>
                </div>
                <div class="row justify-content-left">
                    <section>
                        Adres: {{$user->street}} {{$user->house_num}} {{$user->house_num_addition}}
                    </section>
                </div>
                <div class="row justify-content-left">
                    <section>
                        Postcode: {{$user->postal_code}}
                    </section>
                </div>
                <div class="row justify-content-left">
                    <section>
                        Woonplaats: {{$user->city}}
                    </section>
                </div>
                <div class="row justify-content-left">
                    <section>
                        Land: {{$user->country}}
                    </section>
                </div>
                <div class="row justify-content-left">
                    <section>
                        Email: {{$user->email}}
                    </section>
                </div>
                <div class="row justify-content-left">
                    <section>
                        Geboortedatum: {{date('d-M-y', strtotime($user->birthday))}}
                    </section>
                </div>
                <div class="row justify-content-left">
                    <section>
                        Relatie tot NHL: {{$user->usergroup->usergroupname}}
                    </section>
                </div>
                <div class="row justify-content-left">
                    <section>
                        <a href="{{route('user-profile-edit')}}">Gegevens wijzigen</a>
                    </section>
                </div>
            </div>
        </div>

    </div>

</main>
@endsection
