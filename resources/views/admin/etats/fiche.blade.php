<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body { font-size: 11px }

        thead > tr > th {
            text-align: center;
            padding: 5px;
        }
        .border-top-2{
            border-top: 2px solid brown;
        }
        .page-section{
            margin-top: 5px;
            margin-bottom: 5px;
        }
        .padding-top-10{
            padding-top: 10px;
        }
        .text-bold{
            font-weight: bold;
            color: #000;
        }
        td {
            vertical-align: middle;
        }
        .container{
            border: 1px solid #000;
        }
        .logo{
            width: 50px;
            padding-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row text-center">
        <img class="logo" src="{{ asset('admin/images/logo.jpg') }}" alt="">
        <h5><strong>CENTRE MEDICAL CHIRURGICAL-D'UROLOGIE</strong></h5>
        <strong>VALLEE MANGA BELL DOUALA-BALI</strong><br>
        <strong>TEL: (+ 237) 233 423 389 / 674 068 988 / 698 873 945</strong><br>
        <strong>www.cmcu-cm.com</strong><br>
    </div>
    <table id="myTable" class="table table-bordred table-striped">
        <thead>
        <h1>INFORMATIONS PERSONELLES</h1>
        <tr>
            <td>NOM</td>
            <td>PRENOM</td>

            <h2>ADRESSES DU PATIENT</h2>

            <td>NUMERO DE CHAMBRE</td>
            <td>AGE</td>
            <td>SERVICE</td>
            <td>INFIRMIER EN CHARGE</td>
            <td>ACCUEIL</td>
            <td>RESTAURANT</td>
            <td>CHAMBRE</td>
        </tr>
        <tbody>

        <tr>
            <td>{{$fiche->nom}}</td>
            <td>{{$fiche->prenom}}</td>
            <br>
            <br>
            <br>
            <br>
            <br>
            <td>{{$fiche->chambre_numero}}</td>
            <td>{{$fiche->age}}</td>
            <td>{{$fiche->service}}</td>
            <td>{{$fiche->infirmier_charge}}</td>
            <td>{{$fiche->accueil}}</td>
            <td>{{$fiche->restauration}}</td>
            <td>{{$fiche->chambre}}</td>
          </tr>

        </tbody>
    </table>
</div>
</body>
</html>
