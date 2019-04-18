@extends('layouts.admin')

@section('title', 'CMCU | Liste des dossiers patients')

@section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->
        <div class="container">
            <h1 class="text-center">LISTE DES DOSIIERS PATIENTS</h1>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        @include('partials.flash')
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                            <th>
                                <input type="checkbox" id="checkall">
                            </th>
                            <th>NUMERO</th>
                            <th>NOM</th>
                            <th>TAILLE</th>
                            <th>DATE DE CREATION</th>
                            <th>EDITER</th>
                            <th>SUPPRIMER</th>
                            </thead>
                            <tbody>

                            @foreach($patients as $patient)
                                <tr>
                                    <td>
                                        <input type="checkbox" class="checkthis">
                                    </td>
                                    <td>CMCU - {{ $patient->numero_dossier }}</td>
                                    <td>{{ $patient->name }}</td>
                                    <td>{{ $patient->taille }}</td>
                                    <td>{{ $patient->created_at->toFormattedDateString() }}</td>
                                    {{--<td>{{ $user->updated_at->toFormattedDateString() }}</td>--}}
                                    <td>
                                        <a href="{{ route('consultations.create') }}" class="btn btn-primary btn-xs"><i class="far fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <p data-placement="top" data-toggle="tooltip" title="Delete">
                                            <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><i class="fas fa-trash-alt"></i>
                                            </button>
                                        </p>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <div class="clearfix"></div>
                        {{ $patients->links() }}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 text-center">
            <a href="{{ route('patients.create') }}" type="submit" class="btn btn-primary">Ajouter un utilisateur</a>
        </div>

    </div>
    </div>
    </body>
@stop
