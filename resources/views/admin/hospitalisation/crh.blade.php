@extends('layouts.admin')

@section('title', 'CMCU | Compte rendu d\'hospitalisation')

@section('content')
    <style>
        /*body {
           margin-top:30px;
       }*/
        .stepwizard-step p {
            margin-top: 0px;
            color: #666;
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
            opacity: 1 !important;
            color: #bbb;
        }

        .stepwizard-row:before {
            top: 14px;
            bottom: 0;
            position: absolute;
            content: " ";
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
            <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-success float-right">
                <i class="fas fa-arrow-left"></i> Retour au dossier patient
            </a>
            <br>
            <br>
            @include('partials.flash')
            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step col-xs-3">
                        <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                        <p class="mr-5">
                        <h2>Informations du patient</h2></p>
                    </div>
                    <div class="stepwizard-step col-xs-3">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                        <p>
                        <h2>Informations de sortie</h2></p>
                    </div>
                </div>
                <br>
                <br>
            </div>

            @if(count($patient->compte_rendu_hospitalisations))
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
                            <a href="{{ route('compte_rendu_hos_pdf.pdf', $patient->id) }}"
                               class="btn btn-success pull-left"><i class="fas fa-print"></i> Imprimer le CRH</a>
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

                            <div class="panel-heading">
                                <h3 class="panel-title"><u>Entré du patient</u></h3>
                            </div>

                            <div class="panel-body">
                                <p>
                                    @if(isset($compte_rendu_bloc_operatoires))
                                        {!! nl2br(e($patient->compte_rendu_hospitalisations->last()->traitement_sortie)) !!}
                                    @endif
                                </p>
                                <br>

                                <div class="panel-heading">
                                    <h3 class="panel-title"><u>Sortie du patient</u></h3>
                                </div>

                                <div class="panel-body">
                                    <p>
                                        @if(isset($compte_rendu_bloc_operatoires))
                                            {!! nl2br(e($patient->compte_rendu_hospitalisations->last()->traitement_sortie)) !!}
                                        @endif
                                    </p>
                                    <br>
                                    <a href="{{ route('compte_rendu_hos_pdf.pdf', $patient->id) }}"
                                       class="btn btn-success pull-left"><i class="fas fa-print"></i> Imprimer le
                                        CRH</a>
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
                                    <h3 class="panel-title"><u>Conclusion</u></h3>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        @if(isset($compte_rendu_bloc_operatoires))
                                            {!! nl2br(e($patient->compte_rendu_hospitalisations->last()->sortie)) !!}
                                        @endif
                                    </p>
                                    <br>
                                    <a href="{{ route('patients.show', $patient->id) }}"
                                       class="btn btn-success pull-right"><i class="fas fa-arrow-left"></i> Retour au
                                        dossier patient</a>
                                </div>
                            </div>
                        </div>
                        @endif
                        <hr>
                        <div class="card" style="width: 69rem;">
                            <div class="card-body">
                                @include('partials.flash_form')
                                <h5 class="card-title">Compte rendu d'hopitalisation:</h5>
                                <small class="text-info"
                                       title="Les champs marqués par une étoile rouge sont obligatoire"><i
                                        class="fas fa-info-circle"></i></small>
                                <hr>
                                <form class="form-group" action="{{ route('compte_rendu_hos.store') }}" method="POST">
                                    @csrf
                                    <div class="row clearfix">
                                        <div class="col-md-10 table-responsive">
                                            <table class="table table-bordered table-hover table-sortable"
                                                   id="tab_logic">
                                                <thead>
                                                <tr>
                                                    <th class="text-center">
                                                        Date d'entré
                                                    </th>
                                                    <th class="text-center">
                                                        Motif
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr id='addr0' data-id="0" class="hidden">
                                                    <td data-name="name">
                                                        <input type="date" name='name0' placeholder='Name'
                                                               class="form-control"/>
                                                    </td>
                                                    <td data-name="sel">
                                                        <select name="sel0" class="form-control">
                                                            <option value="">Motif d'entrer</option>
                                                            <option value="1">Urgence</option>
                                                            <option value="2">Hospitalisation</option>
                                                            <option value="3">Option 3</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                </tbody>
                                                <thead>
                                                <tr>
                                                    <th class="text-center">
                                                        Date de sortie
                                                    </th>
                                                    <th class="text-center">
                                                        Motif
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr id='addr0' data-id="0" class="hidden">
                                                    <td data-name="name">
                                                        <input type="date" name='name0' placeholder='Name'
                                                               class="form-control"/>
                                                    </td>
                                                    <td data-name="sel">
                                                        <select name="sel0" class="form-control">
                                                            <option value="">Motif de sortie</option>
                                                            <option value="1">Retour au domicile</option>
                                                            <option value="2">Transfert</option>
                                                            <option value="3">Convalescence</option>
                                                            <option value="3">Décédé</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
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

        class Tooltip {
            /**
             * Applique le système de bulle d'infos sur les éléments
             * @param {string} selector
             */
            static bind (selector) {
                document.querySelectorAll(selector).forEach(element => new Tooltip(element))
            }

            /**
             * @param {HTMLElement} element
             */
            constructor (element) {
                this.element = element
                let tooltipTarget = this.element.getAttribute('data-tooltip')
                if (tooltipTarget) {
                    this.title = document.querySelector(tooltipTarget).innerHTML
                } else {
                    this.title = element.getAttribute('title')
                }
                this.tooltip = null
                this.element.addEventListener('mouseover', this.mouseOver.bind(this))
                this.element.addEventListener('mouseout', this.mouseOut.bind(this))
            }

            mouseOver () {
                let tooltip = this.createTooltip()
                let width = tooltip.offsetWidth
                let height = tooltip.offsetHeight
                let left = this.element.offsetWidth / 2 - width / 2 + this.element.getBoundingClientRect().left + document.documentElement.scrollLeft
                let top = this.element.getBoundingClientRect().top - height - 15 + document.documentElement.scrollTop
                if (left < 20) {
                    left = 20
                }
                tooltip.style.left = left + "px"
                tooltip.style.top = top + "px"
                tooltip.classList.add('visible')
            }

            mouseOut () {
                if (this.tooltip !== null) {
                    this.tooltip.classList.remove('visible')
                    this.tooltip.addEventListener('transitionend', () => {
                        if (this.tooltip !== null) {
                            document.body.removeChild(this.tooltip)
                            this.tooltip = null
                        }
                    })
                }
            }

            /**
             * Crée et injecte la bulle d'info dans l'HTML
             * @returns {HTMLElement}
             */
            createTooltip () {
                if (this.tooltip === null) {
                    let tooltip = document.createElement('div')
                    tooltip.innerHTML = this.title
                    tooltip.classList.add('tippy')
                    document.body.appendChild(tooltip)
                    this.tooltip = tooltip
                }
                return this.tooltip
            }
        }
    </script>
    </body>

@endsection
