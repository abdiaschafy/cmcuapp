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
                                    @foreach($surveillance_post_anesthesiques as $surveillance_post_anesthesique)
                                    @if (!empty($surveillance_post_anesthesique->surveillance))
                                        <tr>
                                            <td class="table-active">DATE:</td>
                                            <td class="table-active">
                                                <b>{{ $surveillance_post_anesthesique->surveillance }}</b></td>
                                        </tr>
                                    @endif
                                    @if (!empty($surveillance_post_anesthesique->surveillance))
                                        <tr>
                                            <td><b>SURVEILLANCE</b></td>
                                            <td>{{ nl2br($surveillance_post_anesthesique->surveillance) }}</td>
                                        </tr>
                                    @endif
                                    @if (!empty($surveillance_post_anesthesique->traitement))
                                        <tr>
                                            <td><b>TRAITEMENT</b></td>
                                            <td>{{ nl2br($surveillance_post_anesthesique->traitement) }}</td>
                                        </tr>
                                    @endif
                                    @if (!empty($surveillance_post_anesthesique->examen_paraclinique))
                                        <tr>
                                            <td><b>EXAMEN</b></td>
                                            <td>{{ nl2br($surveillance_post_anesthesique->examen_paraclinique) }}</td>
                                        </tr>
                                    @endif
                                    @if (!empty($surveillance_post_anesthesique->observation))
                                        <tr>
                                            <td><b>OBSERVATION</b></td>
                                            <td>{{ nl2br($surveillance_post_anesthesique->observation) }}</td>
                                        </tr>
                                    @endif
                                    @if (!empty($surveillance_post_anesthesique->date_sortie))
                                        <tr>
                                            <td><b>DATE / HEURE de SORTIE</b></td>
                                            <td>
                                                <p>Date: {{ nl2br($surveillance_post_anesthesique->date_sortie) }}</p>
                                                <p>Date: {{ nl2br($surveillance_post_anesthesique->heur_sortie) }}</p>
                                            </td>
                                        </tr>
                                    @endif

                                    @endforeach

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
