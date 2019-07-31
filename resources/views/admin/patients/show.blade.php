@extends('layouts.admin') @section('title', 'CMCU | dossier patient') @section('content')


    <style>
        .grid-container {
            display: grid;
            grid-gap: 30px 60px;
            grid-template-columns: auto auto auto;
            padding: 10px;
        }
        .grid-item {
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(0, 0, 0, 0.8);
            padding: 10px;
            font-size: 12px;
            margin-right: 1px;
        }
    </style>
    <body>

    <div class="wrapper">
    @include('partials.side_bar')


    <!-- Page Content Holder -->
        @include('partials.header')

        <div class="container">
            <div class="row">
                <div class="col-md-12  toppad  offset-md-0 ">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ordonanceModal" data-whatever="@mdo">
                        <i class="far fa-plus-square"></i> Ordonance / Examens complémentaires

                    </button>
                    <a href="#" class="btn btn-primary">
                        <i class="far fa-plus-square"></i> Fiche d'intervention
                    </a>
                    <a href="{{ route('patients.index') }}" class="btn btn-success float-right">
                        <i class="fas fa-arrow-left"></i>  Retour à la liste des patients
                    </a>
                </div>
                <br>
                <br>

                {{-- PRESENTATION DU DOSSIER PATIENT --}}
                <div class="col-md-6  offset-md-0  toppad">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title text-danger text-center">DOSSIER PATIENT</h2>
                            <table class="table table-user-information ">
                                <button class="btn btn-secondary" title="Cacher / Afficher les données personelles du patient" onclick="ShowDetailsPatient()"><i class="fas fa-eye"></i> Détails personnels</button>

                                @include('partials.admin.files.detail_patient')

                                @include('partials.admin.files.consultation_cro')

                            </table>

                        </div>
                    </div>
                    <br>
                </div>
                {{-- FIN DE PRESENTATION DU DOSSIER PATIENT --}}

                {{-- LES BOUTTONS DE MODAL IC --}}
                <div class="col-md-6  offset-md-0  toppad">
                    @include('partials.admin.files.box')

                    {{-- MODIFIER LES INFOS DU PATIENT IC --}}
                    @include('admin.patients.edit')
                    {{-- FIN DE MOFIFICATION DES INFOS PATIENT --}}

                </div>
                {{-- FIN DES BOUTONS DE MODAL --}}

                {{-- TOUS LES MODAL IC --}}
                @include('partials.admin.modal.ordonance_feuille')
                @include('partials.admin.modal.ordonance_show')
                @include('partials.admin.modal.consultation_show')
                
               
                {{-- FIN DE TOUS LES MODAL --}}

            </div>
        </div>
    </div>
    <script>
        function ShowDetailsPatient() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "contents";
            } else {
                x.style.display = "none";
            }
        }

     </script>
   <!-- <script>
    function Mycheckbox()
    {
        if ( document.test.hematologie.checked == true)
        {
            document.getElementById("2").checked = false;
        }
        else if ( document.test.hemostase.checked == true )
        {
            document.getElementById("1").checked = false;
        }
    }
 </script> -->

    </body>

@stop
