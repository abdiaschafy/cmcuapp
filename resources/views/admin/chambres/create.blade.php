@extends('layouts.admin') @section('title', 'CMCU | Ajouter une fiche une chambre') @section('content')
    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
        @include('partials.header')
        <div class="container">
            <h1 class="text-center">AJOUTER UNE CHAMBRE</h1>
            <hr>
            @include('partials.flash')
            @include('partials.flash_form')
            <div class="col-md-6">
                <form method="post" action="{{ route('chambres.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">NUMERO:</label>
                        <input type="text" class="form-control" name="numero"  />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">CATEGORIE</label>
                        <select class="form-control" name="categorie" id="exampleFormControlSelect1">
                            <option>Classique</option>
                            <option>MVP</option>
                            <option>VIP</option>
                        </select>
                    </div>
                    <select class="form-control" name="prix" id="exampleFormControlSelect1">
                        <option>2500</option>
                        <option>5000</option>
                        <option>10000</option>
                    </select>
                    <br>
                    <br>
                 <button type="submit" class="btn btn-primary ">ENREGISTRER</button>
                </form>
            </div>
        </div>
    </div>
    </body>
@endsection
