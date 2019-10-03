@extends('layouts.admin')

@section('title', 'CMCU | Surveillance post-anesthésique')

@section('content')

    <body>

    <div class="wrapper">
        @include('partials.side_bar')

        @include('partials.header')
        @can('show', \App\User::class)
            <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-success float-right"
               title="Retour à la liste des patients">
                <i class="fas fa-arrow-left"></i> Retour au dossier patient
            </a>
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <td>
                                            <h1 class="text-info">SURVEILLANCE</h1>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="table-active">DATE:</td>
                                        <td class="table-active">date ici</td>
                                    </tr>
                                    <tr>
                                        <td>SURVEILLANCE</td>
                                        <td>dddddddddddddddddddddddddddddddddddddddddddddddd</td>
                                    </tr>
                                    <tr>
                                        <td>TRAITEMENT(S)</td>
                                        <td>dddddddddddddddddddddddddddddddddddddddddddddddd</td>
                                    </tr>
                                    <tr>
                                        <td>EXAMEN(S) PARACLINIQUE(S) POST OPERATOIRE</td>
                                        <td>dddddddddddddddddddddddddddddddddddddddddddddddd</td>
                                    </tr>
                                    <tr>
                                        <td>OBSERVATION(S)</td>
                                        <td>dddddddddddddddddddddddddddddddddddddddddddddddd</td>
                                    </tr>
                                    <tr>
                                        <td>DATE DE SORTIE</td>
                                        <td>dddddddddddddddddddddddddddddddddddddddddddddddd</td>
                                    </tr>


                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endcan

    </div>
    </body>

@stop
