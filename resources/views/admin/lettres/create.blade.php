@extends('layouts.admin')

@section('title', 'CMCU | Ajouter un dossier patient')

@section('content')

    <body>
    {{--<div class="se-pre-con"></div>--}}
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->

        <div class="container">
            @include('partials.flash_form')

            <div class="card" style="width: 69rem;">
                <div class="card-body">
                    <h5 class="card-title">ENREGISTRER UNE SORTIE</h5>
                    <small class="text-info" title="Les champs marqués par une étoile rouge sont obligatoire"><i class="fas fa-info-circle"></i></small>
                    <hr>
                    <form class="form-group col-md-10" action="{{ route('store.sortie') }}" method="POST">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="patient" class="col-form-label text-md-right">Nom du patient <span class="text-danger">*</span></label>
                                <select class="form-control col-md-5" name="patient" id="patient" required>
                                    <option value="">Veuillez sélectioner un patient</option>
                                    @foreach ($patients as $patient)
                                        <option value="{{ $patient->name }}">{{ $patient->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="medecin" class="col-form-label text-md-right">Nom du médécin traitant <span class="text-danger">*</span></label>
                                <select class="form-control col-md-5" name="medecin" id="medecin" required>
                                    <option value="">Veuillez sélectioner le médécin traitant</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->name }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="objet" class="col-form-label text-md-right">Objet de la lettre</label>
                                <input name="objet" class="form-control" value="{{ old('objet') }}" type="text">
                            </div>

                            <div class="form-group">
                                <label for="message" class="col-form-label text-md-right">Méssage <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="message" id="" cols="30" rows="10" required></textarea>
                            </div>
                            </br>

                            <button type="submit" class="btn btn-primary btn-lg col-md-5" title="En cliquant sur ce bouton vous enregistrer un nouveau patient">Ajouter</button>
                            <a href="{{ route('index.sortie') }}" class="btn btn-warning btn-lg col-md-5 offset-md-1" title="Retour à la liste des patients">Annuler</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    </body>

@stop
