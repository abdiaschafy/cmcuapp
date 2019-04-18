@extends('layouts.admin')

@section('title', 'CMCU | Liste des utilisateurs')

@section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->
        <div class="container">
            <h1 class="text-center">LISTE DES UTILISATEURS</h1>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        @include('partials.flash')
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                            <th>
                                <input type="checkbox" id="checkall">
                            </th>
                            <th>NOM</th>
                            <th>LOGIN</th>
                            <th>ROLE</th>
                            <th>TELEPHONE</th>
                            <th>EDITER</th>
                            <th>SUPPRIMER</th>
                            </thead>
                            <tbody>

                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        <input type="checkbox" class="checkthis">
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->login }}</td>
                                    @foreach($user->roles as $role)
                                        <td>{{ $user->roles->first()->name }}</td>
                                    @endforeach
                                    <td>{{ $user->telephone }}</td>
                                    {{--<td>{{ $user->created_at->toFormattedDateString() }}</td>--}}
                                    {{--<td>{{ $user->updated_at->toFormattedDateString() }}</td>--}}
                                    <td>
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-xs"><i class="far fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <p data-placement="top" data-toggle="tooltip" title="Delete">
                                            <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><i class="fas fa-trash-alt"></i>
                                            </button>
                                        </p>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <div class="clearfix"></div>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 text-center">
            <a href="{{ route('users.create') }}" type="submit" class="btn btn-primary">Ajouter un utilisateur</a>
        </div>

    </div>
    </div>
    </body>
@stop
