<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
        bottom:5;
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
        <div class="col-md-4">
            <p><small><b>Chirurgien:</b> Dr. {{ $patient->compte_rendu_bloc_operatoires->last()->chirurgien }}</small></p>
            <p><small><b>Anesthesiste:</b> Dr. {{ $patient->compte_rendu_bloc_operatoires->last()->anesthesiste }}</small></p>
        </div>
        <div class="col-md-3 offset-5">
            <p><small><u>Date:</u><b> {{ $date = \Carbon\Carbon::now()->toFormattedDateString() }}</b></small></p>
            <p><u>Nom du patient:</u> {{ $patient->name }}</p>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <h5 class="text-center"><u class="text-danger">{{ $patient->consultations->last()->diagnostique }}</u></h5>
    </div>
    <br>
    <br>
    <br>
    <h4 class="text-"><u>Histoire de la maladie :</u></h4>
    <div class="">
        <h5>
            {!! nl2br(e($patient->consultations->last()->commentaire)) !!}
        </h5>
    </div>
    <br>
    <br>
    <br>
    <h4 class="text-"><u>Intervention :</u></h4>
    <div class="">
        <h5>
            {!! nl2br(e($patient->compte_rendu_bloc_operatoires->last()->detail_intervention)) !!}
        </h5>
    </div>
    <footer class="footer">
        <div class="text-center col-6 offset-2">
            <small>TEL:(+237) 233 423 389 / 674 068 988 / 698 873 945</small>
            <small>www.cmcu-cm.com</small>
        </div>
    </footer>
</div>
