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
            <h1 class="text-center">LISTE DES EXAMENS</h1>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        @include('partials.flash')
                        <table id="myTable" class="table table-bordred table-striped">
                            <thead>
                            <th>
                                NUMERO
                            </th>
                            <th>NOM DU PATIENT</th>
                            <th>DATE DE CREATION</th>
                            {{--<th>FRAIS DE CONSULTATION</th>--}}
                            @can('consulter', \App\Patient::class)
                                <th>APPERCU</th>
                            @endcan
                            @can('consulter', \App\Patient::class)
                                <th>AJOUTER</th>
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
                                    @can('consulter', \App\Patient::class)
                                    <td>
                                        <a href="{{ route('patients.show', $patient->id) }}" title="consulter l'examen' du patient" class="btn btn-primary btn-xs"><i class="fas fa-eye"></i></a>
                                    </td>
                                     <td>
                                        <a href="{{ route('examens.create', $patient->id) }}" title="Ajouter un examen" class="btn btn-primary btn-xs"><i class="fas fa-book"></i></a>
                                    </td>
                                    @endcan
                                    @can('print', \App\Patient::class)
                                    <td>
                                        <form action="{{ route('patients.destroy', $patient->id) }}" method="post">
                                            @csrf @method('DELETE')
                                            <p data-placement="top" data-toggle="tooltip" title="Delete">
                                                <button type="submit" class="btn btn-danger btn-xs" title="Supprimer l'examen du patient"  onclick="return myFunction()"><i class="fas fa-trash-alt"></i></button>
                                            </p>
                                        </form>
                                    </td>
                                    @endcan
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
                        {{--{{ $patients->links() }}--}}
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
    @endcan
    <script>
        function myFunction() {
            if(!confirm("Veuillez confirmer la suppréssion "))
                event.preventDefault();
        }
    </script>
    </body>
@stop
