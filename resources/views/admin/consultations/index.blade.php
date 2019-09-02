@extends('layouts.admin')
@section('title', 'CMCU | Consultations globales')
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

            <div class="col-md-9">
                <!-- resumt -->
                <div class="card">
                    <div class="card-header resume-heading">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="col-12 col-md-12">
                                    <ul class="list-group">
                                        <li class="list-group-item"><b>NOM ET PRENOM DU PATIENT :</b> {{ $patient->name }}</li>
                                        <li class="list-group-item"><b>TELEPHONE :</b> {{ $patient->telephone }}</li>
                                        <li class="list-group-item"><i class="fa fa-phone"></i> 000-000-0000</li>
                                        <li class="list-group-item"><i class="fa fa-envelope"></i> john@example.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach($consultations as $consultation)
                        <div class="bs-callout bs-callout-danger">
                            <h4>CONSULTATION DU <small class="text-danger"><b>{{ $consultation->created_at->toFormattedDateString() }}</b></small></h4>
                            <hr>
                            <ul class="list-group">
                                <li class="list-group-item"><b>MEDECIN DE REFERENCE :</b> Dr. {{ $consultation->medecin_r }}</li>
                                <li class="list-group-item"><b>NOM ET PRENOM DU MEDECIN :</b> Dr. {{ $consultation->user->name }}</li>
                                <hr>
                                <li class="list-group-item"><b>MOTIF DE CONSULTATION :</b> {{ $consultation->motif_c }}</li>
                                <li class="list-group-item"><b>INTERROGATOIE :</b> {!! nl2br($consultation->interrogatoire) !!}</li>
                                <li class="list-group-item"><b>EXAMENS PHYSIQUES :</b> {{ $consultation->examen_p }}</li>
                                <li class="list-group-item"><b>EXAMENS COMPLEMENTAIRES :</b> {{ $consultation->examen_c }}</li>
                                <li class="list-group-item"><b>PROPOSITIONS THERAPEUTIQUES :</b> {{ $consultation->proposition_therapeutique }}</li>
                                <li class="list-group-item"><b>PROPOSITIONS DE SUIVI :</b> {{ $consultation->proposition }}</li>
                                <li class="list-group-item"><b>TYPE D'INTERVENTION :</b> {{ $consultation->type_intervention }}</li>
                                <li class="list-group-item"><b>DATE INTERVENTION :</b> {{ $consultation->date_intervention }}</li>
                                <li class="list-group-item"><b>TYPE D'ACTES A REALISER :</b> {{ $consultation->acte }}</li>
                                <li class="list-group-item"><b>DEVIS PREVISIONNEL :</b> {{ $consultation->devis_p }}</li>
                                <li class="list-group-item"><b>DATE CONSULTATION ANESTHESISTE :</b> {{ $consultation->date_consultation_anesthesiste }}</li>
                                <li class="list-group-item"><b>DATE DE CONSULTATION :</b> {{ $consultation->date_consultation }}</li>
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
