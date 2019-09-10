@extends('layouts.admin')

@section('title', 'CMCU | Liste des devis')

@section('content')

    <body>
    {{--<div class="se-pre-con"></div>--}}
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->
        @can('create', \App\Patient::class)
        <div class="container">
            <h1 class="text-center">LISTE DES DEVIS</h1>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        @include('partials.flash')
                        <table id="myTable" class="table table-bordred table-striped">
                            <thead>
                            <th>
                                NOM
                            </th>
                           
                            <th>MONTANT TOTAL</th>
                            <th>DATE DE CREATION</th>
                            <th>ACTION</th>
                            </thead>
                            <tbody>

                            @foreach($devis as $devi)
                                <tr>
                                    <td>{{ $devi->nom}}</td>
                                    <td>{{ $devi->montant10}}</td>
                                   
                                    <td>{{ $devi->created_at->toFormattedDateString() }}</td>
                                    
                                    <td style="display: inline-flex;">
                                   
                                    @can('print', \App\Patient::class)
                                        <p data-placement="top" data-toggle="tooltip" title="Delete">
                                            <a class="btn btn-success btn-xs mr-1" title="Imprimer le devis" href="{{ route('devis.pdf', $devi->id) }}"><i class="fas fa-print"></i></a>
                                        </p>
                                    @endcan
                                   
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <div class="clearfix"></div>
                        {{--{{ $devis->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
       

        </div>
    </div>
    @endcan
    
    </body>
@stop
