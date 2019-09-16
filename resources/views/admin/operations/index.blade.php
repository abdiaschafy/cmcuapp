@extends('layouts.admin')
@section('title', 'CMCU | Compte-rendu d\'opérations')
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
                        @foreach($compteRenduBlocOperatoires as $compteRenduBlocOperatoire)
                            <div class="bs-callout bs-callout-danger">
                                <h4>COMPTE-RENDU DU <small class="text-danger"><b>{{ $compteRenduBlocOperatoire->created_at->toFormattedDateString() }}</b></small></h4>
                                <hr>
                                <ul class="list-group">
                                    <li class="list-group-item"><b>OPERATEUR :</b> Dr. {{ $compteRenduBlocOperatoire->chirurgien }}</li>
                                    <li class="list-group-item"><b>AIDE OPERATOIRE :</b> Dr. {{ $compteRenduBlocOperatoire->aide_op }}</li>
                                    <li class="list-group-item"><b>ANESTHESISTE :</b> Dr. {{ $compteRenduBlocOperatoire->anesthesiste }}</li>
                                    <li class="list-group-item"><b>INFIRMIER ANESTHESISTE :</b> Dr. {{ $compteRenduBlocOperatoire->infirmier_anesthesiste }}</li>
                                    <hr>
                                    <li class="list-group-item"><b>DATE D"ENTREE :</b> {{ $compteRenduBlocOperatoire->date_e }}</li>
                                    <li class="list-group-item"><b>TYPE :</b> {{ $compteRenduBlocOperatoire->type_e }}</li>
                                    <li class="list-group-item"><b>DATE DE SORTIE :</b> {{ $compteRenduBlocOperatoire->date_s }}</li>
                                    <li class="list-group-item"><b>TYPE :</b> {{ $compteRenduBlocOperatoire->types_s }}</li>
                                    <li class="list-group-item"><b>DATE INTERVENTION :</b> {{ $compteRenduBlocOperatoire->date_intervention }}</li>
                                    <li class="list-group-item"><b>DUREE INTERVENTION :</b> {{ $compteRenduBlocOperatoire->dure_intervention }}</li>
                                    <hr>
                                    <li class="list-group-item"><b>COMPTE-RENDU OPERATOIRE :</b> </li>
                                    <p>{{ $compteRenduBlocOperatoire->compte_rendu_o }}</p>
                                    <li class="list-group-item"><b>INDICATIONS OPERATOIRES :</b> </li>
                                    <p>{{ $compteRenduBlocOperatoire->indication_operatoire }}</p>
                                    <li class="list-group-item"><b>RESULTATS HISTOPATHOLOGIQUES :</b> </li>
                                    <p>{{ $compteRenduBlocOperatoire->resultat_histo }}</p>
                                    <li class="list-group-item"><b>SUITES OPERATOIRES :</b> </li>
                                    <p>{{ $compteRenduBlocOperatoire->suite_operatoire }}</p>
                                    <li class="list-group-item"><b>TRAITEMENT PROPOSE :</b> </li>
                                    <p>{{ $compteRenduBlocOperatoire->traitement_propose }}</p>
                                    <li class="list-group-item"><b>SOINS :</b> </li>
                                    <p>{{ $compteRenduBlocOperatoire->soins }}</p>
                                    <li class="list-group-item"><b>CONCLUSION :</b> </li>
                                    <p>{{ $compteRenduBlocOperatoire->conclusion }}</p>

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
