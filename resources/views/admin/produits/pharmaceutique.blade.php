@extends('layouts.admin')

@section('title', 'CMCU | Liste des produits pharmaceutique')

@section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->
        <div class="container">
            <h1 class="text-center">LISTE DES PRODUITS PHARMACEUTIQUES</h1>
        </div>
        <hr>
        <div class="container">
            <a href="{{ route('pharmaceutique.facturation') }}" class="btn btn-success btn-xs col-md-1 float-right">
                Facture
                <span class="badge text-dark"><p>{{ Session::has('cart') ? Session::get('cart')->totalQte : 0 }}</p></span>
            </a>
            <div class="row">
                <div class="col-md-10 col-lg-8">
                    <form  action="#" method="#" role="search" class="card card-sm">
                        <div class="card-body row no-gutters align-items-center">
                            <div class="col-auto">
                                <i class="fas fa-search h4 text-body"></i>
                            </div>
                            <!--end of col-->
                            <div class="col">
                                <input class="form-control form-control-lg form-control-borderless" id="myInput" onkeyup="searchFunction()" type="text" class="form-control" name="q" placeholder="Rechercher un Produit">
                            </div>
                            <!--end of col-->
                            <div class="col-">
                                <a class="btn btn-lg btn-danger" href="#">Search</a>
                            </div>
                            <!--end of col-->
                        </div>
                    </form>
                </div>
                <!--end of col-->

            </div>
            </br>
                <div class="col-lg-12">
                    <div class="table-responsive">
                        @include('partials.flash')
                        <table id="myTable" class="table table-bordred table-striped">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>DESIGNATION</td>
                                <td>QUANTITE STOCK</td>
                                <td>QUANTITE ALERTE</td>
                                <td>PRIX UNITAIRE</td>
                                <td>AJOUTER A LA FACTURE</td>
                                <td>EDITER</td>
                                <td>SUPPRIMER</td>
                            </tr>
                            <tbody>
                            @foreach($produits as $produit)
                                <tr>
                                    <td>{{$produit->id}}</td>
                                    <td>{{$produit->designation}}</td>
                                    <td>{{$produit->qte_stock}}</td>
                                    <td>{{$produit->qte_alerte}}</td>
                                    <td>{{$produit->prix_unitaire}}</td>
                                    <td><a href="{{ route('pharmaceutique.cart', $produit->id) }}" class="btn btn-success" title="Ajouter à la facture"><i class="fas fa-plus-square"></i></a></td>
                                    <td><a href="{{ route('produits.edit',$produit->id)}}" class="btn btn-primary"><i class="far fa-edit"></i></a></td>
                                    <td>
                                        <form action="{{ route('produits.destroy', $produit->id)}}" method="post">
                                            @csrf @method('DELETE')
                                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $produits->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin/js/main.js') }}"></script>
    </body>

@endsection