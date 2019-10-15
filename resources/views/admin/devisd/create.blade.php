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

.table-sortable tbody tr {
    cursor: move;
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
                                            <select class="form-control" name="devis_id">
                                                <option> Sélectionner un devis</option>
                                                @foreach ($devis as $devi)
                                                    <option
                                                        value="{{ $devi->id }}" {{old('devis_id', $devi->devis_id) == ($devi->devis_id) ? 'selected' : ''}}>{{ $devi->nom }} ({{ $devi->total3 }} FCFA )
                                                    </option>
                                                @endforeach
                                            </select>

                                        </td>
                                </tr>
                            </tbody>
                          </table>
                            </div><br>
                            <div class="container">
                        <div class="row clearfix">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                                    <thead>
                                        <tr >
                                            <th class="text-center">
                                                Element
                                            </th>
                                            <th class="text-center">
                                                Produit
                                            </th>
                                            <th class="text-center">
                                                Prix
                                            </th>
                                            <th class="text-center">
                                                Option
                                            </th>
                                            <th class="text-center" style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id='addr0' data-id="0" class="hidden">
                                            <td data-name="name">
                                                <input type="text" name='name0'  placeholder='Element' class="form-control"/>
                                            </td>
                                            <td data-name="mail">
                                                <input type="text" name='mail0' placeholder='Produit' class="form-control"/>
                                            </td>
                                            <td data-name="desc">
                                                <input name="desc0" placeholder="Prix" class="form-control">
                                            </td>
                                            
                                            <td data-name="del">
                                                <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'><span aria-hidden="true">×</span></button>
                                            </td>
                                        <td data-name="name">
                                        <a id="add_rows" class="btn btn-success">Add Row</a>
                                        </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <a id="add_row" class="btn btn-primary float-right">Add Row</a>
                        </div>
                        </div>
                        </div>
                            </br>

        <button type="submi name="souselements"t" class="btn btn-primary btn-lg col-md-3" title="enregistrer un nouveau devis">Ajouter</button>
            <a href="{{ route('devis.index') }}" class="btn btn-warning btn-lg col-md-3 offset-md-1" title="Retour à la liste des devis">Annuler</a>
                </div>
      </form>
       </div>
        </div>
    </div>

</div>
    @endcan
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
    $("#add_row").on("click", function() {
        // Dynamic Rows Code
      
        // Get max row id and set new id
        var newid = 0;
        $.each($("#tab_logic tr"), function() {
            if (parseInt($(this).data("id")) > newid) {
                newid = parseInt($(this).data("id"));
            }
        });
        newid++;
        
        var tr = $("<tr></tr>", {
            id: "addr"+newid,
            "data-id": newid
        });
        
        // loop through each td and create new elements with name of newid
        $.each($("#tab_logic tbody tr:nth(0) td"), function() {
            var td;
            var cur_td = $(this);
            
            var children = cur_td.children();
            
            // add new td and element if it has a nane
            if ($(this).data("name") !== undefined) {
                td = $("<td></td>", {
                    "data-name": $(cur_td).data("name")
                });
                
                var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
                c.attr("name", $(cur_td).data("name") + newid);
                c.appendTo($(td));
                td.appendTo($(tr));
            } else {
                td = $("<td></td>", {
                    'text': $('#tab_logic tr').length
                }).appendTo($(tr));
            }
        });
        
        // add delete button and td
        /*
        $("<td></td>").append(
            $("<button class='btn btn-danger glyphicon glyphicon-remove row-remove'></button>")
                .click(function() {
                    $(this).closest("tr").remove();
                })
        ).appendTo($(tr));
        */
        
        // add the new row
        $(tr).appendTo($('#tab_logic'));
        
        $(tr).find("td button.row-remove").on("click", function() {
             $(this).closest("tr").remove();
        });
});




    // Sortable Code
    var fixHelperModified = function(e, tr) {
        var $originals = tr.children();
        var $helper = tr.clone();
    
        $helper.children().each(function(index) {
            $(this).width($originals.eq(index).width())
        });
        
        return $helper;
    };
  
    $(".table-sortable tbody").sortable({
        helper: fixHelperModified      
    }).disableSelection();

    $(".table-sortable thead").disableSelection();



    $("#add_row").trigger("click");
});
    </script>

    <script>
             $(document).ready(function() {
    $("#add_rows").on("click", function() {
        // Dynamic Rows Code
      
        // Get max row id and set new id
        var newid = 0;
        $.each($("#tab_logic tr"), function() {
            if (parseInt($(this).data("id")) > newid) {
                newid = parseInt($(this).data("id"));
            }
        });
        newid++;
        
        var tr = $("<tr></tr>", {
            id: "addr"+newid,
            "data-id": newid
        });
        
        // loop through each td and create new elements with name of newid
        $.each($("#tab_logic tbody tr:nth(0) td"), function() {
            var td;
            var cur_td = $(this);
            
            var children = cur_td.children();
            
            // add new td and element if it has a nane
            if ($(this).data("name") !== undefined) {
                td = $("<td></td>", {
                    "data-name": $(cur_td).data("name")
                });
                
                var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
                c.attr("name", $(cur_td).data("name") + newid);
                c.appendTo($(td));
                td.appendTo($(tr));
            } else {
                td = $("<td></td>", {
                    'text': $('#tab_logic tr').length
                }).appendTo($(tr));
            }
        });
        
        // add delete button and td
        /*
        $("<td></td>").append(
            $("<button class='btn btn-danger glyphicon glyphicon-remove row-remove'></button>")
                .click(function() {
                    $(this).closest("tr").remove();
                })
        ).appendTo($(tr));
        */
        
        // add the new row
        $(tr).appendTo($('#tab_logics'));
        
        $(tr).find("td button.row-remove").on("click", function() {
             $(this).closest("tr").remove();
        });
});




    // Sortable Code
    var fixHelperModified = function(e, tr) {
        var $originals = tr.children();
        var $helper = tr.clone();
    
        $helper.children().each(function(index) {
            $(this).width($originals.eq(index).width())
        });
        
        return $helper;
    };
  
    $(".table-sortable tbody").sortable({
        helper: fixHelperModified      
    }).disableSelection();

    $(".table-sortable thead").disableSelection();



    $("#add_rows").trigger("click");
});
    </script>
 </body>

@stop
