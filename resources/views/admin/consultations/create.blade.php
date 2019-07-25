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
                                            <textarea id="splitLines" wrap="hard" name="motif" cols="45" rows="5" placeholder="Motif de la consultation" required>{{ old('motif') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Antécédent médicaux :</b></td>
                                        <td>
                                            <textarea name="antecedent_m" cols="45" rows="3">{{ old('antecedent_m') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Antécédent chirurgicaux :</b></td>
                                        <td>
                                            <textarea name="antecedent_c" cols="45" rows="3">{{ old('antecedent_c') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Allergies :</b></td>
                                        <td>
                                            <textarea name="allergie" cols="45" rows="2">{{ old('allergie') }}</textarea>
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
                                        <td><b>Intérogatoire :</b></td>
                                        <td>
                                            <textarea name="commentaire" cols="45" rows="5" placeholder="Ici la note du médécin" required>{{ old('commentaire') }}</textarea>
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
                                        <td><b>Examens physiques :</b></td>
                                        <td>
                                            <textarea name="examen_p" cols="45" rows="3" placeholder="Examens physiques" required>{{ old('examen_p') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Examens compléméntaires:</b></td>
                                        <td>
                                            <textarea name="examen_c" cols="45" rows="3" placeholder="Examens compléméntaires" required>{{ old('examen_c') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Diagnostic médical :</b></td>
                                        <td>
                                            <textarea name="diagnostique" cols="45" rows="3" placeholder="Votre premier avis" required>{{ old('diagnostique') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Proposition de suivi :</b></td>
                                        <td class="form-group small">
                                            <div class="form-check">
                                                <input class="form-check-input" tabIndex="1" onClick="ckChange(this)" type="checkbox" name="decision" id="decision1" value="Hospitalisation"> Hospitalisation
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" tabIndex="1" onClick="ckChange(this)" type="checkbox" name="decision" id="decision2" value="Intervention chirurgicale"> Intervention chirurgicale
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="cout" style='display:none;'>
                                        <td><b>Devis prévisionnel :</b></td>
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

                                {{-- MODAL SOINS QUOTIDIENTS ICI --}}
                                    @include('partials.admin.modal.soins_quotidient')
                                {{-- FIN DU MODAL SOINS QUOTIDIEN ICI --}}
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

    <script type="text/javascript">
        var textarea = document.getElementById("splitLines");
        textarea.onkeyup = function() {
            var lines = textarea.value.split("\n");
            for (var i = 0; i < lines.length; i++) {
                if (lines[i].length <= 27) continue;
                var j = 0; space = 27;
                while (j++ <= 27) {
                    if (lines[i].charAt(j) === " ") space = j;
                }
                lines[i + 1] = lines[i].substring(space + 1) + (lines[i + 1] || "");
                lines[i] = lines[i].substring(0, space);
            }
            textarea.value = lines.slice(0, 30).join("\n");
        };
    </script>
    </body>
@stop
