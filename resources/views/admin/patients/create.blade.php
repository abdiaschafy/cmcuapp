@extends('layouts.admin')

@section('title', 'CMCU | Ajouter un dossier patient')

@section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->
        <div class="container">
            <h1 class="text-center">AJOUTER UN DOSSIER PATIENT</h1>
            <hr>
            @include('partials.flash_form')
            <form class="form-group col-md-6" action="{{ route('patients.store') }}" method="POST">
                @csrf
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name" class="col-form-label text-md-right">{{ __('Nom') }}</label>
                        <input name="name" class="form-control" value="{{ old('name') }}" type="text" placeholder="Nom du patient" required>
                    </div>

                    <div class="form-group">
                        <label for="assurance" class="col-form-label text-md-right">{{ __('Assurance') }}</label>
                        <input name="assurance" class="form-control" value="{{ old('assurance') }}" type="text" placeholder="Assurance" required>
                    </div>

                    <div class="form-group">
                        <label for="numero_assurance" class="col-form-label text-md-right">{{ __('Numero assurance') }}</label>
                        <input name="numero_assurance" class="form-control" value="{{ old('numero_assurance') }}" type="text" placeholder="Numéro d'assurance" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg col-md-5" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>&#xA0;Ajouter</button>
                    <a href="{{ route('patients.index') }}" class="btn btn-warning btn-lg col-md-5 offset-md-1" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>&#xA0;Annulé</a>
                </div>
            </form>
        </div>
        <hr>
    </div>
    </body>

@stop
