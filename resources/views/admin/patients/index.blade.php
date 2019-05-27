@extends('layouts.admin')

@section('title', 'CMCU | Liste des patients')

@section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->
        @can('create', \App\Patient::class)
        <div class="container">
            <h1 class="text-center">LISTE DES PATIENTS</h1>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        @include('partials.flash')
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                            <th>
                                NUMERO
                            </th>
                            <th>NOM</th>
                            <th>DATE DE CREATION</th>
                            <th>FRAIS DE CONSULTATION</th>
                            @can('consulter', \App\Patient::class)
                                <th>CONSULTER</th>
                            @endcan
                            @can('consulter', \App\Patient::class)
                                <th>Rendez-vous</th>
                            @endcan
                                @can('print', \App\Patient::class)
                                <th>SUPPRIMER</th>
                            @endcan
                            {{--<th>SUPPRIMER</th>--}}
                            @can('print', \App\Patient::class)
                                <th>IMPRIMER</th>
                            @endcan
                            </thead>
                            <tbody>

                            @foreach($patients as $patient)
                                <tr>
                                    <td>CMCU - {{ $patient->numero_dossier }}</td>
                                    <td>{{ $patient->name }}</td>
                                    <td>{{ $patient->created_at->toFormattedDateString() }}</td>
                                    <td>{{ $patient->frais }}</td>
                                    {{--<td>{{ $user->updated_at->toFormattedDateString() }}</td>--}}
                                    @can('consulter', \App\Patient::class)
                                    <td>
                                         {{--<a href="{{ route('patients.show', $patient->id) }}" title="consulter le dossier du patient" class="btn btn-primary btn-xs"><i class="fas fa-eye"></i></a>--}}
                                        <a href="{{ route('patients.show', $patient->id) }}" title="consulter le dossier du patient" class="btn btn-primary btn-xs"><i class="fas fa-eye"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('events.create', $patient->id) }}" title="Prendre un rendez-vous" class="btn btn-primary btn-xs"><i class="far fa-calendar-plus"></i></a>
                                    </td>
                                    @endcan
                                    @can('print', \App\Patient::class)
                                    <td>
                                        <form action="{{ route('patients.destroy', $patient->id) }}" method="post">
                                            @csrf @method('DELETE')
                                            <p data-placement="top" data-toggle="tooltip" title="Delete">
                                                <button type="submit" class="btn btn-danger btn-xs" title="Supprimer le dossier du patient"  onclick="return myFunction()"><i class="fas fa-trash-alt"></i></button>
                                            </p>
                                        </form>
                                    </td>
                                    @endcan
                                    {{--<td>--}}
                                        {{--<form action="{{ route('patients.destroy', $patient->id) }}" method="post">--}}
                                             {{--@csrf @method('DELETE')--}}
                                                  {{--<p data-placement="top" data-toggle="tooltip" title="Delete">--}}
                                                    {{--<button type="submit" class="btn btn-danger btn-xs" title="Supprimer le dossier du patient"  onclick="return myFunction()"><i class="fas fa-trash-alt"></i></button>--}}

                                                  {{--</p>--}}
                                        {{--</form>--}}
                                    {{--</td>--}}
                                    @can('print', \App\Patient::class)
                                    <td>
                                        <p data-placement="top" data-toggle="tooltip" title="Delete">
                                            <a class="btn btn-success btn-xs" title="Imprimer la facture de consultation" href="{{ route('consultation.pdf', $patient->id) }}"><i class="fas fa-print"></i></a>
                                        </p>
                                    </td>
                                    @endcan
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <div class="clearfix"></div>
                        {{ $patients->links() }}
                    </div>
                </div>
            </div>
        </div>
        @can('print', \App\Patient::class)
            <div class="col-md-12 text-center">

                <a href="{{ route('patients.create') }}" class="btn btn-primary" title="Vous allez jouter un nouveau patient dans le système">Ajouter un patient</a>

            </div>
        @endcan

        </div>
    </div>
    @endcan
    <script>
        function myFunction() {
            if(!confirm("Veuillez confirmer la suppréssion du dossier patient"))
                event.preventDefault();
        }
    </script>
    </body>
@stop
