@extends('layouts.admin')

@section('title', 'CMCU | Nouvelle consultation')

@section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->
        <div class="container">
            <h1 class="text-center">CONSULTATION DU PATIENT {{ $patient->numero_dossier }}</h1>
            <hr>
            <form class="form-group col-md-6" action="{{ route('patients.store') }}" method="POST">
                @csrf
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name" class="col-form-label text-md-right">{{ __('Nom') }}</label>
                        <input name="name" class="form-control" value="{{ old('name') }}" type="text" placeholder="Nom">
                    </div>
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        {!! $errors->first('name', '<span class="text-danger">:message</span>') !!}
                    </div>

                    <div class="form-group">
                        <label for="taille" class="col-form-label text-md-right">{{ __('Taille') }}</label>
                        <input name="taille" class="form-control" value="{{ old('taille') }}" type="text" placeholder="Taille">
                    </div>
                    <div class="form-group {{ $errors->has('taille') ? 'has-error' : '' }}">
                        {!! $errors->first('taille', '<span class="text-danger">:message</span>') !!}
                    </div>

                    <div class="form-group">
                        <label for="sexe" class="col-form-label text-md-right">{{ __('Sexe') }}</label>
                        <br>
                        <input type="radio" id="sexe" class="form-check-inline" name="sexe" value="Homme" required> Homme
                        <br>
                        <input type="radio" id="sexe" class="form-check-inline" name="sexe" value="Femme" required> Femme
                        <br>
                    </div>

                    <div class="form-group">
                        <label for="poids" class="col-form-label text-md-right">{{ __('Poids du patient') }}</label>
                        <input name="poids" rows="2" value="{{ old('poids') }}" class="form-control" placeholder="Poids du patient">
                    </div>
                    <div class="form-group {{ $errors->has('poids') ? 'has-error' : '' }}">
                        {!! $errors->first('poids', '<span class="text-danger">:message</span>') !!}
                    </div>

                    <div class="form-group">
                        <label for="tension" class="col-form-label text-md-right">{{ __('Tension du patient') }}</label>
                        <input name="tension" type="text" rows="2" value="{{ old('tension') }}" class="form-control" placeholder="Tension du patient">
                    </div>
                    <div class="form-group {{ $errors->has('tension') ? 'has-error' : '' }}">
                        {!! $errors->first('tension', '<span class="text-danger">:message</span>') !!}
                    </div>

                    <div class="form-group">
                        <label for="temperature" class="col-form-label text-md-right">{{ __('Température du patient') }}</label>
                        <input name="temperature" type="text" rows="2" value="{{ old('temperature') }}" class="form-control" placeholder="Temp2rqture du patient">
                    </div>
                    <div class="form-group {{ $errors->has('temperature') ? 'has-error' : '' }}">
                        {!! $errors->first('temperature', '<span class="text-danger">:message</span>') !!}
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
