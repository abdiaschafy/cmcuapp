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
                            <th>CONSULTER</th>
                            <th>SUPPRIMER</th>
                            <th>IMPRIMER</th>
                            </thead>
                            <tbody>

                            @foreach($patients as $patient)
                                <tr>

                                    <td>CMCU - {{ $patient->numero_dossier }}</td>
                                    <td>{{ $patient->name }}</td>
                                    <td>{{ $patient->created_at->toFormattedDateString() }}</td>
                                    <td>{{ $patient->frais }}</td>
                                    {{--<td>{{ $user->updated_at->toFormattedDateString() }}</td>--}}
                                    <td>
                                        <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-primary btn-xs"><i class="fas fa-eye"></i></a>
                                    </td>
                                    <td>
                                        <p data-placement="top" data-toggle="tooltip" title="Delete">
                                            <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><i class="fas fa-trash-alt"></i>
                                            </button>
                                        </p>
                                    </td>
                                    <td>
                                        <p data-placement="top" data-toggle="tooltip" title="Delete">
                                            <a class="btn btn-success btn-xs" title="Imprimer" href="{{ route('consultation.pdf', $patient->id) }}"><i class="fas fa-print"></i></a>
                                        </p>
                                    </td>
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

        <div class="col-md-12 text-center">
            <a href="{{ route('patients.create') }}" type="submit" class="btn btn-primary">Ajouter un patient</a>
        </div>
    </div>
    </div>
    </body>
@stop
