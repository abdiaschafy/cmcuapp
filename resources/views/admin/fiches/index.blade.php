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
    <di>
        <div class="col-md-3 offset-md-8 text-center">


            <a href="" class=" btn btn-danger " style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>&#xA0;
                <h2>TOTAL PRODUIT :</h2>
                <h1><P>{{"$produitCount"}}</P> </h1>
            </a>
        </div>


        <div class="col-10 col-md-10 col-lg-8 offset-md-8 text-center">
            <form  action="/search" method="POST" role="search" class="card card-sm">
                {{ csrf_field() }}
                <div class="card-body row no-gutters align-items-center">
                    <div class="col-auto">
                        <i class="fas fa-search h4 text-body"></i>
                    </div>
                    <!--end of col-->
                    <div class="col">
                        <input class="form-control form-control-lg form-control-borderless" type="text" class="form-control" name="q" placeholder="Rechercher un produit">
                    </div>
                    <!--end of col-->
                    <div class="col-auto">
                        <button action="/search" class="btn btn-lg btn-danger" type="submit">Search</button>
                    </div>
                    <!--end of col-->
                </div>
            </form>
        </div>



    </di>


    <div class="container">
        <div class="row">

            <!--end of col-->
        </div>
        <div class="col-lg-12">
            <div class="table-responsive">
                @include('partials.flash')
                <table id="mytable" class="table table-bordred table-striped">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>NOM</td>
                        <td>PRENOM</td>
                        <td>AGE</td>
                        <td>CHAMBRE</td>
                        <td>SERVICE</td>
                        <td>INFIRMIER EN CHARGE</td>
                        <td>SUPPRIMER</td>
                        <td>SUPPRIMER</td>
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
                       <td>
                            <form action="{{ route('fiches.destroy', $fiche->id)}}" method="post">
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
    <div class="col-md-3 offset-md-4 text-center">
        <a href="{{ route('fiches.create') }}" class="btn btn-primary" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>&#xA0;AJOUTER UN PRODUIT</a>
    </div>
</div>
</div>
</body>

@endsection
