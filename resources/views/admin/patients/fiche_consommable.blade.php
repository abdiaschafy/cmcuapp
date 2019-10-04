@extends('layouts.admin')

@section('title', 'CMCU | Fiches de consommables')

@section('content')

    <body>

    <style type="text/css">
        .bs-example {
            /*font-family: sans-serif;*/
            position: relative;
            margin: 100px;
        }
        .typeahead {
            background-color: #FFFFFF;
        }
        .tt-query {
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
        }
        .tt-hint {
            color: #999999;
        }
        .tt-menu {
            background-color: #FFFFFF;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            margin-top: 12px;
            padding: 8px 0;
            width: 422px;
        }
        .tt-suggestion {
            font-size: 22px;  /* Set suggestion dropdown font size */
            padding: 3px 20px;
        }
        .tt-suggestion:hover {
            cursor: pointer;
            background-color: #0097CF;
            color: #FFFFFF;
        }
        .tt-suggestion p {
            margin: 0;
        }
    </style>

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
                    <a href="{{ route('patients.index') }}" class="btn btn-success offset-8">
                        <i class="fas fa-list-ul"></i>
                        Liste des patients
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
                            {{ Form::model($consommable, ['route' => ['fiche_consommable.store', $consommable->id], 'method' => 'post', 'class'=>'form-horizontal form-label-left']) }}
                            @csrf
                                {{ Form::hidden('patient_id', $patient->id, ['']) }}
                                {{ Form::hidden('user_id', $user_id, ['']) }}
                                <tr>
                                    <td>{{ Form::text('search', null, ['class' => 'form-control col-md-12 typeahead tt-query', 'id' => 'search', 'autocomplete' => 'off', 'spellcheck' => 'false']) }}</td>
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
                            @foreach($consommables as $consommable)
                            <tr>
                                <td>{{ $consommable->consommable }}</td>
                                <td>{{ $consommable->jour }}</td>
                                <td>{{ $consommable->nuit }}</td>
                                <td>{{ $consommable->date }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endcan
    </div>

    </body>

@stop
