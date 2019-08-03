@extends('layouts.admin')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
    .cpi-titulo3 {
        font-size: 12px;
    }
    .logo{
        width: 100px;
    }
    p {
        line-height: 40%;
    }
    hr {
        display: block; height: 1px;
        border: 0; border-top: 1px solid red;
        margin-right: 1px;
    }
    .footer {
    padding-top: 1px;
    padding-bottom: 15px;
    position:fixed;
    bottom:5;
    width:100%;
}   



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


<div class="container-fluid">

    <div class="row">
        <div class="col-2">
            <img class="logo img-responsive float-left" src="{{ asset('admin/images/logo.jpg') }}">
        </div>
        <div class="col-6 offset-3">
            <div class="text-center">
                <p>CENTRE MEDICAL CHIRURGICAL-D'UROLOGIE</p>
                <p>VALLEE MANGA BELL DOUALA-BALI</p>
                <small>TEL:(+237) 233 423 389 / 674 068 988 / 698 873 945</small>
                <small>www.cmcu-cm.com</small>
            </div>
        </div>
    </div>

    <div class="row">
        <hr class="text-danger">
    </div>

    <div class="row">
        <div class="col-2">
            <small>Docteur John Doe</small>
        </div>
        <div class="col-5 offset-5">
            <p><small><u>Date:</u><b> {{ $date = \Carbon\Carbon::now()->toFormattedDateString() }}</b></small></p>
            <p><u>Nom du patient:</u> </p>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <h5 class="text-center"><u>PRESCRIPTIONS DES EXAMENS</u></h5>
    </div>
    <br>
    <br>
    <br>
    <div class="">
        <h5>
            
        </h5>
    </div>

    <div class="row" style="text-align:center; pading-top: 50px;">
 
 <div class="grid-container">
<div class="grid-item">
       <h5 class="text-center mb-2"><u><b></b></u></h5>
       <p></p>
       <p></p>
       <p></p>
       <p></p>
       
   </div>
   <div class="grid-item">
       <h5 class="text-center mb-2"><u><b>hemostase</b></u></h5>
       <p></p>
      
   </div>
   <div class="grid-item">
       <h5 class="text-center mb-2"><u><b>biochimie</b></u></h5>
       <p></p>
    </div>
   <div class="grid-item">
       <h5 class="text-center mb-2"><u><b>hormonologie/serologie</b></u></h5>
       <p></p>
     
       
   </div>
   <div class="grid-item">
       <h5 class="text-center mb-2"><u><b>marqueurs tumoraux</b></u></h5>
       <p></p>
      
   </div>
   <div class="grid-item">
       <h5 class="text-center mb-2"><u><b>bacteriologie/parasitologie</b></u></h5>
       <p></p>
       


   </div>
   <div class="grid-item">
       <h5 class="text-center mb-2"><u><b>spermiologie</b></u></h5>
       <p></p>
      

   </div>
   <div class="grid-item">
       <h5 class="text-center mb-3"><u><b>urines</b></u></h5>
       <p></p>
       

      
   </div>
   <div class="grid-item">
       <h5 class="text-center mb-3"><u><b>serologie</b></u></h5>
       <p></p>
       

      
   </div>
   <div class="grid-item">
       <h5 class="text-center mb-3"><u><b>examen</b></u></h5>
       <p></p>
       
   </div>
  
</div>


   </div>


    <footer class="footer">
        <div class="text-center col-6 offset-2">
            <small>TEL:(+237) 233 423 389 / 674 068 988 / 698 873 945</small>
            <small>www.cmcu-cm.com</small>
        </div>
    </footer>
</div>




 


    


