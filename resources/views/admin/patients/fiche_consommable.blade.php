@extends('layouts.admin')

@section('title', 'CMCU | Fiches de consommables')

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
                <div><h2 class="text-center">FICHES DE CONSOMMABLES</h2></div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 30%">CONSOMMABLES</th>
                                <th class="text-center" style="width: 5%">P</th>
                                <th class="text-center" style="width: 5%">G</th>
                                <th class="text-center" style="width: 5%">DATE</th>

                            </tr>
                            </thead>
                            <tbody>
                            <form action="" method="post">
                                @csrf
                                {{ Form::hidden('patient_id', $patient->id, ['']) }}
                                <tr>
                                    <td>{{ Form::text('consommable', null, ['class' => 'form-control']) }}</td>
                                    <td>{{ Form::text('jour', null, ['class' => 'form-control']) }}</td>
                                    <td>{{ Form::text('nuit', null, ['class' => 'form-control']) }}</td>
                                    <td>{{ Form::date('date', null, ['class' => 'form-control']) }}</td>
                                </tr>
                                <tr>
                                    <td>{{ Form::button('Enregistrer', ['type' => 'submit', 'class' => 'btn btn-primary']) }}</td>
                                </tr>
                            </form>
                            <tr>
                                <td class="table-active"><b>CONSOMMABLES</b></td>
                                <td class="table-active">P</td>
                                <td class="table-active">G</td>
                                <td class="table-active">DATE</td>
                            </tr>
                            <tr>
                                <td>Seringue tordu</td>
                                <td>2</td>
                                <td>2</td>
                                <td>05/02/2019</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        @endcan

    </div>
    </body>

@stop
