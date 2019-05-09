@extends('layouts.admin')

@section('title', 'CMCU | Nouveau rendez-vous')

@section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->
        <div class="container">
            <h1 class="text-center">AJOUTER UN RENDEZ-VOUS</h1>
            <hr>
            <form class="form-group col-md-6" action="{{ route('events.store') }}" method="POST">
                @csrf
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title" class="col-form-label text-md-right">{{ __('Titre') }}</label>
                        <input name="title" class="form-control" value="{{ old('title') }}" type="text" placeholder="Titre">
                    </div>
                    <div class="form-group">
                        <label for="medecin" class="col-form-label text-md-right">{{ __('Medecin') }}</label>
                        <select name="medecin" id="">
                            <option value="">Veuillez choisir le médécin</option>
                            @foreach($users as $user)
                            <option value="{{ $user->name }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="color" class="col-form-label text-md-right">{{ __('Couleur') }}</label>
                        <input name="color" class="form-control" value="{{ old('color') }}" type="color" placeholder="Couleur">
                    </div>

                    <div class="form-group">
                        <label for="start_date" class="col-form-label text-md-right">{{ __('Date de début') }}</label>
                        <input name="start_date" class="form-control" value="{{ old('start_date') }}" type="datetime-local" placeholder="Date de début">
                    </div>

                    <div class="form-group">
                        <label for="end_date" class="col-form-label text-md-right">{{ __('Date de fin') }}</label>
                        <input name="end_date" type="datetime-local" rows="2" value="{{ old('end_date') }}" class="form-control" placeholder="Date de fin">
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg col-md-5" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>&#xA0;Ajouter</button>
                </div>
            </form>
        </div>
        <hr>
    </div>
    </body>

@stop
