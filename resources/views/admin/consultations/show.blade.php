@extends('layouts.admin')

@section('title', 'CMCU | dossier patient')


@section('content')
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
        <div class="col-md-12  toppad  offset-md-0 ">
                   
                   
                    <a href="{{ route('patients.index') }}" class="btn btn-success float-right">
                        <i class="fas fa-arrow-left"></i>  Retour 
                    </a>
                </div>
        <h2 class="text-center mb-2">DETAILS DE LA CONSULATION</h2>
        <br>
        <div class="grid-container">
           
    <div class="grid-item">
        <h5 class="text-center mb-2"><u><b>diagnostic</b></u></h5>
        <p> {{("$consultations->diagnostic")}} </p>
       
    </div>
    <div class="grid-item">
        <h5 class="text-center mb-2"><u><b>interrogatoire</b></u></h5>
         <p> {{("$consultations->interrogatoire")}} </p>
       
    </div>
    <div class="grid-item">
        <h5 class="text-center mb-2"><u><b>antecedents médicaux</b></u></h5>
        <p> {{("$consultations->antecedent_m")}} </p>
    </div>
    <div class="grid-item">
        <h5 class="text-center mb-2"><u><b>antecedents chirurgicaux</b></u></h5>
        <p> {{("$consultations->antecedent_c")}} </p>
        
    </div>
    <div class="grid-item">
        <h5 class="text-center mb-2"><u><b>medecin</b></u></h5>
        <p> {{("$consultations->medecin_r")}} </p>
        
    </div>
    <div class="grid-item">
        <h5 class="text-center mb-2"><u><b>allergie</b></u></h5>
        <p> {{("$consultations->allergie")}} </p>
    </div>
    <div class="grid-item">
        <h5 class="text-center mb-2"><u><b>groupe</b></u></h5>
        <p> {{("$consultations->groupe")}} </p>
    </div>
    <div class="grid-item">
        <h5 class="text-center mb-3"><u><b>proposition</b></u></h5>
        <p> {{("$consultations->proposition")}} </p>
       
    </div>
    <div class="grid-item">
        <h5 class="text-center mb-3"><u><b>motif de la consultation</b></u></h5>
        <p> {{("$consultations->motif_c")}} </p>
       
    </div>
   
   
</div>


    </body>

@stop
