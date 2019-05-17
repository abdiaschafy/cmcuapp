@extends('layouts.admin') @section('title', 'CMCU | Liste des chambres') @section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->
        @can('create', \App\chambre::class)
        <div class="container">
            <h1 class="text-center">LISTE DES CHAMBRES</h1>
        </div>
        <hr>
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <form class="col-md-6 form-inline" action="{{ route('chambres.search') }}" method="GET">
                        <input class="form-control" type="text" placeholder="Rechercher" name="search">
                        <button class="btn btn-primary btn-xs"><i class="fas fa-search"></i></button>
                    </form>
                    <br>
                    <br>
                    <div class="col-md-4 offset-md-2">
                        <a href="{{ url('/admin/chambres/?categorie=vip') }}" class="btn btn-success">VIP</a>
                        <a href="{{ url('/admin/chambres/?categorie=classique') }}" class="btn btn-primary">CLASSIQUE</a>
                        <a href="{{ url('/admin/chambres/?categorie=bloc') }}" class="btn btn-info">BLOC</a>
                        <a href="{{ url('/admin/chambres') }}" class="btn btn-info"><i class="fas fa-sync-alt"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="table-responsive">
                    @include('partials.flash')
                    <table id="myTable" class="table table-bordred table-striped">
                        <thead>
                        <tr>
                            <td>
                                <a href="{{ route('chambres.index', ['order' => request('order'), 'order' => 'asc']) }}"><i class="fas fa-sort-numeric-up"></i></a>
                                ID
                                <a href="{{ route('chambres.index', ['order' => request('order'), 'order' => 'desc']) }}"><i class="fas fa-sort-numeric-down"></i></a>
                            </td>
                            <td>NUMERO</td>
                            <td>CATEGORIE</td>
                            <td>PRIX</td>
                            <td>STATUT</td>
                            <td>EDITER</td>
                            {{--<td>SUPPRIMER</td>--}}
                        </tr>
                        <tbody>
                        @foreach($chambres as $chambre)
                            <tr>
                                <td>{{$chambre->id}}</td>
                                <td>{{$chambre->numero}}</td>
                                <td>{{$chambre->categorie}}</td>
                                <td>{{$chambre->prix}}</td>
                                <td>{{$chambre->statut}}</td>
                                 <td><a href="{{ route('chambres.edit',$chambre->id)}}" class="btn btn-primary"><i class="far fa-edit"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $chambres->links() }}
                </div>

            </div>
        </div> </br>
        <div class="col-md-3 offset-md-4 text-center">
            <a href="{{ route('chambres.create') }}" class="btn btn-primary">Ajouter une nouvelle chambre</a>
        </div>
       @endcan
    </div>
    </div>
    </body>

@endsection
