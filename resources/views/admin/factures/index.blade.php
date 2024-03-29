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
                <h1 class="text-center">FACTURES PRODUITS</h1>
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
                                <td>NUMERO</td>
                                <td>MONTANT</td>
                                <td>DATE</td>
                                <td>ACTION</td>
                            </tr>
                            <tbody>
                            @foreach($factures as $facture)
                                <tr>
                                    <td>{{$facture->id}}</td>
                                    <td>{{$facture->numero}}</td>
                                    <td>{{$facture->prix_total }}  <b>FCFA</b></td>
                                    <td>{{$facture->created_at }}</td>
                                    <td style="display: inline-flex;">
                                        <p class="mr-2" data-placement="top" data-toggle="tooltip" title="Voire les détails">
                                            <a href="{{ route('factures.show', $facture->id) }}" class="btn btn-primary btn-xs"><i class="fas fa-eye"></i></a>
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
            </div>
    </div>
    </div>
    @endcan

    </body>

@endsection
