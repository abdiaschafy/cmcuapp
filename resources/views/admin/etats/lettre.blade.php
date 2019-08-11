<html lang="fr">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<head>
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
        line-height: 40%;
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
        <div class="col-6 offset-3">
            <div class="text-center">
                <p>CENTRE MEDICO-CHIRURGICAL D'UROLOGIE</p>
                <p>VALLEE MANGA BELL DOUALA-BALI</p>
                <small>TEL:(+237) 233 423 389 / 674 068 988 / 698 873 945</small>
                <small>www.cmcu-cm.com</small>
            </div>
        </div>
    </div>

    <div class="row">
        <hr class="text-danger">
    </div>

    <div class="row">
        <div class="col-3">
            <p>Dr {{ $consultations->user->name }}</small> <small>{{ $consultations->user->prenom }}</small></p>
            <p><small>{{ $consultations->user->specialite }}</small></p>
            <p>Onmc: <small>{{ $consultations->user->onmc }}</small></p>
        </div>
        <div class="col-5 offset-5">
            <p><small><u>Date:</u><b> {{ $consultations->created_at->formatLocalized('%d %B %Y') }}</b></small></p>
            <p><u>Nom du patient:</u> {{ $consultations->patient->name }}</p>
        </div>
    </div>
    <div class="row">
        Ref: {{ $patient->numero_dossier .'/'. $consultations->id }}
    </div>
    <br>
    <div class="row col-md-4 offset-8">
        <p>Douala, le {{ \Carbon\Carbon::now()->formatLocalized('%d %B %Y') }}</p>
    </div>
    <br>
    <br>
    <br>
    <p>Cher {{ $consultations->medecin }}</p>
    <br>
    <p>Voici les informations concernant votre patient <b>{{ $consultations->patient->name }}</b> reçu en consultation au CMCU</p>
    le {{ $consultations->created_at->formatLocalized('%d %B %Y') }} suite au diagnostic suivant: {!! nl2br(e($consultations->diagnostic)) !!}
    <br>
    <br>
    <p>Je reste bien entendu à votre entiere disposition pour tout échange d'informations.</p>
    <br>
    <br>
    <br>
    <br>
    <p>Cordialement</p>
    <footer class="footer">
        <div class="text-center col-6 offset-2">
            <small>TEL:(+237) 233 423 389 / 674 068 988 / 698 873 945</small>
            <small>www.cmcu-cm.com</small>
        </div>
    </footer>
</div>
