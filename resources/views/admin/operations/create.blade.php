@extends('layouts.admin')
@section('title', 'CMCU | Renseignement du dossier patient')
@section('content')
    <body>
    {{--<div class="se-pre-con"></div>--}}
    <div class="wrapper">
    @include('partials.side_bar')
    <!-- Page Content Holder -->
        @include('partials.header')
        <div class="container">
            <div class="row">
                <div class="col-md-12  toppad  offset-md-0 ">
                    <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-success float-right"><i
                            class="fas fa-arrow-left"></i> Retour au dossier patients</a>
                </div>
                <br>
                <br>
                <div class="col-md-12  offset-md-0  toppad">
                    <div class="card col-md-6">
                        <div class="card-body">
                            @include('partials.flash_form')
                            <h3 class="card-title">COMPTE RENDU OPERATOIRE</h3>
                            <small class="text-danger"><i><strong><i class="fas fa-exclamation-triangle"></i> Attention
                                        !! espace réservé au médécin</strong></i></small>
                            <table class="table table-user-information ">
                                <tbody>
                                </tr>
                                <form action="{{ route('compte_rendu_bloc.store') }}" method="post">
                                    @csrf
                                    <tr>
                                        <td><b>Nom du chirurgien :</b></td>
                                        <td>
                                            <select class="form-control" name="chirurgien" id="chirurgien" required>
                                                <option value=""> Nom du chirurgien</option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->name }}">{{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Nom de l'anesthésiste :</b></td>
                                        <td>
                                            <select class="form-control" name="anesthesiste" id="anesthesiste" required>
                                                <option value=""> Nom de l'anesthésiste</option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->name }}">{{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Date de l'inervention :</b></td>
                                        <td>
                                            <input name="date_intervention" value="{{ old('date_intervention') }}"
                                                   type="date">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Durée de l'inervention :</b></td>
                                        <td>
                                            <input name="dure_intervention" value="{{ old('dure_intervention') }}"
                                                   type="time">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Suite opératoire:</b></td>
                                        <td>
                                            <input class="form-control" name="suite_operatoire"  value="{{ old('suite_operatoire') }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Détails de l'intervention :</b></td>
                                        <td>
                                            <textarea name="detail_intervention" id="detail_intervention" cols="45" rows="3">{{ old('detail_intervention') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Conclusions :</b></td>
                                        <td>
                                            <textarea name="conclusion" id="conclusion" cols="45" rows="3">{{ old('conclusion') }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <input name="patient_id" value="{{ $patient->id }}" type="hidden">
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                        </td>
                                        <td></td>
                                    </tr>
                                </form>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@stop
