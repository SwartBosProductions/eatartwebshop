
@extends ('layouts.admin')

@section('content')

<main class="main-admin container-fluid mx-auto">

    <div class="content-admin-dashb p-2 my-2 mx-auto">

        <div class="row justify-content-center">

            <div class="col-2">
                <x-admin.admin-dashboard-button>
                    {{ __('Admin DashBoard') }}
                </x-admin.admin-dashboard-button>
            </div>


            <div class="col-8 col-lg-6 text-center mt-3 mb-1">
                <h1 class="h1-admin">Producten Administratie</h1>
            </div>

            <div class="col-2">
                {{-- spacer --}}
            </div>

        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 text-center mt-1 mb-2 btn-group-admin-options">
                @include('admin/partials/admin_products_nav')
            </div>
        </div>

        <div class="row justify-content-center">

            <div class="col-12 col-lg-10 bg-light text-center">

                <div class="container">

                    <div class="table-responsive">
                        <div class="table-wrapper">

                            <div class="table-title">
                                <div class="row px-4 py-2 my-auto">

                                    <div class="col-sm-4">
                                        <div class="search-box">
                                            {{-- Search picto --}}
                                            <input type="text" class="form-control" placeholder="Zoeken&hellip;">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        {{-- maybe better spot for buttons admin preselect --}}
                                    </div>

                                </div>
                            </div>

                            <table class="table table-striped table-hover table-bordered">

                                <thead>
                                    <tr>

                                        <th>ACTIES <i class="fa fa-sort"></i></th>

                                        {{-- voorbeeld van, enzovoort zeg maar zijn de table column names --}}
                                        <th>Product naam </th>
                                        <th>Serie naam <i class="fa fa-sort"></i></th>
                                        <th>Collectie naam</th>
                                        <th>Beschrijving <i class="fa fa-sort"></i></th>
                                        <th>Afbeelding </th>
                                        {{-- nice to have preview show small picture on click/hover --}}

                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>

                                        <td class="p-1">
                                            <a href="#" class="view p-1" title="View" data-toggle="tooltip">V</a>
                                            <a href="#" class="edit p-1" title="Edit" data-toggle="tooltip">E</i></a>
                                            <a href="#" class="delete p-1" title="Delete" data-toggle="tooltip">D</i></a>
                                        </td>

                                        {{-- voorbeeld van record --}}
                                        <td>Technico 1 </td>
                                        <td>Technico </td>
                                        <td>EatArt Spring 2021 </td>
                                        <td>Eerste van vier abstracte zeefdrukken met als onderwerp techniek in de jaren negentig. </td>
                                        <td>https://images.kunstveiling.be/tmp-de5542f2e219b01f00fc5e1eea35cfd8-bob-kemper_d700.jpeg</td>

                                    </tr>
                                </tbody>

                            </table>

                            {{-- pagination nog te fixen, js met bootstrap.js/jquery --}}
                            <div class="row justify-content-center my-auto">
                                <div class="clearfix">

                                    <div class="row justify-content-center my-auto pb-2">
                                        <div class="hint-text">
                                            5 van de ?? Producten
                                        </div>
                                    </div>

                                    <div class="row justify-content-center my-auto py-2">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                            <li class="page-item"><a href="#" class="page-link">1</a></li>
                                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                                            <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                            <li class="page-item"><a href="#" class="page-link">4</a></li>
                                            <li class="page-item"><a href="#" class="page-link">5</a></li>
                                            <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

            </div>

        </div>

    </div>

</main>

@endsection
