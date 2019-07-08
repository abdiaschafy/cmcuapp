@extends('layouts.admin') @section('title', 'CMCU | Ajouter une fiche une chambre') @section('content')
    <body>
    {{--<div class="se-pre-con"></div>--}}
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
        @include('partials.header')
        <div class="container">
            <h1 class="text-center">ATTRIBUTION DE LA CHAMBRE AU PATIENT</h1>
            <hr>
            @include('partials.flash')
            @include('partials.flash_form')
            <div class="col-md-6">
                <form method="post" action="{{ route('chambres_status.update', $chambre->id) }}">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="name">NUMERO:</label>
                        <input type="text" class="form-control" name="numero"  value="{{ $chambre->numero }}" disabled/>
                    </div>
                    <div class="form-group">
                        <label>CATEGORIE</label>
                        <select class="form-control" name="categorie" id="exampleFormControlSelect1" disabled>
                            <option value="{{ $chambre->categorie }}"  {{ $chambre->id == ' ' ? 'selected' : '' }}>{{ $chambre->categorie }}</option>
                        </select>
                    </div>
                    <input type="hidden" name="statut" value="occupé">
                    <select class="form-control" name="patient">
                        <option>Nom du patient</option>
                        @foreach($patients as $patient)
                            <option value="{{ $patient->name }}">{{ $patient->name }} {{ $patient->prenom }}</option>
                        @endforeach
                    </select>
                    <br>
                    <br>
                 <button type="submit" class="btn btn-primary ">ENREGISTRER</button>
                </form>
            </div>
        </div>
    </div>
    </body>
@endsection
