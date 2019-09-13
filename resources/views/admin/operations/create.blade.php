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
                <div class="col-md-12  offset-md-0  toppad">
                    <div class="card col-md-8">
                        <div class="card-body">
                            @include('partials.flash_form')
                            <h3 class="card-title">COMPTE-RENDU OPERATOIRE</h3>
                            <small class="text-danger"><i><strong><i class="fas fa-exclamation-triangle"></i> Attention
                                        !! espace réservé au médécin</strong></i></small>
                            <table class="table table-user-information ">
                                <tbody>
                                <form action="{{ route('compte_rendu_bloc.store') }}" method="post">
                                    @csrf
                                    <tr>
                                        <td>
                                            <h5 class="text-primary"><strong>ENTRE / SORTIE PATIENT</strong></h5>
                                        </td>
                                        <td></td>
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
                                    <tr>
                                        <td>
                                            <h5 class="text-primary"><strong>EQUIPE MEDICALE</strong></h5>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><b>Nom du chirurgien :</b> <span class="text-danger">*</span></td>
                                        <td>
                                            <select class="form-control" name="chirurgien" id="chirurgien" required>
                                                <option value=""> Nom du chirurgien</option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->name }} {{ $user->prenom }}" {{old("chirurgien") ?: '' ? "selected": ""}}>{{ $user->name }} {{ $user->prenom }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Aide opératoire :</b> <span class="text-danger">*</span></td>
                                        <td>
                                            <select class="form-control" name="aide_op" id="aide_op" required>
                                                <option value=""> Nom de l'aide opératoire</option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->name }} {{ $user->prenom }}" {{old("aide_op") ?: '' ? "selected": ""}}>{{ $user->name }} {{ $user->prenom }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Anesthésiste :</b> <span class="text-danger">*</span></td>
                                        <td>
                                            <select class="form-control" name="anesthesiste" id="anesthesiste" required>
                                                <option value=""> Nom de l'anesthésiste</option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->name }} {{ $user->prenom }}" {{old("anesthesiste") ?: '' ? "selected": ""}}>{{ $user->name }} {{ $user->prenom }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Infirmier anesthésiste :</b> <span class="text-danger">*</span></td>
                                        <td>
                                            <select class="form-control" name="infirmier_anesthesiste" id="infirmier_anesthesiste" required>
                                                <option value=""> Nom de l'infirmier anesthésiste</option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->name }} {{ $user->prenom }}" {{old("infirmier_anesthesiste") ?: '' ? "selected": ""}}>{{ $user->name }} {{ $user->prenom }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="text-primary"><strong>DETAILS OPERATIONS</strong></h5>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><b>Date de l'inervention :</b> <span class="text-danger">*</span></td>
                                        <td>
                                            <input class="form-control col-md-5" name="date_intervention" value="{{ old('date_intervention') }}"
                                                   type="date" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Durée de l'inervention :</b> <span class="text-danger">*</span></td>
                                        <td>
                                            <input class="form-control col-md-5" name="dure_intervention" value="{{ old('dure_intervention') }}"
                                                   type="time" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Indications opératoires :</b> <span class="text-danger">*</span></td>
                                        <td>
                                            <textarea class="splitLines" name="indication_operatoire" id="indication_operatoire" cols="55" rows="3" required>{{ old('indication_operatoire') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Compte-rendu opératoire :</b> <span class="text-danger">*</span></td>
                                        <td>
                                            <textarea class="splitLines" name="compte_rendu_o" id="compte_rendu_o" cols="55" rows="3" required>{{ old('compte_rendu_o') }}</textarea>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td><b>Résultats histo-pathologiques :</b></td>
                                        <td>
                                            <textarea class="splitLines" name="resultat_histo" id="resultat_histo" cols="55" rows="3">{{ old('resultat_histo') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Suites opératoires:</b> <span class="text-danger">*</span></td>
                                        <td>
                                            <textarea class="splitLines" name="suite_operatoire" id="suite_operatoire" cols="55" rows="3"required>{{ old('suite_operatoire') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Traitement proposé :</b></td>
                                        <td>
                                            <textarea class="splitLines" name="traitement_propose" cols="55" rows="4" placeholder="Traitement proposé">{{ old('traitement_propose') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Soins et examens à réaliser :</b></td>
                                        <td>
                                            <textarea class="splitLines" name="soins" cols="55" rows="4" placeholder="Traitement proposé">{{ old('soins') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Conclusions :</b> <span class="text-danger">*</span></td>
                                        <td>
                                            <textarea class="splitLines" name="conclusion" id="conclusion" cols="55" rows="3" required>{{ old('conclusion') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <input name="patient_id" value="{{ $patient->id }}" type="hidden">
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
                    if (lines[i].length <= 67) continue;
                    var j = 0;
                    space = 67;
                    while (j++ <= 67) {
                        if (lines[i].charAt(j) === " ") space = j;
                    }
                    lines[i + 1] = lines[i].substring(space + 1) + (lines[i + 1] || "");
                    lines[i] = lines[i].substring(0, space);
                }
                textarea[x].value = lines.slice(0, 69).join("\n");
            };
        }
    </script>
    </body>
@stop
