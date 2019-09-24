@extends('layouts.admin') @section('title', 'CMCU | dossier patient') @section('content')


    <style>
        .grid-container {
            display: grid;
            grid-gap: 30px 60px;
            grid-template-columns: auto auto auto;
            padding: 10px;
        }

        .grid-item {
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(0, 0, 0, 0.8);
            padding: 10px;
            font-size: 12px;
            margin-right: 1px;
        }

        .table-sortable tbody tr {
            cursor: move;
        }
    </style>
    <body>

    <div class="wrapper">
    @include('partials.side_bar')


    <!-- Page Content Holder -->
        @include('partials.header')
        @can('show', \App\User::class)
            <div class="container">
                <div class="row">
                    <div class="col-md-12  toppad  offset-md-0 ">
                        @can('chirurgien', \App\Patient::class)
                            <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">
                                Menu
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <a href="{{ route('ordonance.create', $patient->id) }}" title="Nouvelle ordonnance médicale"
                                   class="btn btn-success mb-1">
                                    <i class="far fa-plus-square"></i>
                                    Ordonnance
                                </a>
                                <li>
                                    <a href="{{ route('consultations.index_anesthesiste', $patient->id) }}"
                                       class="btn btn-success mb-1">
                                        <i class="fas fa-eye"></i>
                                        Consultations anesthésiste
                                    </a>
                                </li>
                                <li>
                                    <a href="#spa" class="btn btn-success mb-1">
                                        <i class="fas fa-eye"></i>
                                        Surveillance post anesthésique
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="{{ route('observations_medicales.index', $patient->id) }}" class="btn btn-primary mb-1">
                                        <i class="far fa-plus-square"></i>
                                        Observations médicales
                                    </a>
                                </li>
                            </ul>

                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#ordonanceModal"
                                    title="Prescrire un examen complémentaire" data-whatever="@mdo">
                                <i class="far fa-plus-square"></i> Examens complémentaires
                            </button>
                        @endcan
                        @can('anesthesiste', \App\Patient::class)
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#SpostAnesth"
                                    title="Surveillance post anesthésique" data-whatever="@mdo">
                                <i class="far fa-plus-square"></i> Surveillance post anesthésique
                            </button>
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                    Menu
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">Dropdown header 1</li>
                                    <li>
                                        <a href="{{ route('consultations.index', $patient->id) }}" class="btn btn-success mb-1">
                                            <i class="fas fa-eye"></i>
                                            Consultations chirurgien
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('consultations.index', $patient->id) }}" class="btn btn-success mb-1">
                                            <i class="fas fa-eye"></i>
                                            Surveillance post anesthésique
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('premedication_adaptation.index', $patient->id) }}" title="Traitement à l'hospitalisation / adaptation au traitement personnel" class="btn btn-success">
                                            <i class="fas fa-eye"></i>
                                            PREMEDICATION
                                        </a>
                                    </li>
                                </ul>
                        @endcan
                        @can('chirurgien', \App\Patient::class)
                            {{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#FicheIntervention" data-whatever="@mdo">--}}
                            {{--<i class="fas fa-eye"></i>--}}
                            {{--Fiche d'intervention--}}
                            {{--</button>--}}
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#FicheInterventionAnesthesiste"
                                    title="Ajouter une fiche d'intervention" data-whatever="@mdo">
                                <i class="far fa-plus-square"></i>
                                Fiche d'intervention
                            </button>
                        @endcan
                        <a href="{{ route('patients.index') }}" class="btn btn-success float-right"
                           title="Retour à la liste des patients">
                            <i class="fas fa-arrow-left"></i> Retour à la liste des patients
                        </a>
                    </div>
                    <br>
                    <br>

                    {{-- PRESENTATION DU DOSSIER PATIENT --}}
                    @if(auth()->user()->role_id == 6)
                        <div class="col-md-7  offset-md-0  toppad">
                            @endif
                            @if(auth()->user()->role_id == 2)
                                <div class="col-md-10  offset-md-0  toppad">
                                    @endif
                                    @if(auth()->user()->role_id == 4)
                                        <div class="col-md-10  offset-md-0  toppad">
                                            @endif
                                            <div class="card">
                                                <div class="card-body">
                                                    <h2 class="card-title text-danger text-center">DOSSIER PATIENT</h2>
                                                    <table class="table table-user-information ">
                                                        <button class="btn btn-secondary mr-2"
                                                                title="Cacher / Afficher les données personelles du patient"
                                                                onclick="ShowDetailsPatient()"><i
                                                                class="fas fa-eye"></i> Détails personnels
                                                        </button>
                                                        @can('secretaire', \App\Patient::class)
                                                            <a href="{{ route('dossiers.create', $patient->id) }}"
                                                               class="btn btn-info">Completer le
                                                                dossier</a>
                                                        @endcan
                                                        @can('infirmier', \App\Patient::class)
                                                            <a class="btn btn-danger"
                                                               href="{{ route('consultations.create', $patient->id) }}"
                                                               title="Nouvelle consultation du patient pour la prise des paramètres">
                                                                <i class="fas fa-book"></i> Fiche de paramètres
                                                            </a>
                                                        @endcan
                                                        @include('partials.admin.files.detail_patient')

                                                        @include('partials.admin.files.consultation_cro')

                                                    </table>

                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        {{-- FIN DE PRESENTATION DU DOSSIER PATIENT --}}

                                        {{-- LES BOUTTONS DE MODAL IC --}}
                                        @if(auth()->user()->role_id == 6)
                                            <div class="col-md-5  offset-md-0  toppad">
                                                @endif
                                                @if(auth()->user()->role_id == 2)
                                                    <div class="col-md-2  offset-md-0  toppad">
                                                        @endif
                                                        @if(auth()->user()->role_id == 4)
                                                            <div class="col-md-2  offset-md-0  toppad">
                                                                @endif
                                                                @can('med_inf_anes', \App\Patient::class)
                                                                    <div class="card">
                                                                        <div class="card-header mb-2">
                                                                            <small>DETAILS ACTION</small>
                                                                        </div>
                                                                        <div class="card-content">
                                                                            <button type="button"
                                                                                    class="btn btn-primary btn-block mb-2"
                                                                                    title="Liste des ordonnances pour ce patient"
                                                                                    data-toggle="modal"
                                                                                    data-target="#ordonanceAll"
                                                                                    data-whatever="@mdo">
                                                                                <i class="fas fa-eye"></i>
                                                                                Ordonances
                                                                            </button>
                                                                            <button type="button"
                                                                                    class="btn btn-primary btn-block mb-2"
                                                                                    title="Liste des examens pour ce patient"
                                                                                    data-toggle="modal"
                                                                                    data-target="#feuilleAll"
                                                                                    data-whatever="@mdo">
                                                                                <i class="fas fa-eye"></i>
                                                                                Examens
                                                                            </button>
                                                                            <button type="button"
                                                                                    class="btn btn-primary btn-block"
                                                                                    title="Fiches d'intervention"
                                                                                    data-toggle="modal"
                                                                                    data-target="#FicheInterventionAll"
                                                                                    data-whatever="@mdo">
                                                                                <i class="fas fa-eye"></i>
                                                                                <small>Fiches d'intervention</small>
                                                                            </button>
                                                                            <a href="{{ route('dossiers.create', $patient->id) }}"
                                                                               class="btn btn-info btn-block">Completer
                                                                                le dossier</a>
                                                                        </div>
                                                                    </div>
                                                                @endcan

                                                                {{--MODIFIER LES INFOS DU PATIENT IC --}}
                                                                {{--@include('admin.patients.edit')--}}
                                                                {{--FIN DE MOFIFICATION DES INFOS PATIENT --}}

                                                            </div>
                                                            {{-- FIN DES BOUTONS DE MODAL --}}

                                                            {{-- TOUS LES MODAL IC --}}
                                                            @include('partials.admin.modal.feuille_precription_examen')
                                                            @include('partials.admin.modal.ordonance_show')
                                                            @include('partials.admin.modal.consultation_show')
                                                            @include('partials.admin.modal.feuille_show')
                                                            @include('partials.admin.modal.fiche_intervention_show')

                                                            @include('partials.admin.modal.fiche_intervention')
                                                            @include('partials.admin.modal.fiche_intervention_anesthesiste')
                                                            @include('partials.admin.modal.visite_preanesthesique')
                                                            @include('partials.admin.modal.surveillance_post_a')


                                                            {{-- FIN DE TOUS LES MODAL --}}

                                                    </div>
                                            </div>
                                        @endcan
                                </div>
                                <script>
                                    function ShowDetailsPatient() {
                                        var x = document.getElementById("myDIV");
                                        if (x.style.display === "none") {
                                            x.style.display = "contents";
                                        } else {
                                            x.style.display = "none";
                                        }
                                    }


                                </script>

    </body>

@stop
