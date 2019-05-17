@extends('layouts.admin')

@section('title', 'Accueil | admin')

@section('content')
    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->
        <div class="row">
            <!-- Stats -->
            <div class="outer-w3-agile col-xl">
                @can('update', \App\User::class)
                    <div class="stat-grid p-3 d-flex align-items-center justify-content-between bg-primary">
                        <div class="s-l">
                            <h5>Utilisateurs</h5>
                            <p class="paragraph-agileits-w3layouts text-white">inscrits</p>
                        </div>
                        <div class="s-r">
                            <h6>{{ $users }}
                                <i class="far fa-user"></i>
                            </h6>
                        </div>
                    </div>
                @endcan
                @can('create', \App\Patient::class)
                   <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-success">
                           <div class="s-l">
                                <h5>Patients</h5>
                            </div>
                            <div class="s-r">
                                <h6>{{ $patients }}
                                    <i class="far fa-user"></i>
                                </h6>
                           </div>
                    </div>
                @endcan
                    @can('create', \App\chambre::class)
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-danger">
                            <div class="s-l">
                                <h5>Tasks</h5>
                                <p class="paragraph-agileits-w3layouts">Lorem Ipsum</p>
                            </div>
                            <div class="s-r">
                                <h6>232
                                    <i class="fas fa-tasks"></i>
                                </h6>
                            </div>
                        </div>
                    @endcan
                <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-warning">
                <div class="s-l">
                    <h5>Fiche de Satisfaction</h5>
                    <p class="paragraph-agileits-w3layouts"></p>
                </div>
                <div class="s-r">
                    <h6>
                        <i class="fas fa-users"></i>
                    </h6>
                </div>
            </div>
        </div>
            <!--// Stats -->
            <!-- Calender -->
            @can('create', \App\Produit::class)
                <div class="col-xl mt-3">
                    <a href="" class=" btn btn-danger " style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>&#xA0;
                        <h2>TOTAL PRODUIT</h2>
                        <i class="fas fa-medkit"></i>
                        <h1><P>{{ $produits }}</P> </h1>
                    </a>
                </div>
            @endcan
            <!--// Calender -->
        </div>


    </div>
    </div>
    <script src="{{ asset('admin/js/main.js') }}"></script>
    </body>

@stop
