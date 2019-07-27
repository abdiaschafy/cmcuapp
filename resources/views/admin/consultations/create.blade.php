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
                <div class="col-md-7  offset-md-0  toppad">
                    <div class="card">
                        <div class="card-body">
                            @include('partials.flash_form')
                            <h3 class="card-title">Informations relatives au dossier patient</h3>
                            <small class="text-danger"><i><strong><i class="fas fa-exclamation-triangle"></i> Attention
                                        !! espace réservé au médécin</strong></i>
                            </small>
                            <table class="table table-user-information ">
                                <tbody>
                                <form action="{{ route("consultations.store") }}" method="post">
                                    @csrf
                                    <tr>
                                        <td></td>
                                        <td>
                                            <h5 class="text-primary"><strong>CONSULTATION DE SUIVI</strong></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Médécin de référence :</b> <span class="text-danger">*</span></td>
                                        <td>
                                            <select class="form-control" name="medecin_r" id="medecin_r" required>
                                                <option value=""> Nom du médécin</option>
                                                @foreach ($users as $user)
                                                    <option
                                                        value="{{ $user->name }} {{ $user->prenom }}" {{old("medecin_r") ?: '' ? "selected": ""}}>{{ $user->name }} {{ $user->prenom }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Motif de consultation :</b> <span class="text-danger">*</span></td>
                                        <td>
                                            <textarea class="splitLines" wrap="hard" name="motif_c" cols="45" rows="5"
                                                      placeholder="Motif de la consultation"
                                                      required>{{ old('motif_c') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Intérrogatoire :</b> <span class="text-danger">*</span></td>
                                        <td>
                                            <textarea class="splitLines" name="interrogatoire" cols="45" rows="5"
                                                      placeholder="Ici la note du médécin"
                                                      required>{{ old('interrogatoire') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Antécédent médicaux :</b></td>
                                        <td>
                                            <textarea class="splitLines" name="antecedent_m" cols="45"
                                                      rows="3">{{ old('antecedent_m') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Antécédent chirurgicaux :</b></td>
                                        <td>
                                            <textarea class="splitLines" name="antecedent_c" cols="45"
                                                      rows="3">{{ old('antecedent_c') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Allergies :</b></td>
                                        <td>
                                            <textarea class="splitLines" name="allergie" cols="45"
                                                      rows="2">{{ old('allergie') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Goupe sanguin du patient :</b></td>
                                        <td>
                                            <select class="form-control" name="groupe" id="groupe">
                                                <option value="">Groupes sanguins</option>
                                                <option value="O-" {{old("groupe") ?: '' ? "selected": ""}}>O-</option>
                                                <option value="O+" {{old("groupe") ?: '' ? "selected": ""}}>O+</option>
                                                <option value="B-" {{old("groupe") ?: '' ? "selected": ""}}>B-</option>
                                                <option value="B+" {{old("groupe") ?: '' ? "selected": ""}}>B+</option>
                                                <option value="A-" {{old("groupe") ?: '' ? "selected": ""}}>A-</option>
                                                <option value="A+" {{old("groupe") ?: '' ? "selected": ""}}>A+</option>
                                                <option value="AB- {{old("groupe") ?: '' ? "selected": ""}}">AB-</option>
                                                <option value="AB+ {{old("groupe") ?: '' ? "selected": ""}}">AB+</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><h5 class="text-primary">EXAMENS A REALISER</h5></td>
                                    </tr>
                                    <tr>
                                        <input name="patient_id" value="{{ $patient->id }}" type="hidden">
                                    </tr>
                                    <tr>
                                        <td><b>Examens physiques :</b> <span class="text-danger">*</span></td>
                                        <td>
                                            <textarea class="splitLines" name="examen_p" cols="45" rows="3" placeholder="Examens physiques"
                                                      required>{{ old('examen_p') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Examens compléméntaires:</b> <span class="text-danger">*</span></td>
                                        <td>
                                            <textarea class="splitLines" name="examen_c" cols="45" rows="3"
                                                      placeholder="Examens compléméntaires"
                                                      required>{{ old('examen_c') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Diagnostic médical :</b> <span class="text-danger">*</span></td>
                                        <td>
                                            <textarea class="splitLines" name="diagnostic" cols="45" rows="3"
                                                      placeholder="Votre premier avis"
                                                      required>{{ old('diagnostic') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Proposition de suivi :</b> <span class="text-danger">*</span></td>
                                        <td class="form-group small">
                                            <div class="form-check">
                                                <input class="form-check-input" tabIndex="1" onClick="ckChange(this)"
                                                       type="checkbox" name="proposition[]" id="decision1"
                                                       value="Hospitalisation"> Hospitalisation
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" tabIndex="1" onClick="ckChange(this)"
                                                       type="checkbox" name="proposition[]" id="decision2"
                                                       value="Intervention chirurgicale"> Intervention chirurgicale
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Date d'entré :</b>
                                            <span class="text-danger">*</span>
                                        </td>
                                        <td>
                                            <b>Type :</b>
                                            <span class="text-danger">*</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="date" name="date_e" value="{{ old('date_e') }}" class="form-control col-md-10" required/>
                                        </td>
                                        <td>
                                            <select class="form-control" name="type_e" required>
                                                <option value="">Motif d'entrer</option>
                                                <option value="Urgence" {{old("type_e") ?: '' ? "selected": ""}}>Urgence</option>
                                                <option value="Hospitalisation" {{old("type_e") ?: '' ? "selected": ""}}>Hospitalisation</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Date de sortie :</b>
                                            <span class="text-danger">*</span>
                                        </td>
                                        <td>
                                            <b>Type :</b>
                                            <span class="text-danger">*</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="date" name="date_s" value="{{ old('date_s') }}" class="form-control col-md-10" required/>
                                        </td>
                                        <td>
                                            <select class="form-control" name="type_s" {{ old('type_s') }} required>
                                                <option value="">Motif de sortie</option>
                                                <option value="Retour au domicile" {{old("type_s") ?: '' ? "selected": ""}}>Retour au domicile</option>
                                                <option value="Transfert" {{old("type_s") ?: '' ? "selected": ""}}>Transfert</option>
                                                <option value="Convalescence" {{old("type_s") ?: '' ? "selected": ""}}>Convalescence</option>
                                                <option value="Décédé" {{old("type_s") ?: '' ? "selected": ""}}>Décédé</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr id="cout" style='display:none;'>
                                        <td><b>Devis prévisionnel :</b></td>
                                        <td>
                                            <input class="form-control col-md-5" type="number" name="devis_p" id="cout"
                                                   value="{{ old('devis_p') }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                        </td>
                                        <td></td>
                                    </tr>
                                </form>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-5  offset-md-0  toppad">
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
                                            <input name="poids" type="number" value='{{ old(' poids ') }}'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Température</td>
                                        <td>
                                            <Input name="temperature" type="number" value='{{ old(' temperature ') }}'>
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
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        let splitLines = document.getElementsByClassName("splitLines")
        let textarea = [];
        for(let x=0; x<splitLines.length; x++){
            textarea[x] = splitLines[x];
            textarea[x].onkeyup = function () {
                var lines = textarea[x].value.split("\n");
                for (var i = 0; i < lines.length; i++) {
                    if (lines[i].length <= 27) continue;
                    var j = 0;
                    space = 27;
                    while (j++ <= 27) {
                        if (lines[i].charAt(j) === " ") space = j;
                    }
                    lines[i + 1] = lines[i].substring(space + 1) + (lines[i + 1] || "");
                    lines[i] = lines[i].substring(0, space);
                }
                textarea[x].value = lines.slice(0, 30).join("\n");
            };
        }
    </script>
    </body>
@stop
