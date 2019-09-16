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
                        {{--@foreach($consultations as $consultation)--}}
                            {{--<div class="bs-callout bs-callout-danger">--}}
                                {{--<h4>CONSULTATION DU <small class="text-danger"><b>{{ $consultation->created_at->toFormattedDateString() }}</b></small></h4>--}}
                                {{--<hr>--}}
                                {{--<ul class="list-group">--}}
                                    {{--<li class="list-group-item"><b>MEDECIN DE REFERENCE :</b> Dr. {{ $consultation->medecin_r }}</li>--}}
                                    {{--<li class="list-group-item"><b>NOM ET PRENOM DU MEDECIN :</b> Dr. {{ $consultation->user->name }}</li>--}}
                                    {{--<hr>--}}
                                    {{--<li class="list-group-item"><b>MOTIF DE CONSULTATION :</b> </li>--}}
                                    {{--<p>{{ $consultation->motif_c }}</p>--}}
                                    {{--<li class="list-group-item"><b>INTERROGATOIE :</b> </li>--}}
                                    {{--<p>{!! nl2br($consultation->interrogatoire) !!}</p>--}}
                                    {{--<li class="list-group-item"><b>EXAMENS PHYSIQUES :</b> </li>--}}
                                    {{--<p>{{ $consultation->examen_p }}</p>--}}
                                    {{--<li class="list-group-item"><b>EXAMENS COMPLEMENTAIRES :</b> </li>--}}
                                    {{--<p>{{ $consultation->examen_c }}</p>--}}
                                    {{--<li class="list-group-item"><b>PROPOSITIONS THERAPEUTIQUES :</b> </li>--}}
                                    {{--<p>{{ $consultation->proposition_therapeutique }}</p>--}}
                                    {{--<li class="list-group-item"><b>PROPOSITIONS DE SUIVI :</b> </li>--}}
                                    {{--<p>{{ $consultation->proposition }}</p>--}}
                                    {{--<li class="list-group-item"><b>TYPE D'INTERVENTION :</b> </li>--}}
                                    {{--<p>{{ $consultation->type_intervention }}</p>--}}
                                    {{--<li class="list-group-item"><b>DATE INTERVENTION :</b> </li>--}}
                                    {{--<p>{{ $consultation->date_intervention }}</p>--}}
                                    {{--<li class="list-group-item"><b>TYPE D'ACTES A REALISER :</b> </li>--}}
                                    {{--<p>{{ $consultation->acte }}</p>--}}
                                    {{--<li class="list-group-item"><b>DEVIS PREVISIONNEL :</b> </li>--}}
                                    {{--<p>{{ $consultation->devis_p }}</p>--}}
                                    {{--<li class="list-group-item"><b>DATE CONSULTATION ANESTHESISTE :</b> </li>--}}
                                    {{--<p>{{ $consultation->date_consultation_anesthesiste }}</p>--}}
                                    {{--<li class="list-group-item"><b>DATE DE CONSULTATION :</b> </li>--}}
                                    {{--<p>{{ $consultation->date_consultation }}</p>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--@endforeach--}}
                    </div>
                </div>
                <!-- resume -->
            </div>

        </div>
    </div>

    </body>
@stop
