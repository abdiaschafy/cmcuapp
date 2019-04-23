@extends('layouts.admin')

@section('title', 'CMCU | Ajouter une fiche de stisfaction')

@section('content')
<body>
<div class="se-pre-con"></div>
<div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->
    <div class="container">
        <h1 class="text-center">AJOUTER UNE FICHE DE SATISFACTION</h1>
        <hr>
        @include('partials.flash')
        <div class="col-md-6">
            <form method="post" action="{{route('fiches.store')}}">
                <div class="form-group">
                    @csrf
                    <label for="name">NOM:</label>
                    <input type="text" class="form-control" name="nom" />
                </div>
                <div class="form-group">
                    <label for="price">PRENOM :</label>
                    <input type="text" class="form-control" name="prenom" />
                </div>
                <div class="form-group">
                    <label for="price">AGE :</label>
                    <input type="text" class="form-control" name="age" />
                </div>
                <div class="form-group">
                    <label for="price">CHAMBRE :</label>
                    <input type="text" class="form-control" name="chambre" />
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">SERVICE</label>
                    <select class="form-control" name="service" id="exampleFormControlSelect1">
                        <option>URGENCE</option>
                        <option>AMBULLATOIRE</option>
                        <option>HOSPITALISATION</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="price">INFIRMIER EN CHARGE :</label>
                    <input type="text" class="form-control" name="infirmier_charge" />
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">ACCUEIL</label>
                    <select class="form-control" name="accueil" id="exampleFormControlSelect1">
                        <option>EXCELLENT</option>
                        <option>TRES BIEN</option>
                        <option>BIEN</option>
                        <option>PASSABLE</option>
                        <option>MEDIOCRE</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">RESTAURANT</label>
                    <select class="form-control" name="restaurant" id="exampleFormControlSelect1">
                        <option>EXCELLENT</option>
                        <option>TRES BIEN</option>
                        <option>BIEN</option>
                        <option>PASSABLE</option>
                        <option>MEDIOCRE</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">SOINS</label>
                    <select class="form-control" name="soins" id="exampleFormControlSelect1">
                        <option>EXCELLENT</option>
                        <option>TRES BIEN</option>
                        <option>BIEN</option>
                        <option>PASSABLE</option>
                        <option>MEDIOCRE</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="sexe" class="col-form-label text-md-right">Recommanderiez-vous le Centre Médico-Chirurgical d’Urologie à vos proches ? </label>
                    <br>
                    <input type="radio" id="quizz" class="form-check-inline" name="quizz" value="Oui" required> Oui
                    <br>
                    <input type="radio" id="quizz" class="form-check-inline" name="quizz" value="Non" required> Non
                    <br>
                </div>
                <div class="form-group">
                    <label for="quantity">REMARQUE ET SUGGESTION:</label>
                     <FORM>
                        <TEXTAREA name="commentaire" rows=4 cols=40>Valeur par défaut</TEXTAREA>
                    </FORM>
                </div>
                <button type="submit" class="btn btn-primary">ENREGISTRER</button>
            </form>
        </div>
    </div>
</div>
</body>

@stop
