
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>

    body{
        background: #eee;
    }
    span{
        font-size:15px;
    }
    .text{
        margin:20px 0px;
    }

    .fa{
        color:#4183D7;
    }
.cpi-titulo3 {
        font-size: 12px;
    }
    
    .logo {
        width: 100px;
    }
    
    p {
        line-height: 43%;
    }
    
    hr {
        display: block;
        height: 1px;
        border: 0;
        border-top: 1px solid red;
        margin: 1em 0;
        padding: 0;
    }
    
    .footer {
        padding-top: 1px;
        padding-bottom: 15px;
        position: fixed;
        bottom: 5;
        width: 100%;
    }
    
    background: #eee;
}
span {
    font-size: 15px;
}
a {
    text-decoration: none;
    color: #0062cc;
    border-bottom: 2px solid #0062cc;
}
.box {
    padding: 30px 0px;
}
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
.text {
    margin: 5px 0px;
}
.fa {
    color: #4183D7;
}


</style>
<div class="container-fluid">

    <div class="row">
        <div class="col-2">
            <img class="logo img-responsive float-left" src="{{ asset('admin/images/logo.jpg') }}">
        </div>
        <div class="col-6 offset-3">
            <div class="text-center">
                <h4>CENTRE MEDICO-CHIRURGICAL D'UROLOGIE</h4>
                <p class="mt-2"><small>ONMC : N° 5531 007/10/D/ONMC</small></p>
                <p><small> Arrêté N° 3203/A/MINSANTE/SG/DOSTS/SDOS/SFSP </small></p>
                <p>VALLEE MANGA BELL DOUALA-BALI</p>
                <p>Consultation sur RDV </p>
                <p><small>TEL:(+237) 233 423 389 / 674 068 988 / 698 873 945</small></p>
                <p>Email : <small> contac@yahoo.fr</small></p>
                <p>Site internet : <small> www.cmcu-cm.com</small></p>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <hr class="text-danger">
    </div>
    <br>
    <br>
    <div class="row">
    <div class="col-5 offset-5">
            <p><small><u>Date:</u><b> {{ $date = \Carbon\Carbon::now()->toFormattedDateString() }}</b></small></p>
        </div>
     </div>
     <br>
     <br>
        <div class="row">
        <div >
        
        <div class="box-part ">
           <div class="title">
            <p>NOM DU PATIENT: <small></small></p>
            <small>{{ $prescriptions->patient->name }} </small>
             </div>
            
        </div>
        
        </div>
        <div class="box-a">
            <p>Prescripteur <small></small></p>

            <div class="title">
            <p>DR : <small> {{ $prescriptions->user->prenom }} {{ $prescriptions->user->name }} </small></p>

                </div>
            
        </div>
       </div>
    <br>
    <br>
     <div class="text-center"><h3><u>LISTE(S) DE(S) EXAMEN(S)</u> </h3></div>
    <br>
    <di>
    <div class="row">
        <div >

            <div class="box-part ">

                <i ></i>

                <div class="title">
                    <h5>HEMATOLOGIE</h5>

                </div>

                
                    {{$prescriptions->hematologie}}

            </div>
        </div>
            <div class="box-a ">

                <i ></i>

                <div class="title">
                    <h5>HEMOSTASE</h5>
                    
                </div>

                {{$prescriptions->hemostase}}
            </div>
    </div>
    <div class="row">
        <div >

            <div class="box-part ">

                <i ></i>

                <div class="title">
                    <h5>BIOCHIMIE</h5>
                </div>
                {{$prescriptions->biochimie}}
            </div>
        </div>
        <div class="box-a ">

                <i ></i>

                <div class="title">
                    <h5>SEROLOGIE</h5>
                    
                </div>
                {{$prescriptions->serologie}}
            </div>
    </div>
    <div class="row">
        <div  >

            <div class="box-part ">

                <i ></i>

                <div class="title">
                    <h5>HORMONOLOGIE</h5>
                </div>
                {{$prescriptions->hormonologie}}
            </div>
        </div>
        <div class="box-a ">

                <i ></i>

                <div class="title">
                    <h5>MARQUEURS</h5>
                    
                </div>
                {{$prescriptions->marqueurs}}
            </div>
    </div>
    <div class="row">
        <div  >

            <div class="box-part ">

                <i ></i>

                <div class="title">
                    <h5>BACTERIOLOGIE</h5>

                </div>

                {{$prescriptions->bacteriologie}}
            </div>
        </div>
        <div class="box-a ">

                <i ></i>

                <div class="title">
                    <h5>SPERMIOLOGIE</h5>
                    
                </div>
                {{$prescriptions->spermiologie}}
            </div>
    </div>
    <div class="row">
        <div >

            <div class="box-part ">

                <i ></i>

                <div class="title">
                    <h5>URINES</h5>
                </div>
                {{$prescriptions->urines}}
            </div>
        </div>
       
    </div>
  </div>

