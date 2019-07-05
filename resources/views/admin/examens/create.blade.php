@extends('layouts.admin')

@section('title', 'CMCU | Ajouter un examen')

@section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->

        <div class="container">
            <h1 class="text-center">IMPORTER UN EXAMEN </h1>
            <hr>
            @include('partials.flash_form')

            <div class="card" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">Ajouter un examen</h5>
                    <small class="text-info" title="Les champs marqués par une étoile rouge sont obligatoire"><i class="fas fa-info-circle"></i></small>
                    <hr>
                    <form class="form-group col-md-10" action="{{ route('examens.store') }}" method="POST">
                     @csrf
                   <div class="col-md-12">
                        <div class="form-group">
                   <h4> <label for="image">Image<span class="text-danger"></span></label></h4>
                    <input type="file" class="form-control" class="custum-file-input" name="image" value="{{ old('image') }}"  required/>
                 </div>
                            </br>
                            <button type="submit" class="btn btn-primary btn-lg col-md-5" title="En cliquant sur ce bouton vous importez un nouveau examen">Ajouter</button>
                            <a href="{{ route('examens.index') }}" class="btn btn-warning btn-lg col-md-5 offset-md-1" title="Retour à la liste des patients">Annuler</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    </body>

@stop
