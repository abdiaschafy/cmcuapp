<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>gird_box</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<style>
    .xxx{
        border: solid black 1px;
        padding-left: 5px;
    }
    .logo{
        width: 6%;
        padding-left: 60px;
    }
</style>

<body>
<div class="container">
    <div class="card xxx col-sm-6 offset-4">
        <div class="card-header text-center">
            <img class="center logo" src="{{ asset('admin/images/logo.jpg') }}" alt="">
        </div>
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h6 class="mb-1">{{ $date = \Carbon\Carbon::now()->toDateTimeString() }}</h6>
                    <div>
                        <strong>{{ auth()->user()->name }}</strong>
                    </div>
                </div>
            </div>

            <div class="table-responsive-sm">
                <table class="table table-striped">
                    <tbody>
                    @foreach($produits as $produit)
                        <tr>
                        <td class="left">{{ $produit['item']['designation'] }}................................</td>
                        <td class="left">{{ $produit['quantite'] }}</td>
                        </tr>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div>................................................................</div>
            <div class="row">

                <div class="col-lg-4 col-sm-5 ml-auto">
                    <table class="table table-clear">
                        <tbody>
                        <tr>
                            <td class="left">
                                <strong>Total</strong>
                            </td>
                            <td class="right">
                                <strong>{{ $totalPrix }} XAF</strong>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>

            </div>

        </div>
    </div>
</div>
</body>

</html>
