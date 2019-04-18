@extends('layouts.admin') @section('title', 'CMCU | Ajouter un produit') @section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->
        <div class="container">
            <h1 class="text-center">AJOUTER UN PRODUIT</h1>
            <hr>
            @include('partials.flash')
            <div class="col-md-6">
                <form method="post" action="{{ route('produit.store') }}">
                    <div class="form-group">
                        @csrf
                        <label for="name">DESIGNATION:</label>
                        <input type="text" class="form-control" name="designation" />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">CATEGORIE</label>
                        <select class="form-control" name="categorie" id="exampleFormControlSelect1">
                            <option>PHARMACEUTIQUE</option>
                            <option>MATERIEL</option>

                        </select>
                        <div class="form-group">
                            <label for="price">QUANTITE STOCK :</label>
                            <input type="text" class="form-control" name="qte_stock" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price">QUANTITE ALERTE :</label>
                        <input type="text" class="form-control" name="qte_alerte" />
                    </div>
                    <div class="form-group">
                        <label for="quantity">PRIX:</label>
                        <input type="text" class="form-control" name="prix_unitaire" />
                    </div>
                        <button type="submit" class="btn btn-primary">ENREGISTRER</button>
                </form>
            </div>
        </div>
    </div>
    </body>
@endsection
