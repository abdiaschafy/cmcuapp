@extends('layouts.admin') @section('title', 'CMCU | Liste des chambres') @section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->
        <div class="container">
            <h1 class="text-center">LISTE DES CHAMBRES</h1>
        </div>
        <hr>
        <div class="col-md-3 offset-md-8 text-center">


            <a href="" class=" btn btn-danger " style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>&#xA0;
                <h2>TOTAL CHAMBRES :</h2>
                <h1><P>{{ $chambreCount }}</P> </h1>
            </a>
        </div>
        <div class="container">
             </br>
            <div class="col-lg-12">
                <div class="table-responsive">
                    @include('partials.flash')
                    <table id="myTable" class="table table-bordred table-striped">
                        <thead>
                        <tr>
                            <td>ID</td>
                            <td>NUMERO</td>
                            <td>CATEGORIE</td>
                            <td>PRIX</td>
                            <td>STATUT</td>
                            <td>EDITER</td>
                            {{--<td>SUPPRIMER</td>--}}
                        </tr>
                        <tbody>
                        @foreach($chambre as $chambres)
                            <tr>
                                <td>{{$chambres->id}}</td>
                                <td>{{$chambres->numero}}</td>
                                <td>{{$chambres->categorie}}</td>
                                <td>{{$chambres->prix}}</td>
                                <td>{{$chambres->statut}}</td>
                                 <td><a href="{{ route('chambres.edit',$chambres->id)}}" class="btn btn-primary"><i class="far fa-edit"></i></a></td>
                                {{--<td>--}}
                                    {{--<form action="{{ route('chambres.destroy', $chambres->id) }}" method="post">--}}
                                        {{--@csrf @method('DELETE')--}}
                                        {{--<p data-placement="top" data-toggle="tooltip" title="Delete">--}}
                                            {{--<button type="submit" class="btn btn-danger btn-xs"  onclick="return myFunction()"><i class="fas fa-trash-alt"></i></button>--}}
                                        {{--</p>--}}
                                    {{--</form>--}}
                                {{--</td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $chambre->links() }}
                </div>

            </div>
        </div> </br>
        <div class="col-md-3 offset-md-4 text-center">
            <a href="{{ route('chambres.create') }}" class="btn btn-primary" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>&#xA0;AJOUTER UNE NOUVELLE</a>
        </div>
    </div>
    </div>
    <script src="{{ asset('admin/js/main.js') }}"></script>
    </body>

@endsection
