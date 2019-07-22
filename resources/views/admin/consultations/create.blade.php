@extends('layouts.admin')
@section('title', 'CMCU | Renseignement du dossier patient')
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
                    <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-success float-right"><i
                            class="fas fa-arrow-left"></i> Retour au dossier patients</a>
                </div>
                <br>
                <br>
                <div class="col-md-6  offset-md-0  toppad">
                    <div class="card">
                        <div class="card-body">
                            @include('partials.flash_form')
                            <h3 class="card-title">Informations relatives au dossier patient</h3>
                            <small class="text-danger"><i><strong><i class="fas fa-exclamation-triangle"></i> Attention
                                        !! espace réservé au médécin</strong></i></small>
                            <table class="table table-user-information ">
                                <tbody>
                                <form action="{{ route("consultations.store") }}" method="post">
                                    @csrf
                                    <tr>
                                        <td>
                                            <h4><strong>Consultation</strong></h4>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><b>Médécin de référence :</b></td>
                                        <td>
                                            <select class="form-control" name="medecin" id="medecin" required>
                                                <option value=""> Nom du médécin</option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->name }} {{ $user->prenom }}">{{ $user->name }} {{ $user->prenom }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Motif de consultation :</b></td>
                                        <td>
                                            <textarea maxlength="30" name="motif" cols="45" rows="5" placeholder="Motif de la consultation" required>{{ old('motif') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Antécédent médicaux :</b></td>
                                        <td>
                                            <textarea maxlength="30" name="antecedent_m" cols="45" rows="3">{{ old('antecedent_m') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Antécédent chirurgicaux :</b></td>
                                        <td>
                                            <textarea maxlength="30" name="antecedent_c" cols="45" rows="3">{{ old('antecedent_c') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Allergies :</b></td>
                                        <td>
                                            <textarea maxlength="30" name="allergie" cols="45" rows="2">{{ old('allergie') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Goupe sanguin du patient :</b></td>
                                        <td>
                                            <select class="form-control" name="groupe" id="groupe">
                                                <option value="">Groupes sanguins</option>
                                                <option value="O-">O-</option>
                                                <option value="O+">O+</option>
                                                <option value="B-">B-</option>
                                                <option value="B+">B+</option>
                                                <option value="A-">A-</option>
                                                <option value="A+">A+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="AB+">AB+</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <input name="patient_id" value="{{ $patient->id }}" type="hidden">
                                    </tr>
                                    <tr>
                                        <td><b>Commentaire :</b></td>
                                        <td>
                                            <textarea maxlength="30" name="commentaire" cols="45" rows="5" placeholder="Ici la note du médécin" required>{{ old('commentaire') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Examens physiques :</b></td>
                                        <td>
                                            <textarea maxlength="30" name="examen_p" cols="45" rows="3" placeholder="Examens physiques" required>{{ old('examen_p') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Examens corporels :</b></td>
                                        <td>
                                            <textarea maxlength="30" name="examen_c" cols="45" rows="3" placeholder="Examens corporels" required>{{ old('examen_c') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Diagnostique du médécin :</b></td>
                                        <td>
                                            <textarea maxlength="30" name="diagnostique" cols="45" rows="3" placeholder="Votre premier avis" required>{{ old('diagnostique') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Décision :</b></td>
                                        <td class="form-group small">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" tabIndex="1" onClick="ckChange(this)" type="checkbox" name="decision" id="decision1" value="Hospitalisation"> Hospitalisation
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" tabIndex="1" onClick="ckChange(this)" type="checkbox" name="decision" id="decision2" value="Intervention chirurgicale"> Intervention chirurgicale
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="traitement" style='display:none;'>
                                        <td><b>Traitement proposé :</b></td>
                                        <td>
                                            <textarea maxlength="30" name="traitement" cols="45" rows="4" placeholder="Traitement proposé" required>{{ old('traitement') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr id="cout" style='display:none;'>
                                        <td><b>Coût de l'opération :</b></td>
                                        <td>
                                            <input class="form-control col-md-5" type="number" name="cout" id="cout" value="{{ old('cout') }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                        </td>
                                        <td></td>
                                    </tr>
                                </form>

                                <div class="modal fade" id="soinsModal" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Soins quotidiens</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('soins.store') }}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="" class="col-form-label">Liste des
                                                            soins:</label>
                                                        <select class="form-control col-md-5" name="contexte" id="contexte" required>
                                                            <option value="">Veuillez choisir le contexte des soins</option>
                                                            <option value="Bloc opératoire">Bloc opératoire</option>
                                                            <option value="Hospitlisation">Hospitalisation</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="col-form-label">Liste des
                                                            soins:</label>
                                                        <textarea maxlength="30" id="summary-ckeditor1" rows="15" name="content" class="form-control" required>{{ old('content') }}</textarea>
                                                    </div>
                                                    <input type="hidden" value="{{ $patient->id }}" name="patient_id">
                                                    <button type="submit" class="btn btn-primary">Enegistrer</button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Fermer
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6  offset-md-0  toppad">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Prise des paramètres du
                                <small><strong></strong></small>
                            </div>
                            <small class="text-info" title="La prise des paramètres du patient doit être quotidienne"><i
                                    class="fas fa-info-circle"></i></small>
                            <form action="{{ route('parametres.store') }}" method="post">
                                @csrf
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>Poids</td>
                                        <td>
                                            <input name="poids" type="text" value='{{ old(' poids ') }}'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Température</td>
                                        <td>
                                            <Input name="temperature" type="text" value='{{ old(' temperature ') }}'>
                                        </td>
                                    </tr>
                                    <input type="hidden" value="{{ $patient->id }}" name="patient_id">
                                    <tr>
                                        <td>Tenssion</td>
                                        <td>
                                            <Input name="tension" type="text" value='{{ old(' tension ') }}'>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-primary">Ajouter au dossier</button>
                            </form>
                        </div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                            data-target="#soinsModal" data-whatever="">Soins quotidients
                    </button>
                </div>
            </div>
        </div>
    </div>
    </body>
@stop
