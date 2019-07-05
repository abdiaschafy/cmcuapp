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
            <h1 class="text-center">AJOUTER UN DOSSIER PATIENT</h1>
            <hr>
            @include('partials.flash_form')

            <div class="card" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">Ajouter un patient</h5>
                    <small class="text-info" title="Les champs marqués par une étoile rouge sont obligatoire"><i class="fas fa-info-circle"></i></small>
                    <hr>
                    <form class="form-group col-md-10" action="{{ route('patients.store') }}" method="POST">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name" class="col-form-label text-md-right">Nom <span class="text-danger">*</span></label>
                                <input name="name" class="form-control" value="{{ old('name') }}" type="text" placeholder="Nom du patient" required>
                            </div>

                            <div class="form-group">
                                <label for="assurance" class="col-form-label text-md-right">Assurance</label>
                                <input name="assurance" class="form-control" value="{{ old('assurance') }}" type="text" placeholder="Assurance" required>
                            </div>

                            <div class="form-group">
                                <label for="numero_assurance" class="col-form-label text-md-right">Numéro d'assurance</label>
                                <input name="numero_assurance" class="form-control" value="{{ old('numero_assurance') }}" type="text" placeholder="Numéro d'assurance" required>
                            </div>
                            </br>

                            <button type="submit" class="btn btn-primary btn-lg col-md-5" title="En cliquant sur ce bouton vous enregistrer un nouveau patient">Ajouter</button>
                            <a href="{{ route('patients.index') }}" class="btn btn-warning btn-lg col-md-5 offset-md-1" title="Retour à la liste des patients">Annuler</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    </body>

@stop
