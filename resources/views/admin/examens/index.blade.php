@extends('layouts.admin')

@section('title', 'CMCU | Liste des examens')

@section('content')

    <body>
    {{--<div class="se-pre-con"></div>--}}
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
                           
                            <th>NOM DU PATIENT</th>
                            <th>TYPE D'EXAMEN</th>
                            {{--<th>FRAIS DE CONSULTATION</th>--}}
                            {{--@can('consulter', \App\Patient::class)--}}
                                {{--<th>CONSULTER</th>--}}
                            {{--@endcan--}}
                            {{--@can('consulter', \App\Patient::class)--}}
                                {{--<th>Rendez-vous</th>--}}
                            {{--@endcan--}}

                                {{--@can('print', \App\Patient::class)--}}
                                {{--<th>SUPPRIMER</th>--}}
                            {{--@endcan--}}
                            {{--<th>SUPPRIMER</th>--}}
                            {{--@can('print', \App\Patient::class)--}}
                                {{--<th>IMPRIMER</th>--}}
                            {{--@endcan--}}
                            <th>ACTION</th>
                            </thead>
                            <tbody>

                            @foreach($patients as $patient)
                            @foreach($examens as $examen)
                                <tr>
                                   <td>{{ $patient->name }}</td>
                                    <td>{{ $examen->type}}</td>

                                     @can('consulter', \App\Patient::class)
                                    <td style="display: inline-flex;">
                                        <a href="{{ route('examens.show', $patient->id) }}" title="consulter les examens du patient" class="btn btn-primary btn-xs mr-1"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('examens.create',$patient->id) }}" title="Ajouter un examen" class="btn btn-info btn-xs mr-1"><i class="fas fa-book"></i></a>
                                    @endcan
                                    @can('print', \App\Patient::class)
                                        <p data-placement="top" data-toggle="tooltip" title="Delete">
                                            <a class="btn btn-success btn-xs mr-1" title="Imprimer la facture de consultation" href="{{ route('consultation.pdf', $patient->id) }}"><i class="fas fa-print"></i></a>
                                        </p>
                                    @endcan
                                    @can('print', \App\Patient::class)
                                        <form action="{{ route('patients.destroy', $patient->id) }}" method="post">
                                            @csrf @method('DELETE')
                                            <p data-placement="top" data-toggle="tooltip" title="Delete">
                                                <button type="submit" class="btn btn-danger btn-xs mr-1" title="Supprimer le dossier du patient"  onclick="return myFunction()"><i class="fas fa-trash-alt"></i></button>
                                            </p>
                                        </form>
                                    @endcan
                                    </td>
                                </tr>
                            @endforeach
                            @endforeach

                            </tbody>
                        </table>
                        <div class="clearfix"></div>
                        {{--{{ $patients->links() }}--}}
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
