@extends('layouts.admin')
@section('title', 'CMCU | Renseignement du dossier patient')
@section('content')
    <body>
    {{--<div class="se-pre-con"></div>--}}
    <div class="wrapper">
    @include('partials.side_bar')
    <!-- Page Content Holder -->
        @include('partials.header')
        <div class="container">
            <div class="row">
                <div class="col-md-12  toppad  offset-md-0 ">
                    <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-success float-right"><i
                            class="fas fa-arrow-left"></i> Retour au dossier patient</a>
                </div>
                <br>
                <br>
                @include('admin.consultations.chirurgiens.form.consultation_chirurgien_form')
                @include('admin.consultations.anesthesistes.form.consultation_anesthesiste_form')
                @include('admin.consultations.infirmiers.form.fiche_parametre_form')
            </div>
        </div>
    </div>

    <script type="text/javascript">
        let splitLines = document.getElementsByClassName("splitLines")
        let textarea = [];
        for(let x=0; x<splitLines.length; x++){
            textarea[x] = splitLines[x];
            textarea[x].onkeyup = function () {
                var lines = textarea[x].value.split("\n");
                for (var i = 0; i < lines.length; i++) {
                    if (lines[i].length <= 67) continue;
                    var j = 0;
                    space = 67;
                    while (j++ <= 67) {
                        if (lines[i].charAt(j) === " ") space = j;
                    }
                    lines[i + 1] = lines[i].substring(space + 1) + (lines[i + 1] || "");
                    lines[i] = lines[i].substring(0, space);
                }
                textarea[x].value = lines.slice(0, 70).join("\n");
            };
        }
    </script>
    </body>
@stop
