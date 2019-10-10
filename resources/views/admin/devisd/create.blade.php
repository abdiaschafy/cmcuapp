@extends('layouts.admin')

@section('title', 'CMCU | Ajouter un devis')

@section('content')
<style>
.box-part {
  background: #FFF;
  border-radius: 0;
  padding: 20px 6px;
  margin: 10px 0px;
  
}
.box-a {
  background: #FFF;
  border-radius: 0;
  padding: 20px 6px;
  margin: 10px 0px;
  float:right;
}

.scrolling table {
    table-layout: inherit;
 *margin-left: -100px;/*ie7*/
}

.scrolling td, th {
	vertical-align: top;
	padding: 10px;
	min-width: 130px;
}
.scrolling th {
	position: absolute;
 *position: relative; /*ie7*/
	left: 0;
	width: 120px;
}
.outer {
	position: relative
}
.inner {
	overflow-x: auto;
	overflow-y: visible;
	margin-left: 120px;
}

</style>
    <body>
    <div class="se-pr-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->
    
    @can('devis', \App\User::class)
        <div class="container">
            <h1 class="text-center">AJOUTER UN DEVIS DETAILLE</h1>
            <hr>
            @include('partials.flash_form')

            <div class="card" style="width: 60rem;">
                <div class="card-body">
                    <h5 class="card-title">Ajouter un devis détaillé</h5>
                    <small class="text-info" title="Les champs marqués par une étoile rouge sont obligatoire"><i class="fas fa-info-circle"></i></small>
                    <hr>
                    <form class="form-group col-md-12" action="{{ route('devisd.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div >
                            <div class="row">
                            <table class="col-md-3 col-sm-3 col-xs-9">
                           <tbody>
                                <tr>
                                <td><b>Devis:</b></td>
                                        <td>
                                            <select class="form-control" name="devis_p">
                                                <option> Sélectionner un devis</option>
                                                @foreach ($devis as $devi)
                                                    <option
                                                        value="{{ $devi->nom }} &nbsp; ({{ $devi->total3 }} FCFA)" {{old("devis_p") ?: '' ? "selected": ""}}>{{ $devi->nom }} &nbsp;({{ $devi->total3 }} FCFA )
                                                    </option>
                                                @endforeach
                                            </select>

                                        </td>
                                </tr>
                            </tbody>
                          </table>
                            </div><br>

                            <div class="row">
                            <div class="col-md-5 col-sm-5 col-xs-9">
                            <div class="scrolling outer">
                                <div class="inner">
                                <table class="table table-striped table-hover table-condensed">
                                    <tr>
                                       
                                    <th><input type="text" placeholder="Element" class="form-control" value=""></th>
                                    <td><input type="text" placeholder="element1" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix1" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix3" placeholder="prix3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element4" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix4" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element10" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix10" class="form-control" value=""></td>
                                    </tr>
                                    <tr>
                                    <th><input type="text" placeholder="Element2" class="form-control" value=""></th>
                                    <td><input type="text" placeholder="element1" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix1" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix3" placeholder="prix3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element4" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix4" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element10" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix10" class="form-control" value=""></td>
                                    </tr>
                                    <tr>
                                    <th><input type="text" placeholder="Element3" class="form-control" value=""></th>
                                    <td><input type="text" placeholder="element1" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix1" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix3" placeholder="prix3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element4" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix4" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element10" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix10" class="form-control" value=""></td>
                                    </tr>
                                    <tr>
                                    <th><input type="text" placeholder="Element4" class="form-control" value=""></th>
                                    <td><input type="text" placeholder="element1" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix1" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix3" placeholder="prix3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element4" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix4" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element10" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix10" class="form-control" value=""></td>
                                    </tr>
                                    <tr>
                                    <th><input type="text" placeholder="Element5" class="form-control" value=""></th>
                                    <td><input type="text" placeholder="element1" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix1" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix3" placeholder="prix3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element4" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix4" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element10" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix10" class="form-control" value=""></td>
                                    </tr>
                                    <tr>
                                    <th><input type="text" placeholder="Element6" class="form-control" value=""></th>
                                    <td><input type="text" placeholder="element1" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix1" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix3" placeholder="prix3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element4" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix4" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element10" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix10" class="form-control" value=""></td>
                                    </tr>
                                    <tr>
                                    <th><input type="text" placeholder="Element7" class="form-control" value=""></th>
                                    <td><input type="text" placeholder="element1" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix1" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix3" placeholder="prix3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element4" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix4" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element10" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix10" class="form-control" value=""></td>
                                    </tr>
                                    <tr>
                                    <th><input type="text" placeholder="Element8" class="form-control" value=""></th>
                                    <td><input type="text" placeholder="element1" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix1" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix3" placeholder="prix3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element4" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix4" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element10" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix10" class="form-control" value=""></td>
                                    </tr>
                                    <tr>
                                    <th><input type="text" placeholder="Element9" class="form-control" value=""></th>
                                    <td><input type="text" placeholder="element1" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix1" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix3" placeholder="prix3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element4" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix4" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element10" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix10" class="form-control" value=""></td>
                                    </tr>
                                    <tr>
                                    <th><input type="text" placeholder="Element10" class="form-control" value=""></th>
                                    <td><input type="text" placeholder="element1" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix1" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix3" placeholder="prix3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element4" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix4" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element10" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix10" class="form-control" value=""></td>
                                    </tr>
                                    <tr>
                                    <tr>
                                    <th><input type="text" placeholder="Element11" class="form-control" value=""></th>
                                    <td><input type="text" placeholder="element1" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix1" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix3" placeholder="prix3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element4" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix4" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element10" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix10" class="form-control" value=""></td>
                                    </tr>
                                    <tr>
                                    <th><input type="text" placeholder="Element12" class="form-control" value=""></th>
                                    <td><input type="text" placeholder="element1" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix1" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix3" placeholder="prix3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element4" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix4" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element10" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix10" class="form-control" value=""></td>
                                    </tr>
                                    <tr>
                                    <th><input type="text" placeholder="Element13" class="form-control" value=""></th>
                                    <td><input type="text" placeholder="element1" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix1" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix3" placeholder="prix3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element4" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix4" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element10" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix10" class="form-control" value=""></td>
                                    </tr>
                                    <tr>
                                    <th><input type="text" placeholder="Element14" class="form-control" value=""></th>
                                    <td><input type="text" placeholder="element1" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix1" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix3" placeholder="prix3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element4" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix4" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element10" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix10" class="form-control" value=""></td>
                                    </tr>
                                    <tr>
                                    <th><input type="text" placeholder="Element15" class="form-control" value=""></th>
                                    <td><input type="text" placeholder="element1" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix1" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix2" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix3" placeholder="prix3" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element4" class="form-control"  value=""></td>
                                    <td><input type="text" placeholder="prix4" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix5" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix6" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix7" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix8" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix9" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="element10" class="form-control" value=""></td>
                                    <td><input type="text" placeholder="prix10" class="form-control" value=""></td>
                                    </tr>
                                    <tr>
                                   
                                </table>
                                </div>
                            </div>
                            </div>
                        
                        </div>
                        </div>
                        </div>
                            </br>

        <button type="submit" class="btn btn-primary btn-lg col-md-3" title="enregistrer un nouveau devis">Ajouter</button>
            <a href="{{ route('devis.index') }}" class="btn btn-warning btn-lg col-md-3 offset-md-1" title="Retour à la liste des devis">Annuler</a>
                </div>
      </form>
       </div>
        </div>
    </div>

</div>
    @endcan
 </body>

@stop
