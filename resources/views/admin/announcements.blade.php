
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
                <h1 class="h1-admin">Nieuws & Aankondigingen</h1>
            </div>

            <div class="col-2">
                {{-- spacer --}}
            </div>

        </div>

        <div class="row justify-content-center">



        <div class="row justify-content-center">

            <div class="col-12 col-lg-10 bg-light text-center">

                <div class="container">

                    <div class="table-responsive">
                        <div class="table-wrapper">

                            <div class="table-title">
                                <div class="row px-4 py-2 my-auto">

                                    <div class="col-sm-8">
                                        @include('admin/partials/admin_announcements_nav')
                                    </div>

                                    <div class="col-sm-4 my-auto d-flex justify-content-end">
                                        {{-- evt searchbar --}}
                                    </div>

                                </div>
                            </div>

                            <table class="table table-striped table-hover table-bordered">

                                <thead>
                                    <tr>

                                        <th>ACTIES </th>

                                        {{-- voorbeeld van, enzovoort zeg maar zijn de table column names --}}
                                        <th>Soort <i class="fa fa-sort"></i></th>
                                        <th>Naam <i class="fa fa-sort"></i></th>
                                        <th>Beschrijving</th>
                                        <th>Afbeelding</th>

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
                                        <td>Nieuws </td>
                                        <td>Eat Art App online </td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat veritatis tempora distinctio aspernatur quae harum? Quis deserunt praesentium nam voluptas aut doloremque sunt nisi labore? Nisi quo omnis non vitae. </td>
                                        <td>https://images.kunstveiling.be/tmp-de5542f2e219b01f00fc5e1eea35cfd8-bob-kemper_d700.jpeg</td>

                                    </tr>
                                </tbody>

                            </table>

                            {{-- pagination nog te fixen, js met bootstrap.js/jquery --}}
                            <div class="row justify-content-center my-auto">
                                <div class="clearfix">

                                    <div class="row justify-content-center my-auto pb-2">
                                        <div class="hint-text">
                                            5 van de ?? Items
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

    </div>

</main>

@endsection
