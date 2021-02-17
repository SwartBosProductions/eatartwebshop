
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


            <div class="col-8 col-lg-6 text-center mt-3 mb-4">
                <h1 class="h1-admin">Gebruikers Administratie</h1>
            </div>

            <div class="col-2">

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

                                </div>
                            </div>

                            <table class="table table-striped table-hover table-bordered">

                                <thead>
                                    <tr>

                                        <th>ACTIES <i class="fa fa-sort"></i></th>

                                        {{-- voorbeeld van, enzovoort zeg maar zijn de table column names --}}
                                        <th>Voornaam </th>
                                        <th>Achternaam <i class="fa fa-sort"></i></th>
                                        <th>Email</th>
                                        <th>Geboortedatum <i class="fa fa-sort"></i></th>
                                        <th>Plaats </th>
                                        <th>Straat <i class="fa fa-sort"></i></th>

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
                                        <td>Folkert </td>
                                        <td> Swart </td>
                                        <td>folkert@swartmail.nl</td>
                                        <td>18-06-1980</td>
                                        <td>Groningen</td>
                                        <td>Horensialaan</td>

                                    </tr>
                                </tbody>

                            </table>

                            {{-- pagination nog te fixen, js met bootstrap.js/jquery --}}
                            <div class="row justify-content-center my-auto">
                                <div class="clearfix">

                                    <div class="row justify-content-center my-auto pb-2">
                                        <div class="hint-text">
                                            5 van de 25 gebruikers
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
