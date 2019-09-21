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
        margin: 1em 0; padding: 0;
    }
    .footer {
        padding-top: 1px;
        padding-bottom: 15px;
        position:fixed;
        bottom:5px;
        width:100%;
    }

    .cmcu_dossier_cons{
        /*border: solid 1px;*/
        /*border-radius: 2px;*/
        text-align: center;
    }
    .par_first{
        line-height: 240%;
        text-align: justify;
    }

</style>
<div class="container-fluid">

    <div class="row">
        <div class="col-2">
            <img class="logo img-responsive float-left" src="{{ asset('admin/images/logo.jpg') }}">
        </div>
        <div class="col-7 offset-3">
            <div class="text-center">
                <p>CENTRE MEDICO-CHIRURGICAL D'UROLOGIE</p>
                <p>VALLEE MANGA BELL DOUALA-BALI</p>
                <small>TEL:(+237) 233 423 389 / 674 068 988 / 698 873 945</small>
                <p><small>www.cmcu-cm.com</small></p>
            </div>
        </div>
    </div>
    <div class="row">
        <hr class="text-danger">
    </div>
    <br>
    <br>
    <div class="row">
        <div class="cmcu_dossier_cons">
            <h2 class="text-center"><u>CONSENTEMENT ECLAIRE</u></h2>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-3">
            <p>Nom / Pénom patient :</p>
            <p>Nom parent :</p>
            <p>Adresse :</p>
            <p>Téléphone :</p>
        </div>
        <div class="col-3 offset-6">
            <p>Date intervention :</p>
            <p>Type intrvention :</p>
            <p>Type d'anesthésie :</p>
            <p>Chirugien :</p>
        </div>
    </div>

    <div class="row">
        <div class="row ">
            <div class="col-12">
                <p class="par_first">
                    Je déclare avoir reçu une information claire sur les risques et bénéfices des techniques d’anesthésies pour l’intervention prévue le (), lors de la consultation d’anesthésie du ()
                    Je suis conscient d’une possibilité d’un changement de technique d’anesthésie au dernier moment selon l’évolution de mon état de santé ou de l’acte chirurgical.
                    Je suis conscient du changement d’anesthésie avant l’intervention.
                </p>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-12">
            <p>
                Fait à Douala,
            </p>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <p>
            Signature du patient ou de son représentant (précédée de la mention lu, approuvé et compris)
        </p>
    </div>

    <footer class="footer">
        <div class="text-center col-6 offset-2">
            <small>TEL:(+237) 233 423 389 / 674 068 988 / 698 873 945</small>
            <small>www.cmcu-cm.com</small>
        </div>
    </footer>
</div>
