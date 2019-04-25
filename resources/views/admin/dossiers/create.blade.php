@extends('layouts.admin')

@section('title', 'CMCU | Rensegner un dossier patient')

@section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->
        <div class="container">
            <h1 class="text-center">RENSEIGNER LE DOSSIER DU PATIENT PATIENT</h1>
            <hr>
            @include('partials.flash_form')
            <div class="form-row mt-4">
                <div class="col-sm-5 pb-3">
                    <label for="poids">Poids</label>
                    <input type="text" class="form-control" value="{{ old('taille') }}" name="poids" placeholder="Poids du patient">
                </div>

                <div class="col-sm-3 pb-3">
                    <label for="tension">Tension</label>
                    <input type="text" class="form-control" value="{{ old('tension') }}" name="tension" placeholder="Tension du patient">
                </div>

                <div class="col-sm-4 pb-3">
                    <label for="temperature">Température</label>
                    <div class="input-group">
                        <input type="text" class="form-control" value="{{ old('temperature') }}" name="temperature" placeholder="Température du patient">
                    </div>
                </div>

                <div class="col-md-6 pb-3">
                    <label for="exampleAccount">Sexe</label>
                    <div class="form-group small">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="sexe" id="sexe" value="option1"> Homme
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="sexe" id="sexe" value="option2"> Femme
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 pb-3">
                    <label for="adresse">Adresse</label>
                    <input type="text" class="form-control" value="{{ old('adresse') }}" name="adresse" placeholder="Adresse du patient">
                </div>

                <div class="col-sm-6 pb-3">
                    <label for="exampleLast">Profession</label>
                    <input type="text" value="{{ old('proffession') }}" class="form-control" name="profession" placeholder="Profession du patient">
                </div>

                <div class="col-sm-6 pb-3">
                    <label for="date_naissance">Date de naissance</label>
                    <input type="text" class="form-control" value="{{ old('date_naissance') }}" name="date_naissance" placeholder="Date de naissance">
                </div>

                <div class="col-sm-6 pb-3">
                    <label for="lieu_naissance">Lieu de naissance</label>
                    <input type="text" class="form-control" value="{{ old('lieu_naissance') }}" name="lieu_naissance" placeholder="Lieu de naissance">
                </div>

                <div class="col-sm-3 pb-3">
                    <label for="lieu_naissance">Patient</label>
                    <select class="form-control" name="">
                        <option>Patient 1</option>
                        <option>Patient 2</option>
                    </select>
                </div>

                <div class="col-md-6 pb-3">
                    <label for="commentaire">Commentaire</label>
                    <textarea class="form-control" name="commentaire"></textarea>
                    <small class="text-info">
                        Votre commentaire ici
                    </small>
                </div>

            </div>
            <div class="row">
                <button type="submit" class="btn btn-primary btn-lg col-md-3" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>&#xA0;Ajouter</button>
                <a href="{{ route('patients.index') }}" class="btn btn-warning btn-lg col-md-3 offset-md-1" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>&#xA0;Annulé</a>
            </div>
        </div>
    </div>
    </body>

@stop
