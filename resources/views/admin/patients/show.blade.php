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
                    <a href="{{ route('patients.index') }}" class="btn btn-success float-right"><i class="fas fa-arrow-left"></i>  Retour à la liste des patients</a>
                </div>
                <br>
                <br>
                    <div class="col-md-6  offset-md-0  toppad">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title text-danger text-center">DOSSIER PATIENT</h2>
                                <table class="table table-user-information ">
                                    <tbody>
                                    <tr>
                                        <td>NOM DU PATIENT :</td>
                                        <td>{{ $patient->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>NUMERO DE DOSSIER :</td>
                                        <td>{{ $patient->numero_dossier }}</td>
                                    </tr>
                                    <tr>
                                        <td>FARIS DE CONSULTATION :</td>
                                        <td>{{ $patient->frais }} FCFA</td>
                                    </tr>
                                    <tr>
                                        <td>ASSURANCE :</td>
                                        <td>{{ $patient->assurance }}</td>
                                    </tr>
                                    <tr>
                                        <td>OUVERTURE DU DOSSIER :</td>
                                        <td>{{ $patient->created_at->toFormattedDateString() }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h1 class="text-info">CONSULTATION</h1>
                                        </td>
                                        <td></td>
                                    </tr>
                                    @foreach ($patient->consultations as $consultation)
                                    <tr>
                                        <td>DIAGNOSTIQUE :</td>
                                        <td>{{ $consultation->diagnostique }}</td>
                                    </tr>
                                    <tr>
                                        <td>DECISION :</td>
                                        <td>{{ $consultation->decision }}</td>
                                    </tr>
                                    <tr>
                                        <td>CHAMBRE :</td>
                                        <td>{{ $consultation->chambre }}</td>
                                    </tr>
                                    <tr>
                                        <td>COUT :</td>
                                        <td>{{ $consultation->cout }}</td>
                                    </tr>
                                    <tr>
                                        <td>COMMENTAIRE :</td>
                                        <td>{{ $consultation->commentaire }}</td>
                                    </tr>
                                    <tr>
                                        <td>DUREE DE L'INTERVENTION :</td>
                                        <td>{{ $consultation->dure_intervention }}</td>
                                    </tr>
                                    <tr>
                                        <td>RESULTAT EXAMENTS :</td>
                                        <td>RESULTAT ICI</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td>
                                            <h1 class="text-info">PARAMETRES</h1>
                                        </td>
                                        <td></td>
                                    </tr>
                                    @foreach($patient->parametres as $parametre)
                                    <tr>
                                        <td class="table-active">DATE :</td>
                                        <td class="table-active">{{ $parametre->created_at->toFormattedDateString() }}</td>
                                    </tr>
                                    <tr>
                                        <td>POIDS :</td>
                                        <td>{{ $parametre->poids }} Kg</td>
                                    </tr>
                                    <tr>
                                        <td>TENSION :</td>
                                        <td>{{ $parametre->tension }}</td>
                                    </tr>
                                    <tr>
                                        <td>TEMPERATURE</td>
                                        <td>{{ $parametre->temperature }} °C</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td>
                                            <h1 class="text-info">SOINS RECUS</h1>
                                        </td>
                                        <td></td>
                                    </tr>
                                    @foreach($patient->soins as $soins)
                                        <tr>
                                            <td class="table-active">DATE :</td>
                                            <td class="table-active">{{ $soins->created_at->toFormattedDateString() }}</td>
                                        </tr>
                                        <tr>
                                            <td>SOINS :</td>
                                            <td>{{ $soins->content }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <a class="btn btn-danger" href="{{ route('consultations.create', $patient->id) }}">Nouvelle consultation</a>
                            </div>
                        </div>
                    </div>

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

                    <div class="row">
                        <div class="table-responsive">
                            <table id="myTable" class="table table-bordred table-striped">
                                <thead>
                                <th>NUMERO</th>
                                <th>DESCRIPTION</th>
                                <th>DATE</th>
                                <th>IMPPRIMER</th>
                                </thead>
                                <tbody>

                                @foreach($patient->ordonances as $ordonance)
                                    <tr>
                                        <td>{{ $ordonance->id }}</td>
                                        <td>{{ $ordonance->description }}</td>
                                        <td>{{ $ordonance->created_at->toFormattedDateString() }}</td>
                                        <td>
                                            <a class="btn btn-success btn-xs" title="Imprimer l'ordonance" href="{{ route('ordonances.pdf', $ordonance->id) }}"><i class="fas fa-print"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            <div class="clearfix"></div>
                            {{ $ordonances->links() }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </body>

@stop