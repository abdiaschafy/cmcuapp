@extends('layouts.admin')
@section('title', 'CMCU | Consultations anesthésiques')
@section('content')
    <body>
    <style>

        .bs-callout {
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            border-color: #eee;
            border-image: none;
            border-radius: 3px;
            border-style: solid;
            border-width: 1px 1px 1px 5px;
            margin-bottom: 5px;
            padding: 20px;
        }
        .bs-callout:last-child {
            margin-bottom: 0px;
        }
        .bs-callout h4 {
            margin-bottom: 10px;
            margin-top: 0;
        }

        .bs-callout-danger {
            border-left-color: #d9534f;
        }

    </style>
    <div class="wrapper">
    @include('partials.side_bar')
    <!-- Page Content Holder -->
        @include('partials.header')
        <div class="container">
            <div class="row">
                <div class="col-md-12  toppad  offset-md-0 ">
                    <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-success float-right"><i
                            class="fas fa-arrow-left"></i> Retour au dossier patient</a>
                </div>
                <div class="col-md-9">
                    <!-- resumt -->
                    <div class="card">
                        <div class="card-header resume-heading">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="col-12 col-md-12">
                                        <ul class="list-group">
                                            <li class="list-group-item"><b>NOM ET PRENOM DU PATIENT :</b> {{ $patient->name }} {{ $patient->prenom }}</li>
                                            <li class="list-group-item"><i class="fa fa-phone"></i> <b>TELEPHONE :</b> {{ $patient->telephone }}</li>
                                            <li class="list-group-item"><i class="fa fa-envelope"></i> {{ $patient->email }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach($consultationAnesthesistes as $consultationAnesthesiste)
                            <div class="bs-callout bs-callout-danger">
                                <h4>CONSULTATION DU <small class="text-danger"><b>{{ $consultationAnesthesiste->created_at->toFormattedDateString() }}</b></small></h4>
                                <hr>
                                <ul class="list-group">
                                    <li class="list-group-item"><b>SPECIALITE :</b> {{ $consultationAnesthesiste->specialite }}</li>
                                    <li class="list-group-item"><b>MEDECIN TRAITANT :</b> Dr. {{ $consultationAnesthesiste->medecin_traitant }}</li>
                                    <li class="list-group-item"><b>OPERATEUR :</b> Dr. {{ $consultationAnesthesiste->operateur }}</li>
                                    <li class="list-group-item"><b>ANESTHESISTE :</b> Dr. {{ $consultationAnesthesiste->user->name }}</li>
                                    <hr>
                                    <li class="list-group-item"><b>MOTIF DE D'ADMISSION :</b> </li>
                                    <p>{{ $consultationAnesthesiste->motif_admission }}</p>
                                    <li class="list-group-item"><b>DATE D'INTERVENTION :</b> </li>
                                    <p>{!! nl2br($consultationAnesthesiste->date_intervention) !!}</p>
                                    <li class="list-group-item"><b>MEMO :</b> </li>
                                    <p>{{ $consultationAnesthesiste->memo }}</p>
                                    <li class="list-group-item"><b>ANESTHESIE EN SALLE :</b> </li>
                                    <p>{{ $consultationAnesthesiste->anesthesi_salle }}</p>
                                    <li class="list-group-item"><b>DATE D'HOSPITALISATION :</b> </li>
                                    <p>{{ $consultationAnesthesiste->date_hospitalisation }}</p>
                                    <li class="list-group-item"><b>CLASSE ASA :</b> </li>
                                    <p>{{ $consultationAnesthesiste->classe_asa }}</p>
                                    <li class="list-group-item"><b>BENEFICES RISQUES :</b> </li>
                                    <p>{{ $consultationAnesthesiste->benefice_risque }}</p>
                                    <li class="list-group-item"><b>RISQUES :</b> </li>
                                    <p>{{ $consultationAnesthesiste->risque }}</p>
                                    <li class="list-group-item"><b>JEUNE PRE-OPERATOIRE :</b> </li>
                                    <p><b>Solide :</b></p>
                                    <p>{{ ($consultationAnesthesiste->solide) }}</p>
                                    <p><b>Liquide :</b></p>
                                    <p>{{ ($consultationAnesthesiste->liquide) }}</p>

                                    <li class="list-group-item"><b>ANTECEDENTS / TRAITEMENT :</b> </li>
                                    <p>{{ $consultationAnesthesiste->antecedent_traitement }}</p>
                                    <li class="list-group-item"><b>ALLERGIES :</b> </li>
                                    <p>{{ $consultationAnesthesiste->allergie }}</p>
                                    <li class="list-group-item"><b>EXAMENS CLINIQUES :</b> </li>
                                    <p>{{ $consultationAnesthesiste->examen_clinique }}</p>

                                    <li class="list-group-item"><b>INTUBATION :</b> {{ $consultationAnesthesiste->intubation }}</li>
                                    <li class="list-group-item"><b>MALLAMPATI :</b> {{ $consultationAnesthesiste->mallampati }}</li>
                                    <li class="list-group-item"><b>DISTANCE-INTERINCISIVE :</b> {{ $consultationAnesthesiste->distance_interincisive }}</li>
                                    <li class="list-group-item"><b>DISTANCE-TYROMENTONIERE :</b> {{ $consultationAnesthesiste->distance_tyromentoniere }}</li>
                                    <li class="list-group-item"><b>MOBILITE SERVICALE :</b> {{ $consultationAnesthesiste->mobilite_servicale }}</li>
                                    <li class="list-group-item"><b>TECHNIQUE D'ANESTHESIE :</b> {{ $consultationAnesthesiste->technique_anesthesie1 }}</li>
                                    <li class="list-group-item"><b>TECHNIQUE D'ANESTHESIE ENVISAGEE :</b> </li>
                                    @foreach(explode(",", $consultationAnesthesiste->technique_anesthesie) as $technique)
                                        <ul>
                                            <li>
                                                {{ $technique }}
                                            </li>
                                        </ul>
                                    @endforeach
                                    <li class="list-group-item"><b>ANTIBIOPROPHYLAXIE :</b> {{ $consultationAnesthesiste->antibiotique }}</li>
                                    <li class="list-group-item"><b>SYNTHES PREOPERATOIRE :</b> </li>
                                    <p>{{ $consultationAnesthesiste->synthese_preop }}</p>

                                    <li class="list-group-item"><b>EXAMENS PARACLINIQUES :</b> </li>
                                    @foreach(explode(",", $consultationAnesthesiste->examen_paraclinique) as $examen)
                                        <ul>
                                            <li>
                                                {{ $examen }}
                                            </li>
                                        </ul>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- resume -->
            </div>

        </div>
    </div>

    </body>
@stop
