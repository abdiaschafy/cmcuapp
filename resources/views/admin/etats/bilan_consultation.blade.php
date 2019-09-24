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
    <div class="container-fluid">
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>PATIENT</th>
                <th>MOTIF</th>
                <th>MONTANT</th>
                <th>DATE</th>
            </tr>
            </thead>
            <tbody>
            @foreach($factures as $facture)
            <tr>
                <td>{{ $facture->id }}</td>
                <td><small>{{ $facture->patient->name }} {{ $facture->patient->prenom }}</small></td>
                <td><small>{{ $facture->motif }}</small></td>
                <td><small>{{ $facture->montant }}</small></td>
                <td><small>{{ $facture->created_at }}</small></td>
            </tr>
            @endforeach
            <tr>
                <td><h4>TATAUX:</h4></td>
            </tr>
        </table>
    </div>
    <footer class="footer">
        <div class="text-center col-6 offset-2">
            <small>TEL:(+237) 233 423 389 / 674 068 988 / 698 873 945</small>
            <small>www.cmcu-cm.com</small>
        </div>
    </footer>
</div>

