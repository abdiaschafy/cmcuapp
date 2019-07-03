@extends('layouts.admin')

@section('title', 'CMCU | Compte rendu d\'hospitalisation')

@section('content')
<style>
 body {
    margin-top:30px;
}
.stepwizard-step p {
    margin-top: 0px;
    color:#666;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}
.stepwizard-step button[disabled] {
    /*opacity: 1 !important;
    filter: alpha(opacity=100) !important;*/
}
.stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
    opacity:1 !important;
    color:#bbb;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content:" ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-index: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
</style>
    <body>
    {{--<div class="se-pre-con"></div>--}}
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
        @include('partials.header')

        <div class="container">
        @include('partials.flash')
            <div class="stepwizard">
                    <div class="stepwizard-row setup-panel">
                        <div class="stepwizard-step col-xs-3">
                            <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                            <p class="mr-5"><small>Informations du patient</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-3">
                            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                            <p><small>Traitement de sortie</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-3">
                            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                            <p><small>Suite opératoires</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-3">
                            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                            <p><small>Sortie</small></p>
                        </div>
                    </div>
                </div>

                <div role="form">
                    <div class="panel panel-primary setup-content" id="step-1">
                        <div class="panel-heading">
                             <h3 class="panel-title"><u>Données du patient</u></h3>
                        </div>
                        <div class="panel-body">
                            <p>Nom, prénom : {{ $patient->name }}</p>
                            <p>
                                Date de Naissance :
                                @foreach($patient->dossiers as $dossier)
                                    {{ $dossier->date_naissance }}
                                @endforeach
                            </p>
                            <p>
                                Médecin Traitant : 
                                @if(isset($compte_rendu_bloc_operatoires))
                                    {{ $compte_rendu_bloc_operatoires->chirurgien }}
                                @endif
                            </p>
                            <br>
                            <br>
                            <p><b><u>MOTIF:</u></b></p>
                            <p>
                                @if (count($patient->consultations))
                                    {{ ($consultations->diagnostique) }}
                                @endif
                            </p>
                            <br>
                            <p><b><u>GESTE EFFECTUE:</u></b></p>
                            <p>
                                @if(isset($compte_rendu_bloc_operatoires))
                                    {!! nl2br(e($patient->compte_rendu_bloc_operatoires->last()->detail_intervention)) !!}
                                @endif
                            </p>
                            <br>
                            <button type="button" class="btn btn-primary nextBtn pull-right">Suivant</button>
                            <a href="{{ route('compte_rendu_hos_pdf.pdf', $patient->id) }}" class="btn btn-success pull-left"><i class="fas fa-print"></i> Imprimer le CRH</a>
                        </div>
                    </div>

                    <div class="panel panel-primary setup-content" id="step-2">
                        <div class="panel-heading">
                             <h3 class="panel-title"><u>Traitement de sortie</u></h3>
                        </div>
                        <div class="panel-body">
                            <p>
                                @if(isset($compte_rendu_bloc_operatoires))
                                    {!! nl2br(e($patient->compte_rendu_hospitalisations->last()->traitement_sortie)) !!}
                                @endif
                            </p>
                            <br>
                            <button class="btn btn-primary nextBtn pull-right" type="button">Suivant</button>
                        </div>
                    </div>

                    <div class="panel panel-primary setup-content" id="step-3">
                        <div class="panel-heading">
                             <h3 class="panel-title"><u>Suite opératoire</u></h3>
                        </div>
                        <div class="panel-body">
                            <p>
                                @if(isset($compte_rendu_bloc_operatoires))
                                    {!! e($patient->compte_rendu_hospitalisations->last()->suite_operatoire) !!}
                                @endif
                            </p>
                            <br>
                            <button class="btn btn-primary nextBtn pull-right" type="button">Suivant</button>
                        </div>
                    </div>
                    <div class="panel panel-primary setup-content" id="step-4">
                    <div class="panel-heading">
                         <h3 class="panel-title"><u>Sortie</u></h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            @if(isset($compte_rendu_bloc_operatoires))
                                {!! nl2br(e($patient->compte_rendu_hospitalisations->last()->sortie)) !!}
                            @endif
                        </p>
                        <br>
                        <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-success pull-right"><i class="fas fa-arrow-left"></i>  Retour au dossier patient</a>
                    </div>
        </div>
                </div>
                <hr>
                <div class="card" style="width: 69rem;">
                <div class="card-body">
                @include('partials.flash_form')
                    <h5 class="card-title">Compte rendu d'hospitalisation:</h5>
                    <small class="text-info" title="Les champs marqués par une étoile rouge sont obligatoire"><i class="fas fa-info-circle"></i></small>
                    <hr>
                    <form class="form-group col-md-10" action="{{ route('compte_rendu_hos.store') }}" method="POST">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="traitement_sortie" class="col-form-label text-md-right">Traitement de sortie: <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="summary-ckeditor" cols="15" rows="4" name="traitement_sortie">{{ old('traitement_sortie') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="assurance" class="col-form-label text-md-right">Suite opératoire: <span class="text-danger">*</span></label>
                                <input name="suite_operatoire" class="form-control col-md-5" value="{{ old('suite_operatoire') }}" type="text" placeholder="Suite opératoire" required>
                            </div>

                            <div class="form-group">
                                <label for="sortie" class="col-form-label text-md-right">Sortie du patient: <span class="text-danger">*</span></label>
                                <textarea name="sortie" class="form-control" cols="15" rows="4">{{ old('sortie') }}</textarea>
                            </div>
                            <input type="hidden" name="patient_id" value="{{ $patient->id }}">
                            </br>

                            <button type="submit" class="btn btn-primary btn-lg col-md-5" title="En cliquant sur ce bouton vous enregistrer un nouveau patient">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>

    </div>
    </div>
    <script src="{{ asset('admin/js/main.js') }}"></script>
    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {

            var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn');

            allWells.hide();

            navListItems.click(function (e) {
                e.preventDefault();
                var $target = $($(this).attr('href')),
                    $item = $(this);

                if (!$item.hasClass('disabled')) {
                    navListItems.removeClass('btn-success').addClass('btn-default');
                    $item.addClass('btn-success');
                    allWells.hide();
                    $target.show();
                    $target.find('input:eq(0)').focus();
                }
            });

            allNextBtn.click(function () {
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;

                $(".form-group").removeClass("has-error");
                for (var i = 0; i < curInputs.length; i++) {
                    if (!curInputs[i].validity.valid) {
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }

                if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
            });

            $('div.setup-panel div a.btn-success').trigger('click');
        });
    </script>
    </body>

@endsection
