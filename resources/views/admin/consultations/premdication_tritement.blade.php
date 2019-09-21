@extends('layouts.admin')

@section('title', 'CMCU | Prémédication / Traitement')

@section('content')

    <body>

    <div class="wrapper">
        @include('partials.side_bar')

        @include('partials.header')
        @can('show', \App\User::class)
            <div class="col-md-12  toppad  offset-md-0 ">
                <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-success float-right">
                    <i class="fas fa-arrow-left"></i>  Retour au dossier patient
                </a>
            </div>
            <div class="container">
                @can('anesthesiste', \App\Patient::class)
                <div class="row col-md-12">
                    <div class="container">
                        <h3 align="center">PREMEDICATION</h3>
                        <div class="table-responsive col-md-12">
                            <form method="post" id="dynamic_form" action="{{ route('ordonances.store') }}">
                                @csrf
                                <span id="result"></span>
                                <table class="table table-bordered table-striped" id="user_table">
                                    <thead>
                                    <tr>
                                        <th width="35%">CONSIGNE IDE</th>
                                        <th width="35%">PREPARATION</th>
                                        <th width="30%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" name="consigne_ide">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="preparation">
                                            </td>
                                            <td>
                                                <input type="submit" name="save" id="save" class="btn btn-primary" value="Enregistrer" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <input name="patient_id" value="{{ $patient->id }}" type="hidden">
                            </form>
                        </div>
                    </div>
                </div>
                @endcan
                    <br>
                    <hr>
                    <h1 class="text-center">Traitement à l'hospitalistion</h1>
                    @can('infirmier', \App\Patient::class)
                        <div class="row">
                            <div class="container">
                                <div class="table-responsive">
                                    <form method="post" id="dynamic_form" action="{{ route('ordonances.store') }}">
                                        @csrf
                                        <span id="result"></span>
                                        <table class="table table-bordered table-striped" id="user_table">
                                            <thead>
                                            <tr>
                                                <th width="35%">Nom du médicament, dosage, posologie</th>
                                                <th width="35%">Durée (j)</th>
                                                <th width="35%">J (-1)</th>
                                                <th width="35%">J (0)</th>
                                                <th width="35%">J (1)</th>
                                                <th width="35%">J (2)</th>
                                                <th width="35%">Date</th>
                                                <th width="30%">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <textarea name="" id="" cols="30" class="form-control" rows="2"></textarea>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="preparation">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="preparation">
                                                </td>
                                                <td>
                                                    <input type="checkbox" class="form-control" name="preparation">
                                                </td>
                                                <td>
                                                    <input type="checkbox" class="form-control" name="preparation">
                                                </td>
                                                <td>
                                                    <input type="checkbox" class="form-control" name="preparation">
                                                </td>
                                                <td>
                                                    <input type="date" class="form-control" name="preparation">
                                                </td>
                                                <td>
                                                    <input type="submit" name="save" id="save" class="btn btn-primary" value="Enregistrer" />
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <input name="patient_id" value="{{ $patient->id }}" type="hidden">
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endcan
                <table class="table">
                    <thead>
                    <tr>
                        <th>
                            <div>Nom du médicament, dosage, posologie</div>
                        </th>
                        <th>
                            <div>Durée (j)</div>
                        </th>
                        <th>
                            <div>J (-1)</div>
                        </th>
                        <th>
                            <div>J (0)</div>
                        </th>
                        <th>
                            <div>J (1)</div>
                        </th>
                        <th>
                            <div>J (2)</div>
                        </th>
                        <th>
                            <div>Date</div>
                        </th>
                        <th>
                            <div>IDE</div>
                        </th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                    </tr>
                    </tfoot>
                </table>
                    <br>
                    <hr class="pb-3 pt-3">
                    <h1 class="text-center">Adaptation du traitemen personnel</h1>
                    @can('infirmier', \App\Patient::class)
                    <div class="table-responsive">
                        <form method="post" id="dynamic_form" action="{{ route('ordonances.store') }}">
                            @csrf
                            <span id="result"></span>
                            <table class="table table-bordered table-striped" id="user_table">
                                <thead>
                                <tr>
                                    <th width="35%">Nom du médicament, dosage, posologie</th>
                                    <th width="35%">Durée (j)</th>
                                    <th width="35%">J (-1)</th>
                                    <th width="35%">J (0)</th>
                                    <th width="35%">J (1)</th>
                                    <th width="35%">J (2)</th>
                                    <th width="35%">Date</th>
                                    <th width="30%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <textarea name="" id="" cols="30" class="form-control" rows="2"></textarea>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="preparation">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="preparation">
                                    </td>
                                    <td>
                                        <input type="checkbox" class="form-control" name="preparation">
                                    </td>
                                    <td>
                                        <input type="checkbox" class="form-control" name="preparation">
                                    </td>
                                    <td>
                                        <input type="checkbox" class="form-control" name="preparation">
                                    </td>
                                    <td>
                                        <input type="date" class="form-control" name="preparation">
                                    </td>
                                    <td>
                                        <input type="submit" name="save" id="save" class="btn btn-primary" value="Enregistrer" />
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <input name="patient_id" value="{{ $patient->id }}" type="hidden">
                        </form>
                    </div>
                    @endcan
                    <table class="table">
                        <thead>
                        <tr>
                            <th>
                                <div class="text-center">Nom du médicament, dosage, posologie</div>
                            </th>
                            <th>
                                <div class="text-center">Arrêt</div>
                            </th>
                            <th>
                                <div class="text-center">A poursuivre j'usqu'a la veille au soir</div>
                            </th>
                            <th>
                                <div class="text-center">A continuer le matin</div>
                            </th>
                            <th>
                                <div>M</div>
                            </th>
                            <th>
                                <div>MI</div>
                            </th>
                            <th>
                                <div>S</div>
                            </th>
                            <th>
                                <div>N</div>
                            </th>
                            <th>
                                <div>M+1</div>
                            </th>
                            <th>
                                <div>MI+1</div>
                            </th>
                            <th>
                                <div>S+1</div>
                            </th>
                            <th>
                                <div>N+1</div>
                            </th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                        </tr>
                        </tfoot>
                    </table>
            </div>
        @endcan
    </div>
    </body>

@stop
