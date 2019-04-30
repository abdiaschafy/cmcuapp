@extends('layouts.admin')

@section('title', 'CMCU | Renseignement du dossier patient')

@section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
        @include('partials.header')
        <div class="container">
            @include('flashy::message')
            <div class="row">
                <div class="col-md-12  toppad  offset-md-0 ">
                    <a href="{{ route('patients.index') }}" class="btn btn-success float-right"><i class="fas fa-arrow-left"></i>  Retour à la liste des patients</a>
                </div>
                <br>
                <br>

                <div class="col-md-6  offset-md-0  toppad">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Informations relatives au dossier patient</h3>
                            <small class="text-danger"><i><strong><i class="fas fa-exclamation-triangle"></i> Attention !! espace réservé au médécin</strong></i></small>
                            <table class="table table-user-information ">
                                <tbody>

                                <form action="{{ url("{$patient/consultations") }}" method="post">
                                    @csrf
                                    @include('partials.flash')
                                    @include('partials.flash_form')
                                    <tr>
                                        <td>
                                            <h4><strong>Consultation</strong></h4></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Commentaire :</td>
                                        <td>
                                            <textarea name="commentaire" value="{{ old('commentaire') }}" id="commentaire" cols="45" rows="5"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Diagnostique du médécin :</td>
                                        <td>
                                            <textarea name="diagnostique" value="{{ old('diagnostique') }}" id="" cols="45" rows="3"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Décision :</td>
                                        <td class="form-group small">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="decision" id="decision" value="Oui"> Hospitalisation
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="decision" id="decision" value="Non"> Intervention
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Coût de l'inervention :</td>
                                        <td>
                                            <input name="cout" value="{{ old('cout') }}" type="number" placeholder="En fcfa">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Durée de l'inervention :</td>
                                        <td>
                                            <input name="dure_intervention" value="{{ old('dure_intervention') }}" type="time">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Résultats d'examens :</td>
                                        <td>
                                            <input name="resultat_examen" value="{{ old('resultat_examen') }}" type="file">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                        </td>
                                        <td></td>
                                    </tr>
                                </form>

                                <form action="" method="post">
                                    <tr>
                                        <td>
                                            <h4><strong>Ordonance</strong></h4></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Contenu :</td>
                                        <td>
                                            <textarea name="ordonance" id="ordonance" cols="45" rows="10"></textarea>
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

                <div class="col-md-6  offset-md-0  toppad">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Prise des paramètres du <small><strong></strong></small></div>
                            <small class="text-info" title="La prise des paramètres du patient doit être quotidienne"><i class="fas fa-info-circle"></i></small>

                            <form action="{{ route('parametres.store') }}" method="POST">
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
                                    <tr>
                                        <td>Tenssion</td>
                                        <td>
                                            <Input name="tenssion" type="text" value='{{ old(' tenssion ') }}'>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-primary">Ajouter au dossier</button>
                            </form>
                        </div>
                    </div>
                    <br>
                    {{--<div class="card">--}}
                        {{--<div class="card-body">--}}
                            {{--<div class="card-title">Fiche de sotie du patient</div>--}}
                            {{--<small class="text-danger"><i><strong><i class="fas fa-exclamation-triangle"></i> Attention !! à remplir à la sortie du patient</strong></i></small>--}}

                            {{--<form action="#" method="POST">--}}
                                {{--<table class="table table-user-information ">--}}
                                    {{--<tbody>--}}
                                    {{--<tr>--}}
                                        {{--<td>Bloc utilisé :</td>--}}
                                        {{--<td>--}}
                                            {{--<select name="" id="">--}}
                                                {{--<option value="">Bloc 1</option>--}}
                                                {{--<option value="">Bloc 2</option>--}}
                                                {{--<option value="">Bloc 3</option>--}}
                                            {{--</select>--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td>Chambre :</td>--}}
                                        {{--<td>--}}
                                            {{--<select name="" id="">--}}
                                                {{--<option value="">Chambre 1</option>--}}
                                                {{--<option value="">Chambre 2</option>--}}
                                                {{--<option value="">Chambre 3</option>--}}
                                            {{--</select>--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td>Prix :</td>--}}
                                        {{--<td>--}}
                                            {{--<input type="number" placeholder="En fcfa">--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td>Durée d'hospitalisation :</td>--}}
                                        {{--<td>--}}
                                            {{--<input type="number" placeholder="En jour">--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--</tbody>--}}
                                {{--</table>--}}
                                {{--<button type="submit" class="btn btn-success">Valider la sortie <span class="text-danger"><i class="fas fa-check"></i></span></button>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                </div>

            </div>
        </div>
    </div>
    </body>

@stop
