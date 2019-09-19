@extends('layouts.admin')

@section('title', 'CMCU | Ajouter un client')

@section('content')

    <body>
    <div class="se-pr-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->

        <div class="container">
            <h1 class="text-center">AJOUTER UN CLIENT</h1>
            <hr>
            @include('partials.flash_form')

            <div class="card" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">Ajouter un client</h5>
                    <small class="text-info" title="Les champs marqués par une étoile rouge sont obligatoire"><i class="fas fa-info-circle"></i></small>
                    <hr>
                    <form class="form-group col-md-10" action="{{ route('clients.store') }}" method="POST">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nom" class="col-form-label text-md-right">Nom <span class="text-danger">*</span></label>
                                <input name="nom" class="form-control" value="{{ old('nom') }}" type="text" placeholder="Nom" required>
                            </div>
                            <div class="form-group">
                                <label for="prenom" class="col-form-label text-md-right">Prenom <span class="text-danger">*</span></label>
                                <input name="prenom" class="form-control" value="{{ old('prenom') }}" type="text" placeholder="prenom" >
                            </div>
                            <div class="form-group">
                                <label for="motif" class="col-form-label text-md-right">motif</label>
                                <input name="motif" class="form-control" value="{{ old('motif') }}" type="text" placeholder="motif" >
                            </div>
                            <div class="form-group">
                                <label for="montant" class="col-form-label text-md-right">Montant <span class="text-danger">*</span></label>
                                <input name="montant" class="form-control" value="{{ old('montant') }}" type="text" placeholder="montant" >
                            </div>
                            <div class="form-group">
                                <label for="avance" class="col-form-label text-md-right">avance</label>
                                <input name="avance" class="form-control" value="{{ old('avance') }}" type="text" placeholder="avance" >
                            </div>
                           
                           
                            <div class="form-group">
                            </br>

                            <button type="submit" class="btn btn-primary btn-lg col-md-5" title="En cliquant sur ce bouton vous enregistrer un nouveau client">Ajouter</button>
                            <a href="{{ route('clients.index') }}" class="btn btn-warning btn-lg col-md-5 offset-md-1" title="Retour à la liste des clients">Annuler</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    </body>

@stop