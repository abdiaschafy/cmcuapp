@extends('layouts.admin')

@section('title', 'CMCU | Modifier un role')

@section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
        @include('partials.header')

        <form action="{{ route('roles.update', $role->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <h4 class="modal-title custom_align" id="Heading">Modifier le role</h4>

            <label for="exampleFormControlSelect1">ROLE</label>
            <input name="roles" class="form-control col-md-6" type="text" value="{{ $role->name }}"><br>

            <button type="submit" class="btn btn-primary btn-xs col-md-2" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>&#xA0;Modifier</button>
        </form>

    </div>
    </div>
    </body>
@stop
