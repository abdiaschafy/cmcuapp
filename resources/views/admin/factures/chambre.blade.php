@extends('layouts.admin')

@section('title', 'CMCU | Bilan facure')

@section('content')

    <body>
    {{--<div class="se-pre-con"></div>--}}
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->
        @can('view', \App\User::class)
            <div class="container">
                <h1 class="text-center">FACTURES CHAMBRES</h1>
                <hr>
            </div>
            <div class="col-md-3 offset-md-8 text-center">
            </div>
            <div class="container">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        @include('partials.flash')
                        <table id="myTable" class="table table-striped table-bordered dt-responsive display nowrap td-responsive" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>PATIENT</td>
                                <td>NUMERO</td>
                                <td>DATE D'ENTRE</td>
                                <td>DATE DE SORTIE</td>
                                <td>DUREE</td>
                                <td>TARIF</td>
                                <td>ACTION</td>
                            </tr>
                            <tbody>
                            @foreach($factureChambres as $facture)
                                <tr>
                                    <td>{{$facture->id}}</td>
                                    <td>{{$facture->patient_id }}</td>
                                    <td>{{$facture->numero}}</td>
                                    <td>{{$facture->date_entre}}</td>
                                    <td>{{$facture->date_sortie}}</td>
                                    <td>{{$facture->duree }}</td>
                                    <td>{{$facture->tarif }} <b>FCFA</b></td>
                                    <td style="display: inline-flex;">
                                        <p class="mr-2" data-placement="top" data-toggle="tooltip" title="Voire les détails">
                                            <a class="btn btn-success btn-xs mr-1" title="Imprimer la facture de consultation" href="{{ route('factures.consultation_pdf', $facture->id) }}"><i class="fas fa-print"></i></a>
                                        </p>
                                        @can('update', \App\User::class)
                                            <form action="{{ route('factures.destroy', $facture->id) }}" method="post">
                                                @csrf @method('DELETE')
                                                <p data-placement="top" data-toggle="tooltip" title="Supprimer la facture">
                                                    <button type="submit" class="btn btn-danger btn-xs"  onclick="return myFunction()"><i class="fas fa-trash-alt"></i></button>
                                                </p>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{--{{ $factures->links() }}--}}
                    </div>
                </div>
                <button class="btn btn-primary mb-2 offset-5">Ajouter une facture</button>
                        <form class="form-group col-md-4" method="POST" action="{{ route('bilan_consultation.pdf') }}">
                            @csrf
                          <div class="input-group mb-3">
                            <select name="day" class="form-control" required>
                                <option>Bien vouloir choisir une date</option>
                                @foreach($lists as $list)
                                    <option value="{{ $list }}">{{ $list }}</option>
                                @endforeach
                            </select>
                            <div class="input-group-append">
                              <button class="btn btn-primary">Imprimer</button>
                            </div>
                          </div>
                        </form>
            </div>
    </div>
    </div>
    @endcan

    </body>

@endsection
