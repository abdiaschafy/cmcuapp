@extends('layouts.admin') @section('title', 'Accueil | admin') @section('content')

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
                            <h5>UTILISATEURS</h5>
                        </div>
                        <div class="s-r">
                            <h6>{{ $users }}
                                <i class="far fa-user"></i>
                            </h6>
                        </div>
                    </div>
                @endcan @can('create', \App\Patient::class)
                    <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-success">
                        <div class="s-l">
                            <h5>PATIENTS</h5>
                        </div>
                        <div class="s-r">
                            <h6>{{ $patients }}
                                <i class="fas fa-users"></i>
                            </h6>
                        </div>
                    </div>
                @endcan @can('create', \App\chambre::class)
                    <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-danger">
                        <div class="s-l">
                            <h5>CHAMBRES</h5>
                        </div>
                        <div class="s-r">
                            <h6>{{ count(\App\Chambre::all()) }}
                                <i class="fas fa-tasks"></i>
                            </h6>
                        </div>
                    </div>
                @endcan
                <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-success">
                    <div class="s-l">
                        <h5>FICHES DE SATISFACTIONS</h5>
                        <p class="paragraph-agileits-w3layouts"></p>
                    </div>
                    <div class="s-r">
                        <h6>
                            {{ count(\App\Fiche::all()) }}
                            <i class="fas fa-tasks"></i>
                        </h6>
                    </div>
                </div>

                {{--------------------------------MARGE IC-------------------------------------}}
                <div class="row mt-2">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Rendez-vous</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($events) }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Patient suivis</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($patient) }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--<!-- Earnings (Monthly) Card Example -->--}}
                    {{--<div class="col-xl-3 col-md-6 mb-4">--}}
                        {{--<div class="card border-left-info shadow h-100 py-2">--}}
                            {{--<div class="card-body">--}}
                                {{--<div class="row no-gutters align-items-center">--}}
                                    {{--<div class="col mr-2">--}}
                                        {{--<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>--}}
                                        {{--<div class="row no-gutters align-items-center">--}}
                                            {{--<div class="col-auto">--}}
                                                {{--<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col">--}}
                                                {{--<div class="progress progress-sm mr-2">--}}
                                                    {{--<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-auto">--}}
                                        {{--<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<!-- Pending Requests Card Example -->--}}
                    {{--<div class="col-xl-3 col-md-6 mb-4">--}}
                        {{--<div class="card border-left-warning shadow h-100 py-2">--}}
                            {{--<div class="card-body">--}}
                                {{--<div class="row no-gutters align-items-center">--}}
                                    {{--<div class="col mr-2">--}}
                                        {{--<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>--}}
                                        {{--<div class="h5 mb-0 font-weight-bold text-gray-800">18</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-auto">--}}
                                        {{--<i class="fas fa-comments fa-2x text-gray-300"></i>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--------------------------------MARGE IC-------------------------------------}}
            </div>
            <!--// Stats -->
            <!-- Calender -->
            @can('create', \App\Produit::class)
                <div class="col-xl mt-3">
                    <a href="" class=" btn btn-danger " style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>&#xA0;
                        <h2>PRODUITS</h2>
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
