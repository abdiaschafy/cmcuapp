@extends('layouts.admin') @section('title', 'CMCU | Modifier un utilisateur') @section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->
        <div class="container">
            <h1 class="text-center">MODIFIER UN UTILISATEUR</h1>
            <hr>
            @include('partials.flash_form')
                <div class="col-md-6">
                    @include('partials.flash')
                </div>
            <form class="form-group col-md-6" action="{{ route('users.update', $user->id) }}" method="POST">
                {{method_field('PATCH')}} {{csrf_field()}}

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name" class="col-form-label text-md-right">{{ __('Nom') }}</label>
                        <input name="name" class="form-control" value="{{ $user->name }}" type="text" placeholder="Nom" required>
                    </div>

                    <div class="form-group">
                        <label for="prenom" class="col-form-label text-md-right">{{ __('Prenom') }}</label>
                        <input name="prenom" class="form-control" value="{{ $user->prenom }}" type="text" placeholder="Prénom" required>
                    </div>

                    <label for="sexe" class="col-form-label text-md-right">{{ __('Sexe') }}</label>
                    <div class="form-group">
                        <label class="radio-inline"><input type="radio" name="sexe" value="Homme" @if($user->sexe == 'Homme') checked @endif required>Homme</label><br>
                        <label class="radio-inline"><input type="radio" name="sexe" value="Femme" @if($user->sexe == 'Femme') checked @endif required>Femme</label>
                    </div>

                    <div class="form-group">
                        <label for="lieu_naissance" class="col-form-label text-md-right">{{ __('Lieu de naissance') }}</label>
                        <input name="lieu_naissance" rows="2" value="{{ $user->lieu_naissance }}" class="form-control" placeholder="LIEU DE NAISSANCE" required>
                    </div>

                    <div class="form-group">
                        <label for="date_naissance" class="col-form-label text-md-right">{{ __('Date de naissance') }}</label>
                        <input name="date_naissance" type="date" rows="2" value="{{ $user->date_naissance }}" class="form-control" placeholder="Date de naissance" required>
                    </div>

                    <div class="form-group">
                        <label for="telephone" class="col-form-label text-md-right">{{ __('Téléphone') }}</label>
                        <input name="telephone" type="tel" rows="2" value="{{ $user->telephone }}" class="form-control" placeholder="Téléphone" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">ROLE</label>
                        <select name="roles" class="form-control" id="exampleFormControlSelect1"> @foreach($roles as $role)
                                <option value="{{ $role->id }}" {{ $role->id == ' ' ? 'selected' : '' }}>{{ $role->name }}</option> @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label for="login" class="col-form-label text-md-right">{{ __('Login') }}</label>
                            <input name="login" rows="2" value="{{ $user->login }}" class="form-control" placeholder="LOGIN" required>
                        </div>
                    </div>

                    <label for="password" class="col-form-label text-md-right">{{ __('Ancien mot de passe') }}</label>
                    <div class="input-group">
                        <input name="password" type="password" rows="2" class="form-control" id="myInput" placeholder="Ancien mot de passe" required>
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button" onclick="myFunction()"><i class="fas fa-eye-slash"></i></button>
                        </span>
                    </div>

                    <label for="password-confirm" class="col-form-label text-md-right">{{ __('Nouveau mot de passe') }}</label>
                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Nouveau mot de passe" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg col-md-5" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>&#xA0;Modifier</button>
                    <a href="{{ route('users.index') }}" class="btn btn-warning btn-lg col-md-5 offset-md-1" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>&#xA0;Annulé</a>
                </div>
            </form>
        </div>
        <hr>
    </div>
    <script type="text/javascript">
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    </body>

@stop
