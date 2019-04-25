@extends('layouts.admin')

@section('title', 'CMCU | dossier patient')

@section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
        @include('partials.header')
        <div class="container">
            <div class="row">
                <div class="col-md-12  toppad  offset-md-0 ">
                    <a href="{{ route('patients.index') }}" class="btn btn-success float-right"><i class="fas fa-chevron-left"></i>  Retour à la liste des patients</a>
                </div>
                <br>
                <br> @if ($patient->count())

                    <div class="col-md-6  offset-md-0  toppad">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">{{ $patient->name }}</h2>
                                <table class="table table-user-information ">
                                    <tbody>
                                    <tr>
                                        <td>Numéro de dossier</td>
                                        <td>{{ $patient->numero_dossier }}</td>
                                    </tr>
                                    <tr>
                                        <td>Frait de consultation</td>
                                        <td>15 000 FCFA</td>
                                    </tr>
                                    <tr>
                                        <td>Pofession:</td>
                                        <td>Empleado</td>
                                    </tr>
                                    <tr>
                                        <td>Date d'ouverture:</td>
                                        <td>{{ $patient->created_at->toFormattedDateString() }}</td>
                                    </tr>
                                    <tr>
                                        <td>Sexe</td>
                                        <td>a14523687w</td>
                                    </tr>
                                    <tr>
                                        <td>Poids</td>
                                        <td>a14523687w</td>
                                    </tr>
                                    <tr>
                                        <td>Tension</td>
                                        <td>a14523687w</td>
                                    </tr>
                                    <tr>
                                        <td>Assurance</td>
                                        <td>a14523687w</td>
                                    </tr>
                                    <tr>
                                        <td>Numero d'assurance</td>
                                        <td>a14523687w</td>
                                    </tr>
                                    <tr>
                                        <td>Personne à contacter</td>
                                        <td>a14523687w</td>
                                    </tr>
                                    <tr>
                                        <td>Téléphone personne à contacter</td>
                                        <td>a14523687w</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <a class="btn btn-primary" href="{{ route('dossiers.create', $patient->id) }}">Enregister les paramètres</a>
                                <a class="btn btn-primary" href="{{ route('consultations.create') }}">Nouvelle consultation</a>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="col-md-6  offset-md-0  toppad">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Modifier les informations du patients</h3>
                            @include('partials.flash')
                            @include('partials.flash_form')
                            <form action="{{ route('patients.update', $patient->id) }}" method="POST">
                                @csrf @method('PATCH')
                                <table class="table table-user-information ">
                                    <tbody>
                                    <tr>
                                        <td>Nom du patient</td>
                                        <td>
                                            <input name="name" type="text" value='{{ $patient->name }}'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Assurance</td>
                                        <td>
                                            <Input name="assurance" type="text" value='{{ $patient->assurance }}'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Numéro d'assurance</td>
                                        <td>
                                            <Input name="numero_assurance" type="text" value='{{ $patient->numero_assurance }}'>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-primary">Modifier</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

@stop
