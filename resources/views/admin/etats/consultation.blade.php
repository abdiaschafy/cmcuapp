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
    <table width="100%" border="0" class="border-top-2 padding-top-10">
        <tbody>
        <tr>
            <td>{{ $patient->numero_dossier }}</td>
            <td width="60%"></td>
            <td>
                Douala, le {{ $patient->created_at->toFormattedDateString() }} <br>
            </td>
        </tr>
        </tbody>
    </table>

    <table width="100%" border="1" class="text-center padding-top-10">
        <caption class="text-center text-bold">FACTURE N°{{ $patient->numero_dossier }}</caption>
        <thead>
        <tr>
            <th class="text-left">Nom du patient</th>
            <th>Montant</th>
        </tr>
        </thead>
        <tbody>
        <!-- LOOP -->
        <tr>
            <td class="text-left"> {{ $patient->name }}</td>
            <td> 15 000 </td>
        </tr>

        <!-- LOOP -->
        </tbody>
    </table>

    <div class="page-section text-bold text-left">
        Arrêté la présente facture proformat à la somme de:
        <span style="color: #0000ed"> 15 000 FCFA</span>
        <span style="color: #000000"> Quinze mil FCFA</span>
    </div>
</div>
</body>
</html>
