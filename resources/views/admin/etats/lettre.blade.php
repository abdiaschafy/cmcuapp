<html lang="fr">
<link href="{{ asset('admin/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" /><head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<style>
    .cpi-titulo3 {
        font-size: 12px;
    }
    .logo{
        width: 100px;
    }
    p {
        line-height: 100%;
        text-align: justify;
    }
    hr {
        display: block; height: 1px;
        border: 0; border-top: 1px solid red;
        margin: 1em 0; padding: 0;
    }
    .footer {
        padding-top: 1px;
        padding-bottom: 15px;
        position:fixed;
        bottom:5px;
        width:100%;
    }

</style>
<div class="container-fluid">

    <div class="row">
        <div class="col-2">
            <img class="logo img-responsive float-left" src="{{ asset('admin/images/logo.jpg') }}">
        </div>
        <div class="col-7 offset-3">
            <div class="text-center">
                <p>CENTRE MEDICO-CHIRURGICAL D'UROLOGIE</p>
                <p>VALLEE MANGA BELL DOUALA-BALI</p>
                <small>TEL:(+237) 233 423 389 / 674 068 988 / 698 873 945</small>
                <p><small>www.cmcu-cm.com</small></p>
            </div>
        </div>
    </div>

    <div class="row">
        <hr class="text-danger">
    </div>

    <div class="row">
        <div class="col-4">
            <p>Dr <small>{{ $consultations->user->name }}</small> <small>{{ $consultations->user->prenom }}</small></p>
            <p><small>{{ $consultations->user->specialite }}</small></p>
            <p>Onmc: <small>{{ $consultations->user->onmc }}</small></p>
        </div>
        <div class="col-6 offset-5">
            <p><small><u>Date:</u><b> {{ $consultations->created_at->formatLocalized('%d %B %Y') }}</b></small></p>
            <p><u>Nom du patient:</u> {{ $consultations->patient->name }}</p>
        </div>
    </div>
    <div class="row">
        Ref: {{ $patient->numero_dossier .'/'. $consultations->id }}
    </div>
    <br>
    <div class="row col-md-5 offset-7">
        <p>Douala, le {{ \Carbon\Carbon::now()->formatLocalized('%d %B %Y') }}</p>
    </div>
    <br>
    <p>Cher confrère, {{ $consultations->medecin }}</p>
    <br>
    <p>
        Je vois à la consultation d’urologie ce {{ $consultations->created_at->formatLocalized('%d %B %Y') }} @if($dossiers->sexe == 'Masculin')Mr @else Me @endif
        <b>{{ $consultations->patient->name }}</b> né le {{ $dossiers->date_naissance }}.
    </p>
    @if ($consultations->motif_c)
        <p><b><u>MOTIF DE CONSULTATION</u> :</b> {{ $consultations->motif_c }}.</p>
    @endif
    @if ($consultations->examen_c)
        <p><b><u>EXAMEN(S) COMPLEMENTAIRE(S)</u> :</b></p>
        {!! nl2br(e($consultations->examen_c)) !!}. <br><br>
    @endif
    @if ($consultations->proposition_therapeutique)
        <p><b><u>POPOSITION THERAPEUTIQUE</u> :</b> {{ $consultations->proposition_therapeutique }}.</p>
    @endif
    @if ($consultations->diagnostic)
        <p><b><u>DIAGNOSTIC</u> :</b> {{ $consultations->diagnostic }}.</p>
    @endif
    <p>Je reste bien entendu à votre entiere disposition pour tout échange d'informations.</p>
    <br>
    <p>Bien Confraternellement</p>
    <footer class="footer">
        <div class="text-center col-6 offset-2">
            <small>TEL:(+237) 233 423 389 / 674 068 988 / 698 873 945</small>
            <small>www.cmcu-cm.com</small>
        </div>
    </footer>
</div>
