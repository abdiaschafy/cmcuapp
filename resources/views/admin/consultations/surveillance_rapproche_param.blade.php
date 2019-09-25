@extends('layouts.admin')

@section('title', 'CMCU | Surveillance rapprochée des paramètres')

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
                    <button type="button" class="btn btn-primary mb-2 mr-2" title="Surveillance pré-opératoire" data-toggle="modal" data-target="#SurveillancePre" data-whatever="@mdo">
                        <i class="far fa-plus-square"></i>
                        Surveillance pré-opératoire
                    </button>
                    <button type="button" class="btn btn-primary mb-2" title="Surveillance post-opératoire" data-toggle="modal" data-target="#SurveillancePost" data-whatever="@mdo">
                        <i class="far fa-plus-square"></i>
                        Surveillance post-opératoire
                    </button>
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <td>
                                            <h1 class="text-info">Pré-opératoire</h1>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="table-active">DATE:</td>
                                        <td class="table-active">date ici</td>
                                    </tr>
                                    <tr>
                                        <td>dddddddddddddddd</td>
                                        <td>dddddddddddddddddddddddddddddddddddddddddddddddd</td>
                                    </tr>
                                    <tr>
                                        <td>dddddddddddddddd</td>
                                        <td>dddddddddddddddddddddddddddddddddddddddddddddddd</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h1 class="text-info">Post-opératoire</h1>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="table-active">DATE:</td>
                                        <td class="table-active">date ici</td>
                                    </tr>
                                    <tr>
                                        <td>dddddddddddddddd</td>
                                        <td>dddddddddddddddddddddddddddddddddddddddddddddddd</td>
                                    </tr>
                                    <tr>
                                        <td>dddddddddddddddd</td>
                                        <td>dddddddddddddddddddddddddddddddddddddddddddddddd</td>
                                    </tr>


                                    </thead>

                                </table>
                                @include('partials.admin.modal.surveillance_rapproche_post')
                                @include('partials.admin.modal.surveillance_rapproche_pre')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endcan

    </div>
    </body>

@stop
