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
                                    <td>{{ $user->roles->name }}</td>
                                    {{--@foreach($users->roles as $role)--}}
                                        {{--<td>{{ $role->name  }}</td>--}}
                                    {{--@endforeach--}}
                                    <td>{{ $user->telephone }}</td>
                                    {{--<td>{{ $user->created_at->toFormattedDateString() }}</td>--}}
                                    {{--<td>{{ $user->updated_at->toFormattedDateString() }}</td>--}}
                                    <td>
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-xs"><i class="far fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="post">
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
                        <div class="clearfix"></div>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="col-md-12 text-center">
            <a href="{{ route('users.create') }}" type="submit" class="btn btn-primary">Ajouter un utilisateur</a>
        </div>

    </div>
    </div>

    <script>
        function myFunction() {
            if(!confirm("Veuillez confirmer la suppréssion de l'utilisateur"))
                event.preventDefault();
        }
    </script>
    </body>
@stop
