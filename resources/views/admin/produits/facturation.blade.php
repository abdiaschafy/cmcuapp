@extends('layouts.admin') @section('title', 'CMCU | Liste des produits pharmaceutique') @section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
        @include('partials.header')
            <div class="container">
                <h2 class="text-center">FACTURATION</h2>
                <div class="row">
                    <div class="col-md-12 col-lg-10 offset-md-1">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Produit</th>
                                    <th>Quantité</th>
                                    <th class="">Prix unitaire</th>
                                    <th class="text-center">Total</th>
                                    <th class="text-center">Action</th>
                                    <th>&#xA0;</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if (Session::has('cart'))
                                @foreach($produits as $produit)
                                <tr>
                                    <td class="col-md-8 col-lg-6">
                                        <div class="media-body">
                                            <p class="">{{ $produit['item']['designation'] }}</p>
                                        </div>
                                    </td>
                                    <td class="col-md-1 col-lg-1" style="text-align: center">
                                        <input type="number" class="form-control" id="exampleInputEmail1" value="{{ $produit['quantite'] }}">
                                    </td>
                                    <td class="col-md-1 col-lg-1 text-center"><strong></strong></td>
                                    <td class="col-md-1 col-lg-1 text-center"><strong>{{ $totalPrix }}</strong></td>
                                    <td>
                                        <a href="{{ route('facturation.reduire', ['id' => $produit['item']['id']]) }}" class="btn btn-primary"> <i class="fas fa-minus"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('facturation.supprimer', ['id' => $produit['item']['id']]) }}" class="btn btn-danger"> <i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td>&#xA0;</td>
                                <td>&#xA0;</td>
                                <td>&#xA0;</td>
                                <td>
                                    <h3>Total</h3>
                                </td>
                                <td class="text-right">
                                    <h3><strong>{{ $totalPrix }}</strong></h3>
                                </td>
                            </tr>
                            <tr>
                                <td>&#xA0;</td>
                                <td>&#xA0;</td>
                                <td>&#xA0;</td>
                                <td>
                                    <a href="{{ route('produits.pharmaceutique') }}" class="btn btn-secondary"> <i class="fas fa-arrow-left"></i> Ajouter des produits</a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success">Imprimer <i class="fas fa-print"></i>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
    </div>
    </div>
    <script src="{{ asset('admin/js/main.js') }}"></script>
    </body>

@endsection
