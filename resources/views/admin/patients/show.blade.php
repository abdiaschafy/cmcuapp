@extends('layouts.admin') @section('title', 'CMCU | Nouvel utilisateur') @section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
@include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card bg-light card-body mb-3 card bg-faded p-1 mb-3">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <img src="http://placehold.it/380x500" alt="" class="rounded img-fluid">
                            </div>
                            <div class="col-md-6 col-lg-8">
                                <p> <i class="glyphicon glyphicon-envelope"></i>{{ $user->email }}<br>
                                    <br> <i class="glyphicon glyphicon-gift"></i>{{ $user->created_at->toFormattedDateString() }}</p>

                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Modifier</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

@stop
