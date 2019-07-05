@extends('layouts.admin') @section('title', 'CMCU | Liste des produits pharmaceutique') @section('content')

    <body>
    {{--<div class="se-pre-con"></div>--}}
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
        @include('partials.header')

        <div class="container">
            <h2 class="text-center">DETAILS DE LA FACTURE - {{ $facture->numero }}</h2>
            <div class="row">
                <div class="col-md-12 col-lg-10 offset-md-1">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>DESIGNATION</th>
                                <th>QUANTITE</th>
                                <th>DATE D'EMISSION</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if (Session::has('cart'))
                            @foreach($produits as $produit)
                                <tr>
                                    <td>
                                        <p class="">{{ $produit['item']['designation'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $produit['quantite'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $facture->created_at }}</p>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td>
                                    <h3>Total</h3>
                                </td>
                                <td></td>
                                <td class="text-right">
                                    <h3><strong>{{ $totalPrix }}</strong></h3>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <td>
                        <a href="{{ route('pharmacie.pdf') }}" title="Imprimer la facture" class="btn btn-success float-right">Imprimer <i class="fas fa-print"></i></a>
                    </td>

                    @endif
                </div>
            </div>
        </div>

    </div>
    </div>
    <script src="{{ asset('admin/js/main.js') }}"></script>
    </body>

@endsection
