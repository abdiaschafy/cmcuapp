@extends('layouts.admin')
@section('title', 'CMCU | Modification d\'un rendez-vous')
@section('content')
    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')
    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->
        <div class="container">
            <h1 class="text-center">MODIFIER UN RENDEZ-VOUS</h1>
            <hr>
            <div class="card" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">Modification du rendez-vous</h5>
                    <small class="text-info" title="Les champs marqués par une étoile rouge sont obligatoire"><i class="fas fa-info-circle"></i></small>
                    <hr>
                    <form class="form-group col-md-10" action="{{ route('events.update', $event->id) }}" method="POST">
                        {{method_field('PATCH')}} {{csrf_field()}}
                        <div class="form-group">
                            <label for="title" class="col-form-label text-md-right">Description du rendez-vous <span class="text-danger">*</span></label>
                            <input name="title" class="form-control" value="{{ $event->title }}" type="text" placeholder="Ex: rendez-vous avec le patient John Doe">
                        </div>
                        <label for="medecin" class="col-form-label text-md-right">Mon du médécin <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <select class="form-control col-md-12" name="medecin">
                                @foreach($users as $user)
                                    <option value="{{ $user->name }}"  {{ $user->name == ' ' ? 'selected' : '' }}>{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="color" class="col-form-label text-md-right">Couleur <span class="text-danger">*</span></label>
                                <input name="color" class="form-control" value="{{ $event->color }}" type="color" placeholder="Couleur">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date" class="col-form-label text-md-right">Date du rendez-vous <span class="text-danger">*</span></label>
                                <input name="date" class="form-control" value="{{ $event->date }}" type="date">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="start_time" class="col-form-label text-md-right">Heure du début <span class="text-danger">*</span></label>
                                <input name="start_time" type="time" value="{{ $event->end_time }}" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="end_time" class="col-form-label text-md-right">Heure du fin</label>
                                <input name="end_time" type="time" value="{{ $event->start_time }}" class="form-control">
                            </div>
                        </div>
                        <input name="patient_id" type="hidden" value="{{ $event->patient_id }}">

                        <button type="submit" title="Valider pour enregistrer la modification" class="btn btn-primary btn-lg col-md-5">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
@stop
