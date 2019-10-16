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
                <h1 class="text-center">FACTURES CLIENTS</h1>
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
                                <td>MOTIF</td>
                                <td>MONTANT</td>
                                <td>PART ASSURANCE</td>
                                <td>PART PATIENT</td>
                                <td>AVANCE</td>
                                <td>RESTE</td>
                                <td>MEDECIN</td>
                                <td>DATE</td>
                                <td>ACTION</td>
                            </tr>
                            <tbody>
                            @foreach($facturesClients as $facture)
                                <tr>
                                    <td>{{$facture->id}}</td>
                                    <td>{{$facture->client->nom }}</td>
                                    <td>{{$facture->motif }}</td>
                                    <td>{{$facture->montant }} <b>FCFA</b></td>
                                    <td>{{$facture->assurancec }} <b>FCFA</b></td>
                                    <td>{{$facture->assurec }} <b>FCFA</b></td>
                                    <td>{{$facture->avance }} <b>FCFA</b></td>
                                    <td>{{$facture->reste }} <b>FCFA</b></td>
                                    <td>{{$facture->medecin_r }}</td>
                                    <td>{{$facture->created_at}}</td>
                                    <td style="display: inline-flex;">
                                        <p class="mr-2" data-placement="top" data-toggle="tooltip" title="Voire les détails">
                                            <a class="btn btn-success btn-xs mr-1" title="Imprimer la facture du client" href="{{ route('factures.client_pdf', $facture->id) }}"><i class="fas fa-print"></i></a>
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
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Imprimer bilan
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('bilan_clientexterne.pdf') }}" class="btn btn-success mb-1"><i class="fas fa-print"></i> Quotidien</a></li>
                            <li><a href="#" class="btn btn-success mb-1"><i class="fas fa-print"></i> Hebdomadaire</a></li>
                            <li><a href="#" class="btn btn-success mb-1"><i class="fas fa-print"></i> Mensuel</a></li>
                            <li><a href="#" class="btn btn-success mb-1"><i class="fas fa-print"></i> Annuel</a></li>
                        </ul>
                        {{--{{ $factures->links() }}--}}
                        
                    </div>
                </div>
            </div>
    </div>
    </div>
    @endcan

    </body>

@endsection
