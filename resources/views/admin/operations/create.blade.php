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
                            <h3 class="card-title">COMPTE RENDU OPERATOIRE</h3>
                            <small class="text-danger"><i><strong><i class="fas fa-exclamation-triangle"></i> Attention
                                        !! espace réservé au médécin</strong></i></small>
                            <table class="table table-user-information ">
                                <tbody>
                                </tr>
                                <form action="{{ route('compte_rendu_bloc.store') }}" method="post">
                                    @csrf
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
                                        <td><b>Nom de l'anesthésiste :</b> <span class="text-danger">*</span></td>
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
                                        <td><b>Compte rendu opératoire :</b> <span class="text-danger">*</span></td>
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
                                            <input class="form-control" name="suite_operatoire"  value="{{ old('suite_operatoire') }}" required/>
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
