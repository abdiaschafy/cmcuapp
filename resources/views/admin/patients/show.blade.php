@extends('layouts.admin') @section('title', 'CMCU | dossier patient') @section('content')


    <body>
    {{--

	<div class="se-pre-con"></div>--}}

    <div class="wrapper">
    @include('partials.side_bar')


    <!-- Page Content Holder -->
        @include('partials.header')

        <div class="container">
            <div class="row">
                <div class="col-md-12  toppad  offset-md-0 ">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ordonanceModal" data-whatever="@mdo">
                        <i class="far fa-plus-square"></i> Ordonance / Examens complémentaires
                        

                    </button>
                    @if (count($patient->consultations))

                        <a href="{{ route('compte_rendu_hos.create', $patient->id) }}" class="btn btn-primary">
                            <i class="far fa-plus-square"></i> Compte rendu d'hospitalisation
                        </a> @endif @if(count($patient->examens))
                    @endif
                    <a href="{{ route('patients.index') }}" class="btn btn-success float-right">
                        <i class="fas fa-arrow-left"></i>  Retour à la liste des patients
                    </a>
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
                                    <td>
                                        <b>NOM DU PATIENT :</b>
                                    </td>
                                    <td>{{ $patient->name }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>PRENOM :</b>
                                    </td>
                                    <td>{{ $patient->name }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>NUMERO DE DOSSIER :</b>
                                    </td>
                                    <td>{{ $patient->numero_dossier }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>FARIS DE CONSULTATION :</b>
                                    </td>
                                    <td>{{ $patient->frais }} FCFA</td>
                                </tr>
                                @foreach ($patient->dossiers as $dossier)

                                    <tr>
                                        <td>
                                            <b>GENRE :</b>
                                        </td>
                                        <td>{{ $dossier->sexe }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>PROFESSION :</b>
                                        </td>
                                        <td>{{ $dossier->profession }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>ADRESSE :</b>
                                        </td>
                                        <td>{{ $dossier->adresse }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>PORTABLE :</b>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>FAX :</b>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>EMAIL :</b>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>LIEU DE NAISSANCE :</b>
                                        </td>
                                        <td>{{ $dossier->lieu_naissance }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>DATE DE NAISSANCE :</b>
                                        </td>
                                        <td>{{ $dossier->date_naissance }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>PERSONNE DE CONFIANCE :</b>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>PERSONNE A CONTACTER :</b>
                                        </td>
                                        <td>{{ $dossier->personne_contact }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>TELEPHONE PERSONNE A CONTACTER :</b>
                                        </td>
                                        <td>{{ $dossier->tel_personne_contact }}</td>
                                    </tr>
                                @endforeach

                                <tr>
                                    <td>
                                        <a href="{{ route('consultations.index') }}">
                                            <h1 class="text-info">CONSULTATION</h1>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>

                                @if (count($patient->consultations))

                                    <tr>
                                        <td class="table-active"><b>DATE :</b></td>
                                        <td class="table-active"><b>{{ $consultations->created_at->toFormattedDateString() }}</b></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>NOM DU MEDECIN :</b>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>PRENOM :</b>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>MOTIF DE LA CONSULTATION :</b>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><b>ALLERGIES :</b></td>
                                        {{--@if (strlen($consultations->allergie)>25)--}}

                                        <td>{{ ($consultations->allergie) }}</td>
                                        {{--@endif--}}

                                    </tr>
                                    <tr>
                                        <td><b>GROUPE SANGUIN :</b></td>
                                        <td>
                                            <span class="badge badge-primary">{{ $consultations->groupe }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>ANTECEDENTS MEDICAUX :</b></td>
                                        {{--@if (strlen($consultations->antecedent)>25)--}}

                                            <td>{{ str_limit($consultations->antecedent, 20) }}</td>
                                        {{--@endif--}}

                                    </tr>
                                    <tr>
                                        <td><b>ANTECEDENTS CHIRURGICAUX :</b></td>
                                        {{--@if (strlen($consultations->antecedent)>25)--}}

                                            <td>{{ str_limit($consultations->antecedent, 20) }}</td>
                                        {{--@endif--}}

                                    </tr>
                                    <tr>
                                        <td><b>COMMENTAIRE :</b></td>
                                        {{--@if (strlen($consultations->commentaire)>25)--}}

                                        <td>{{ ($consultations->commentaire) }}</td>
                                        {{--@endif--}}

                                    </tr>
                                    <tr>
                                        <td><b>DIAGNOSTIQUE :</b></td>
                                        {{--@if (strlen($consultations->diagnostique)>25)--}}

                                        <td>{{ ($consultations->diagnostique) }}</td>
                                        {{--@endif--}}

                                    </tr>
                                    <tr>
                                        <td>
                                            <h1 class="text-info">PARAMETRES</h1>
                                        </td>
                                        <td></td>
                                    </tr>

                                    @if (count($patient->parametres)>0)

                                        <tr>
                                            <td class="table-active"><b>DATE :</b></td>
                                            <td class="table-active"><b>{{ $parametres->created_at->toFormattedDateString() }}</b></td>
                                        </tr>
                                        <tr>
                                            <td><b>POIDS :</b></td>
                                            <td>{{ $parametres->poids }} Kg</td>
                                        </tr>
                                        <tr>
                                            <td><b>TENSION :</b></td>
                                            <td>{{ $parametres->tension }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>TEMPERATURE :</b></td>
                                            <td>{{ $parametres->temperature }} °C</td>
                                        </tr>
                                    @else

                                        <tr>
                                            <td>
                                                <b>Aucun paramètre de disponible</b>
                                            </td>
                                            <td></td>
                                        </tr>
                                    @endif

                                    <tr>
                                        <td>
                                            <a class="btn btn-danger" href="{{ route('consultations.create', $patient->id) }}" title="Nouvelle consultation du patient">
                                                <i class="fas fa-book"></i> Nouvelle consultation
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-success" title="Imprimer la lettre de sortie" href="">
                                                <i class="fas fa-print"></i> Lettre de sortie
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <a href="">
                                                <h1 class="text-info">COMPTE RENDU</h1>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="">
                                                <h1 class="text-info">OPERATOIRE</h1>
                                            </a>
                                        </td>
                                    </tr>

                                    @if (count($patient->compte_rendu_bloc_operatoires))
                                        <tr>
                                            <td><b>NOM DU CHIRURGIEN :</b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><b>PRENOM :</b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><b>DATE DE L'INTERVENTION :</b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><b>DUREE DE L'INTERVENTION :</b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><b>DETAILS DE L'INTERVENTION :</b></td>
                                            {{--@if (strlen($compte_rendu_bloc_operatoires) > 25)--}}

                                            <td></td>
                                            {{--@endif--}}

                                        </tr>
                                        <tr>
                                            <td><b>COUT DE L'INTERVENTION :</b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{ route('compte_rendu_bloc.create', $patient->id) }}" title="Rédiger un compte rendu opératoire" class="btn btn-danger">
                                                    <i class="far fa-plus-square"></i> Nouveau CRO
                                                </a>
                                            </td>
                                            <td>
                                                @if (count($patient->compte_rendu_bloc_operatoires))
                                                    <a class="btn btn-success" title="Imprimer le compte rendu opératoire" href="">
                                                        <i class="fas fa-print"></i> Imprimer le CRO
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td>
                                                <a href="{{ route('compte_rendu_bloc.create', $patient->id) }}" title="Rédiger un compte rendu opératoire" class="btn btn-danger">
                                                    <i class="far fa-plus-square"></i> Nouveau CRO
                                                </a>
                                            </td>
                                            <td></td>
                                        </tr>
                                    @endif
                                @else
                                    <tr>
                                        <td>
                                            <a class="btn btn-danger" href="{{ route('consultations.create', $patient->id) }}" title="Nouvelle consultation du patient">
                                                <i class="fas fa-book"></i> Nouvelle consultation
                                            </a>
                                        </td>
                                        <td></td>
                                    </tr>
                                @endif

                                </tbody>
                            </table>

                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-md-6  offset-md-0  toppad">
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
                                            <a class="btn btn-success btn-xs" title="Imprimer l'ordonance" href="{{ route('ordonance.pdf', $ordonance->id) }}">
                                                <i class="fas fa-print"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach


                                </tbody>
                            </table>
                            <div class="clearfix"></div>
                            {{ $ordonances->links() }}

                        </div>
                        <br> @endif

                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Modifier les informations du patients</h3> @include('partials.flash') @include('partials.flash_form')

                            <form action="{{ route('patients.update', $patient->id) }}" method="POST">
                                @csrf @method('PATCH')

                                <table class="table table-user-information ">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <b>Nom du patient :</b>
                                        </td>
                                        <td>
                                            <input name="name" type="text" value='{{ $patient->name }}'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Assurance :</b>
                                        </td>
                                        <td>
                                            <Input name="assurance" type="text" value='{{ $patient->assurance }}'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Numéro d'assurance :</b>
                                        </td>
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
                </div>
                <div class="modal fade" id="ordonanceModal" tabindex="-1" role="dialog" aria-labelledby="ordonanceModal" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ordonance</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" class="btn btn-primary mr-5" href="#home">Ordonance</a></li>
                                    <li><a data-toggle="tab" class="btn btn-primary" href="#menu1">Feuille d'examen complémentaire</a></li>
                                </ul>
                               

                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                                        <form action="{{ route('ordonances.store') }}" method="post">
                                            @csrf

                                            <div class="form-group">
                                                <label for="summernote" class="col-form-label">Ordonance :
                                                </label>
                                                <textarea id="summary-ckeditor" name="description" rows="15" class="form-control">{{ old('description') }}</textarea>
                                            </div>
                                            <input type="hidden" value="{{ $patient->id }}" name="patient_id">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer
                                            </button>
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                        </form>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                       


               <div class="card" style="width: 48rem;">
                <div class="card-body">
                    <h5 class="card-title">Veuillez cocher les examens à prescrire</h5>
                    <small class="text-info" title="Les champs marqués par une étoile rouge sont obligatoire"><i class="fas fa-info-circle"></i></small>
                    <hr>
                    @include('partials.flash_form')
                    <form class="form-group" action="{{ route('prescriptions.store') }}" method="POST" files="true">
                        @csrf
                        
                        <div class="col-md-12">

                        <div class="checkbox">
                <div class="container">
                    <div class="row">
                        
			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part text-center">
						<label>Hématologie</label>
						<br>
                            <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="Hématologie[]" value="NFS">NFS
                                    
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"  
                                    name="Hématologie[]" value="Groupe">Groupe
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"  
                                    name="Hématologie[]" value="rhésus">rhésus
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"  
                                    name="Hématologie[]" value="CRP">CRP
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"  
                                    name="Hématologie[]" value="Autres">Autres
                                </label>
                            </div>
 
					 </div>
				</div>	 
				<br>
				 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part text-center">
                    
						<div class="title">
							<h6>Hémostase</h6>
						</div><br>
                         <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Temps_goagulation" name="Temps_goagulation">
                                <label class="custom-control-label" for="Temps_goagulation">Temps de goagulation</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Temps de céphaline activé" name="Temps de céphaline activé">
                                <label class="custom-control-label" for="Temps de céphaline activé">Temps de céphaline activé</label>
                            </div>
                            
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Temps de saignement" name="Temps de saignement">
                                <label class="custom-control-label" for="Temps de saignement">Temps de saignement</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Temps de thrombine" name="Temps de thrombine">
                                <label class="custom-control-label" for="Temps de thrombine">Temps de thrombine</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Taux de prothrombine" name="Taux de prothrombine">
                                <label class="custom-control-label" for="Taux de prothrombine">Taux de prothrombine (INR)</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Autres" name="Autres">
                                <label class="custom-control-label" for="Autres">Autres</label>
                            </div>
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part text-center">
						<div class="title">
							<h6>Biochimie</h6>
						</div><br>
                         <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Glycémie" name="Glycémie">
                                <label class="custom-control-label" for="Glycémie">Glycémie</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Lonogramme" name="Lonogramme">
                                <label class="custom-control-label" for="Lonogramme">Lonogramme Na + / K+ / Cl- / Ca +</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Acide_Urique" name="Acide_Urique">
                                <label class="custom-control-label" for="Acide_Urique">Acide Urique</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Créatinine" name="Créatinine">
                                <label class="custom-control-label" for="Créatinine">Créatinine</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Clairance_Créatine" name="Clairance_Créatine">
                                <label class="custom-control-label" for="Clairance_Créatine">Clairance de la Créatine</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Amylases" name="Amylases">
                                <label class="custom-control-label" for="Amylases">Amylases</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Gamma_GT" name="Gamma_GT">
                                <label class="custom-control-label" for="Gamma_GT">Gamma GT</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Transaminases" name="Transaminases">
                                <label class="custom-control-label" for="Transaminases">Transaminases (GOT – GPT)</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Cholesterol" name="Cholesterol">
                                <label class="custom-control-label" for="Cholesterol">Cholesterol (HDL-LDL)</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="LDH" name="LDH">
                                <label class="custom-control-label" for="LDH">LDH</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Phosphatases" name="Phosphatases">
                                <label class="custom-control-label" for="Phosphatases">Phosphatases</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="alcalines" name="alcalines">
                                <label class="custom-control-label" for="alcalines">alcalines</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Autres" name="Autres">
                                <label class="custom-control-label" for="Autres">Autres</label>
                            </div>
                            
					 </div>
				</div>	 
				
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <br>
					<div class="box-part text-center">
						<div class="title">
							<h6>Hormonologie/Sérologie</h6>
						</div><br>
                         <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="FSH" name="FSH">
                                <label class="custom-control-label" for="FSH">FSH</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="LH" name="LH">
                                <label class="custom-control-label" for="LH">LH</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Prolactine" name="Prolactine">
                                <label class="custom-control-label" for="Prolactine">Prolactine</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="TSH" name="TSH">
                                <label class="custom-control-label" for="TSH">TSH</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="PTH" name="PTH">
                                <label class="custom-control-label" for="PTH">PTH</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="AMH" name="AMH">
                                <label class="custom-control-label" for="AMH">AMH</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Inhibine" name="Inhibine">
                                <label class="custom-control-label" for="Inhibine">Inhibine B</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Testostérone" name="Testostérone">
                                <label class="custom-control-label" for="Testostérone">Testostérone libre</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Sérologie_chlamydia" name="Sérologie_chlamydia">
                                <label class="custom-control-label" for="Sérologie_chlamydia">Sérologie chlamydia</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Sérologie_syphilis" name="Sérologie_syphilis">
                                <label class="custom-control-label" for="Sérologie_syphilis">Sérologie syphilis</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Sérologie_Hépatite_c" name="Sérologie_Hépatite_c">
                                <label class="custom-control-label" for="Sérologie_Hépatite_c">Sérologie Hépatite C</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Sérologie_Hépatite_B" name="Sérologie_Hépatite_B">
                                <label class="custom-control-label" for="Sérologie_Hépatite_B">Sérologie Hépatite B</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Caryotype" name="Caryotype">
                                <label class="custom-control-label" for="Caryotype">Caryotype</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Autr" name="Autr">
                                <label class="custom-control-label" for="Autr">Autres</label>
                            </div>
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                 <br>
					<div class="box-part text-center">
						<div class="title">
							<h6>Marqueurs_Tumoraux</h6>
						</div><br>
                         <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="PSA_Total" name="PSA_Total">
                                <label class="custom-control-label" for="PSA_Total">PSA Total</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="PSA_Libre" name="PSA_Libre">
                                <label class="custom-control-label" for="PSA_Libre">PSA Libre</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="XFP" name="XFP">
                                <label class="custom-control-label" for="XFP">XFP</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="BHCG" name="BHCG">
                                <label class="custom-control-label" for="BHCG">BHCG</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="CEA " name="CEA ">
                                <label class="custom-control-label" for="CEA ">CEA </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="CA " name="CA">
                                <label class="custom-control-label" for="CA">CA 15,3</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="CA_125" name="CA_125">
                                <label class="custom-control-label" for="CA_125">CA 125</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="CA_19,9" name="CA_19,9">
                                <label class="custom-control-label" for="CA_19,9">CA 19,9</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Autr1" name="Autr1">
                                <label class="custom-control-label" for="Autr1">Autr1</label>
                            </div>
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                 <br>
					<div class="box-part text-center">
						<div class="title">
							<h6>Bactériologie_Parasitologie</h6>
						</div><br>
                         <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Prélèvement_utétral" name="Prélèvement_utétral">
                                <label class="custom-control-label" for="Prélèvement_utétral">Prélèvement utétral</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Prélèvement_pus" name="Prélèvement_pus">
                                <label class="custom-control-label" for="Prélèvement_pus">Prélèvement pus</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Recherche_chlamydia" name="Recherche_chlamydia">
                                <label class="custom-control-label" for="Recherche_chlamydia">Recherche chlamydia</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Goutte_épaisse" name="Goutte_épaisse">
                                <label class="custom-control-label" for="Goutte_épaisse">Goutte épaisse</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Hémoculture" name="Hémoculture">
                                <label class="custom-control-label" for="Hémoculture">Hémoculture</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Recherche BKcrachats" name="Recherche BKcrachats">
                                <label class="custom-control-label" for="Recherche BKcrachats">Recherche BKcrachats</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Coproculture" name="Coproculture">
                                <label class="custom-control-label" for="Coproculture">Coproculture</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="autres4" name="autres4">
                                <label class="custom-control-label" for="autres4">autres4</label>
                            </div>
						</div>
                </div>
                

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <br>
					<div class="box-part text-center">
					    
						<div class="title">
							<h6>Spermiologie</h6>
						</div><br>
                         <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Spermogramme" name="Spermogramme">
                                <label class="custom-control-label" for="Spermogramme">Spermogramme</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Spermoculture" name="Spermoculture">
                                <label class="custom-control-label" for="Spermoculture">Spermoculture</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Contrôle_sectomie" name="Contrôle_sectomie">
                                <label class="custom-control-label" for="Contrôle_sectomie">Contrôle sectomie</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Fructose" name="Fructose">
                                <label class="custom-control-label" for="Fructose">Fructose</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Alpha_Glucosidase" name="Alpha_Glucosidase">
                                <label class="custom-control-label" for="Alpha_Glucosidase">Alpha Glucosidase</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Autres" name="Autres">
                                <label class="custom-control-label" for="Autres">Autres6</label>
                            </div>
                           
					 </div>
				</div>	 
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <br>
					<div class="box-part text-center">
					    <div class="title">
							<h6>Urines</h6>
						</div><br>
                         <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id=" Anatomo_Cytopathologie" name=" Anatomo_Cytopathologie">
                                <label class="custom-control-label" for=" Anatomo_Cytopathologie"> Anatomo – Cytopathologie</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Recherche BK" name="Recherche BK">
                                <label class="custom-control-label" for="Recherche BK">Recherche BK</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Cytobactérioloque" name="Cytobactérioloque">
                                <label class="custom-control-label" for="Cytobactérioloque">Examen Cytobactérioloque et Antibiogramme</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Recherche_Shistozomiase" name="Recherche_Shistozomiase">
                                <label class="custom-control-label" for="Recherche_Shistozomiase">Recherche Shistozomiase</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="autre2" name="autre2">
                                <label class="custom-control-label" for="autre2">Autres</label>
                            </div>
					 </div>
				</div>	 
                
		</div>		
    </div>
</div>
<input type="hidden" value="{{ $patient->id }}" name="patient_id">
   <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
   <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
                </div>
                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                            
    </body>

@stop
