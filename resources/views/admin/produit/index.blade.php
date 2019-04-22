@extends('layouts.admin') @section('title', 'CMCU | Liste des produits') @section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->
        <div class="container">
            <h1 class="text-center">LISTE DES PRODUITS</h1>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        @include('partials.flash')
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>DESIGNATION</td>
                                <td>CATEGORIE</td>
                                <td>QUANTITE STOCK</td>
                                <td>QUANTITE ALERTE</td>
                                <td>PRIX UNITAIRE</td>
                                <td>EDITER</td>
                                <td>SUPPRIMER</td>
                            </tr>
                            <tbody>
                            @foreach($produits as $produit)
                                <tr>
                                    <td>{{$produit->id}}</td>
                                    <td>{{$produit->designation}}</td>
                                    <td>{{$produit->categorie}}</td>
                                    <td>{{$produit->qte_stock}}</td>
                                    <td>{{$produit->qte_alerte}}</td>
                                    <td>{{$produit->prix_unitaire}}</td>
                                    <td><a href="{{ route('produit.edit',$produit->id)}}" class="btn btn-primary"><i class="far fa-edit"></i></a></td>
                                    <td>
                                        <form action="{{ route('produit.destroy', $produit->id) }}" method="post">
                                            @csrf @method('DELETE')
                                            <p data-placement="top" data-toggle="tooltip" title="Delete">
                                                <button type="submit" class="btn btn-danger btn-xs"  onclick="return myFunction()"><i class="fas fa-trash-alt"></i></button>
                                            </p>
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
            <div class="col-md-3 offset-md-4 text-center">
                <a href="{{ route('produit.create') }}" class="btn btn-primary" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>&#xA0;AJOUTER UN PRODUIT</a>
            </div>
        </div>
    </div>

    <script>
        function myFunction() {
            if(!confirm("Veuillez confirmer la suppréssion du produit"))
                event.preventDefault();
        }
    </script>
    </body>

@endsection
