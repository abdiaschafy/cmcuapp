@extends('layouts.admin')

@section('title', 'CMCU | Bilan facure')

@section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->
        @can('create', \App\Produit::class)
            <div class="container">
                <h1 class="text-center">LISTE DES FCATURES</h1>
            </div>
            <hr>
            <div class="col-md-3 offset-md-8 text-center">
            </div>
            <div class="container">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        @include('partials.flash')
                        <table id="myTable" class="table table-striped table-bordered dt-responsive display nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>NUMERO</td>
                                <td>DATE</td>
                                <td>EDITER</td>
                                <td>SUPPRIMER</td>
                            </tr>
                            <tbody>
                            @foreach($factures as $facture)
                                <tr>
                                    <td>{{$facture->id}}</td>
                                    <td>{{$facture->numero}}</td>
                                    <td>{{$facture->created_at->toFormattedDateString() }}</td>
                                    <td><a href="{{ route('produits.edit', $facture->id)}}" title="Enregistrer une nouvelle entré en stock" class="btn btn-primary"><i class="far fa-edit"></i></a></td>
                                    <td>
                                        <form action="{{ route('produits.destroy', $facture->id) }}" method="post">
                                            @csrf @method('DELETE')
                                            <p data-placement="top" data-toggle="tooltip" title="Supprimer le produit du stock">
                                                <button type="submit" class="btn btn-danger btn-xs"  onclick="return myFunction()"><i class="fas fa-trash-alt"></i></button>
                                            </p>
                                        </form>
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
