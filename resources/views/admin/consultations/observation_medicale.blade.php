@extends('layouts.admin')

@section('title', 'CMCU | Observations médicales')

@section('content')

<body>

    <div class="wrapper">
    @include('partials.side_bar')

        @include('partials.header')
        @can('show', \App\User::class)
            <div class="container">
                <div class="row">
                    <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-success float-right"
                       title="Retour à la liste des patients">
                        <i class="fas fa-arrow-left"></i> Retour au dossier patient
                    </a>
                </div>
                <div><h2 class="text-center">OBSERVATIONS MEDICALES</h2></div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            @can('chirurgien', \App\Patient::class)
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 5%">DATE</th>
                                <th class="text-center" style="width: 15%">MEDECIN</th>
                                <th class="text-center" style="width: 30%">OBSERVATIONS</th>

                            </tr>
                            </thead>
                            @endcan
                            <tbody>
                            @can('chirurgien', \App\Patient::class)
                            @include('partials.flash')
                            <form action="{{ route('observations_medicales.store') }}" method="post">
                                @csrf
                                <tr>
                                    <td><input name="date" class="form-control" value="{{ old('date', Carbon\Carbon::now()->ToDateString()) }}" required="required" type="date"></td>
                                    <td>
                                        <select name="user_id" class="form-control mb-2" required>
                                            <option value="">Médecin / Chirurgien</option>
                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }} {{ $user->prenom }}</option>
                                            @endforeach
                                        </select>

                                        <select name="anesthesiste" class="form-control" required>
                                            <option value="">Anesthésiste</option>
                                            @foreach($anesthesistes as $anesthesiste)
                                                <option value="{{ $anesthesiste->name }} {{ $anesthesiste->prenom }}">{{ $anesthesiste->name }} {{ $anesthesiste->prenom }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td><textarea name="observation" class="form-control" cols="100" rows="3" required></textarea></td>
                                </tr>
                                <input type="hidden" name="patient_id" value="{{ $patient->id }}">
                                <tr><td><input type="submit" class="btn btn-primary" value="Enregistrer"></td></tr>
                            </form>
                            @endcan
                            <tr>
                                <td class="table-active"><b>DATE</b></td>
                                <td class="table-active"><b>MEDECIN</b></td>
                                <td class="table-active">
                                    <b>OBSERVATIONS</b>
                                    @can('infirmier', \App\Patient::class)
                                        <button type="button" class="btn btn-success float-right"
                                                title="Administrer des soins" data-toggle="modal" data-target="#SoinsInfirmier">
                                            <i class="fas fa-heartbeat"></i>
                                        </button>
                                    @endcan
                                </td>
                            </tr>
                            @foreach ($observation_medicales as $observation_medicale)
                                <tr>
                                    <td>{{ $observation_medicale->date }}</td>
                                    <td>
                                        <p><b>Chirurgien:</b> {{ $observation_medicale->user->name }} {{ $observation_medicale->user->prenom }}</p>
                                        <p><b>Aneshesiste:</b> {{ $observation_medicale->anesthesiste }}</p>
                                    </td>
                                    <td>{{ $observation_medicale->observation }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        @endcan

{{--        MODAL ZONE--}}
        @include('admin.modal.soins_infirmier')
{{--END MODAL ZONE--}}
    </div>
</body>

@stop
