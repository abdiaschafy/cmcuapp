@extends('layouts.admin')

@section('title', 'CMCU | dossier patient')

@section('content')

    <body>
    {{--<div class="se-pre-con"></div>--}}
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
        @include('partials.header')
        <div class="container">
            <div class="row">
                <div class="col-md-12  toppad  offset-md-0 ">
                    @if (count($patient->consultations))
                        <a href="{{ route('compte_rendu_hos.create', $patient->id) }}" class="btn btn-primary float-left"> Compte rendu d'hospitalisation</a>
                    @endif
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ordonanceModal"
                                data-whatever="@mdo"><i class="far fa-plus-square"></i> Nouvelle ordonance
                        </button>
                    <a href="{{ route('patients.index') }}" class="btn btn-success float-right"><i class="fas fa-arrow-left"></i>  Retour à la liste des patients</a>
                </div>
                <br>
                <br>
                    <div class="col-md-6  offset-md-0  toppad">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title text-danger text-center">DOSSIER PATIENT</h2>
                                <table class="table table-user-information ">
                                    <tbody>
                                    <tr>
                                        <td><b>NOM DU PATIENT :</b></td>
                                        <td>{{ $patient->name }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>PRENOM :</b></td>
                                        <td>{{ $patient->name }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>NUMERO DE DOSSIER :</b></td>
                                        <td>{{ $patient->numero_dossier }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>FARIS DE CONSULTATION :</b></td>
                                        <td>{{ $patient->frais }} FCFA</td>
                                    </tr>
                                    @foreach ($patient->dossiers as $dossier)
                                        <tr>
                                            <td><b>GENRE :</b></td>
                                            <td>{{ $dossier->sexe }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>PROFESSION :</b></td>
                                            <td>{{ $dossier->profession }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>ADRESSE :</b></td>
                                            <td>{{ $dossier->adresse }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>LIEU DE NAISSANCE :</b></td>
                                            <td>{{ $dossier->lieu_naissance }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>DATE DE NAISSANCE :</b></td>
                                            <td>{{ $dossier->date_naissance }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>PERSONNE A CONTACTER :</b></td>
                                            <td>{{ $dossier->personne_contact }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>TELEPHONE PERSONNE A CONTACTER :</b></td>
                                            <td>{{ $dossier->tel_personne_contact }}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td>
                                            <a href="{{ route('consultations.index') }}"><h1 class="text-info">CONSULTATION</h1></a>
                                        </td>
                                        <td></td>
                                    </tr>

                                    @if (count($patient->consultations))
                                        <tr>
                                            <td class="table-active">DATE :</td>
                                            <td class="table-active">{{ $consultations->created_at->toFormattedDateString() }}</td>
                                        </tr>
                                        <tr>
                                            <td>DIAGNOSTIQUE :</td>
                                            {{--@if (strlen($consultations->diagnostique)>25)--}}
                                                <td>{{ ($consultations->diagnostique) }}</td>
                                            {{--@endif--}}
                                        </tr>
                                        <tr>
                                            <td>ALLERGIES :</td>
                                            {{--@if (strlen($consultations->allergie)>25)--}}
                                                <td>{{ ($consultations->allergie) }}</td>
                                            {{--@endif--}}
                                        </tr>
                                        <tr>
                                            <td>GROUPE SANGUIN :</td>
                                            <td><span class="badge badge-primary">{{ $consultations->groupe }}</span></td>
                                        </tr>
                                        <tr>
                                            <td>ANTECEDENTS MEDICAUX :</td>
                                            @if (strlen($consultations->antecedent)>25)
                                                <td>{{ str_limit($consultations->antecedent, 20) }}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <td>CHAMBRE :</td>
                                            <td>{{ $consultations->chambres }}</td>
                                        </tr>
                                        <tr>
                                            <td>COMMENTAIRE :</td>
                                            {{--@if (strlen($consultations->commentaire)>25)--}}
                                                <td>{{ ($consultations->commentaire) }}</td>
                                            {{--@endif--}}
                                        </tr>
                                        @if (isset($compte_rendu_bloc_operatoires))
                                            <tr>
                                                <td>NOM DU CHIRURGIEN :</td>
                                                <td>{{ $compte_rendu_bloc_operatoires->chirurgien }}</td>
                                            </tr>
                                            <tr>
                                                <td>DUREE DE L'INTERVENTION :</td>
                                                <td>{{ $compte_rendu_bloc_operatoires->dure_intervention }}</td>
                                            </tr>
                                            <tr>
                                                <td>DETAILS DE L'INTERVENTION :</td>
                                                @if (strlen($compte_rendu_bloc_operatoires) > 25)
                                                <td>{{ str_limit($compte_rendu_bloc_operatoires->detail_intervention, 20) }}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                <td>COUT :</td>
                                                <td>{{ $compte_rendu_bloc_operatoires->cout }}</td>
                                            </tr>
                                            <tr>
                                                <td><a href="{{ route('compte_rendu_bloc_pdf.pdf', $patient->id) }}" class="btn btn-primary"><i class="fas fa-print"></i> Imprimer le dossier</a></td>
                                                <td></td>
                                            </tr>
                                        @endif
                                    @else
                                        <tr>
                                            <td><b>Aucune consultation</b></td>
                                            <td></td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <td>
                                            <h1 class="text-info">PARAMETRES</h1>
                                        </td>
                                        <td></td>
                                    </tr>

                                    @if (count($patient->parametres)>0)
                                        <tr>
                                            <td class="table-active">DATE :</td>
                                            <td class="table-active">{{ $parametres->created_at->toFormattedDateString() }}</td>
                                        </tr>
                                        <tr>
                                            <td>POIDS :</td>
                                            <td>{{ $parametres->poids }} Kg</td>
                                        </tr>
                                        <tr>
                                            <td>TENSION :</td>
                                            <td>{{ $parametres->tension }}</td>
                                        </tr>
                                        <tr>
                                            <td>TEMPERATURE</td>
                                            <td>{{ $parametres->temperature }} °C</td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td><b>Aucun paramètre de disponible</b></td>
                                            <td></td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                                <a class="btn btn-danger floa" href="{{ route('consultations.create', $patient->id) }}" title="Nouvelle consultation du patient"><i class="fas fa-book"></i> Nouvelle consultation</a>

                                @if(count($patient->examens))
                                    <a class="btn btn-primary float-right " href="{{ route('examens.showall', $patient->id) }}">Résultats d'examens</a>
                                @endif
                                
                            </div>
                         </div><br>
                         
                    </div>
                   
                    
                <div class="col-md-6  offset-md-0  toppad">

                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Modifier les informations du patients</h3>
                            @include('partials.flash')
                            @include('partials.flash_form')
                            <form action="{{ route('patients.update', $patient->id) }}" method="POST">
                                @csrf @method('PATCH')
                                <table class="table table-user-information ">
                                    <tbody>
                                    <tr>
                                        <td><b>Nom du patient :</b></td>
                                        <td>
                                            <input name="name" type="text" value='{{ $patient->name }}'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Assurance :</b></td>
                                        <td>
                                            <Input name="assurance" type="text" value='{{ $patient->assurance }}'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Numéro d'assurance :</b></td>
                                        <td>
                                            <Input name="numero_assurance" type="text" value='{{ $patient->numero_assurance }}'>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-primary">Modifier</button>
                                <a href="{{ route('dossiers.create') }}" class="btn btn-info float-right">Completer le dossier</a>
                            </form>
                        </div>
                    </div>
                    <br>
                    @if (count($patient->ordonances))
                        <h3>Ordonances médicales</h3>
                        <br>
                        <div class="table-responsive">
                            <table id="myTable" class="table table-bordred table-striped">
                                <thead>
                                <th>DESCRIPTION</th>
                                <th>DATE</th>
                                <th>IMPPRIMER</th>
                                </thead>
                                <tbody>

                                @foreach($patient->ordonances as $ordonance)
                                    <tr>
                                        <td>{{ $ordonance->description }}</td>
                                        <td>{{ $ordonance->created_at->toFormattedDateString() }}</td>
                                        <td>
                                            <a class="btn btn-success btn-xs" title="Imprimer l'ordonance" href="{{ route('ordonance.pdf', $ordonance->id) }}"><i class="fas fa-print"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            <div class="clearfix"></div>
                            {{ $ordonances->links() }}
                        </div>
                    @endif

                </div>

                <div class="modal fade" id="ordonanceModal" tabindex="-1" role="dialog"
                     aria-labelledby="ordonanceModal" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ordonance</h5>
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('ordonances.store') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="summernote" class="col-form-label">Ordonance
                                            :</label>
                                        <textarea id="summary-ckeditor" name="description" rows="15" class="form-control">{{ old('description') }}</textarea>
                                    </div>
                                    <input type="hidden" value="{{ $patient->id }}" name="patient_id">
                                    <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Fermer
                                    </button>
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </body>

@stop
