<link href="{{ asset('admin/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<style>

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
        padding-bottom: 4px;
        position:fixed;
        bottom:10px;
        width:100%;
    }
    td {
        height: 1px;
        padding: 2px !important;
    }
    th {
        height: 1px;
        padding: 1px !important;
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
                <p>007/10/D/ONMC</p>
                <p>VALLEE MANGA BELL DOUALA-BALI</p>
                <small>TEL:(+237) 233 423 389 / 674 068 988 / 698 873 945</small>
                <p><small>www.cmcu-cm.com</small></p>
            </div>
        </div>
    </div>

    <div class="row">
        <hr class="text-danger">
    </div>
    <div class="row">
        <div class="col-md-4">
{{--            <p><small><b>Doit :{{ $devis->patient->name }} {{ $devis->patient->prenom }}</b></small></p>--}}
        </div>
        <div class="col-md-4 offset-8">
            <p><small><b> Douala, {{ $date = \Carbon\Carbon::now()->toFormattedDateString() }}</b></small></p>
        </div>
    </div>
    <div class="text-center text-primary devis_numero">
{{--        <p><h4 class="devis"><u>DEVIS N°{{ \Carbon\Carbon::now()->toDateString() . '/' . substr($devis->nom, 2,5) }}</u></h4></p>--}}
    </div>
    <br>

    <div class="row">
{{--        <h5 class="text-center"><u>{{ $devis->nom }}</u></h5>--}}
    </div>
    <br>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th class="text-center">ELEMENTS</th>
            <th class="text-center" colspan="2">PRODUITS</th>
            <th class="text-center">MONTANT</th>
        </tr>
        </thead>
        <tbody>
        @if (explode('/', $devis->categorie)[0] == 'HOSPITALISATION')
            <tr>
                <td><b>{{ explode('/', $devis->categorie)[0] }}</b></td>
                <td colspan="2" class="text-center">Sous-total</td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[0] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[0] }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[1] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[1] }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[2] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[2] }}</td>
            </tr>
        @endif

        @if (explode('/', $devis->categorie)[3] == 'CS ANESTHESIE')
            <tr>
                <td><b>{{ explode('/', $devis->categorie)[3] }}</b></td>
                <td colspan="2" class="text-center">Sous-total</td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[3] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[3] }}</td>
            </tr>
        @endif

        @if (explode('/', $devis->categorie)[4] == 'KCC')
            <tr>
                <td><b>{{ explode('/', $devis->categorie)[4] }}</b></td>
                <td colspan="2" class="text-center">Sous-total</td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[4] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[4] }}</td>
            </tr>
        @endif

        @if (explode('/', $devis->categorie)[5] == 'AMPLIFICATEUR DE BRILLANCE')
            <tr>
                <td><b>{{ explode('/', $devis->categorie)[5] }}</b></td>
                <td colspan="2" class="text-center">Sous-total</td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[5] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[5] }}</td>
            </tr>
        @endif

            <tr>
                <td><b>{{ explode('/', $devis->categorie)[6] }}</b></td>
                <td colspan="2" class="text-center">Sous-total</td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[6] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[6] }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[7] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[7] }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[8] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[8] }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[9] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[9] }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[10] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[10] }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[11] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[11] }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[12] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[12] }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[13] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[13] }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[14] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[14] }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[15] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[15] }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[16] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[16] }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[18] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[18] }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[19] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[19] }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[20] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[20] }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[21] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[21] }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[22] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[22] }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[23] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[23] }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[24] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[24] }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[25] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[25] }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><small><b>{{ explode('/', $devis->produit)[26] }}</b></small></td>
                <td class="text-right">{{ explode('/', $devis->prix)[26] }}</td>
            </tr>
            @if (!empty(explode('/', $devis->produit)[27]))
                <tr>
                    <td></td>
                    <td></td>
                    <td class="text-right"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2"><small><b>{{ explode('/', $devis->produit)[27] }}</b></small></td>
                    <td class="text-right">{{ explode('/', $devis->prix)[27] }}</td>
                </tr>
            @endif
            @if (!empty(explode('/', $devis->produit)[28]))
                <tr>
                    <td></td>
                    <td></td>
                    <td class="text-right"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2"><small><b>{{ explode('/', $devis->produit)[28] }}</b></small></td>
                    <td class="text-right">{{ explode('/', $devis->prix)[28] }}</td>
                </tr>
            @endif
            @if (!empty(explode('/', $devis->produit)[29]))
                <tr>
                    <td></td>
                    <td></td>
                    <td class="text-right"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2"><small><b>{{ explode('/', $devis->produit)[29] }}</b></small></td>
                    <td class="text-right">{{ explode('/', $devis->prix)[29] }}</td>
                </tr>
            @endif
            @if (!empty(explode('/', $devis->produit)[30]))
                <tr>
                    <td></td>
                    <td></td>
                    <td class="text-right"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2"><small><b>{{ explode('/', $devis->produit)[30] }}</b></small></td>
                    <td class="text-right">{{ explode('/', $devis->prix)[30] }}</td>
                </tr>
            @endif
            @if (!empty(explode('/', $devis->produit)[31]))
                <tr>
                    <td></td>
                    <td></td>
                    <td class="text-right"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2"><small><b>{{ explode('/', $devis->produit)[31] }}</b></small></td>
                    <td class="text-right">{{ explode('/', $devis->prix)[31] }}</td>
                </tr>
            @endif

        </tbody>
    </table>

    Arrêté le présent devis à la somme de : {{ $lettre->Conversion($total = array_sum(explode('/', $devis->prix))) }} Fcfa
    <br>
    <br>
    <br>
    <div class="row">
        <p class="col-md-1 offset-8"><u>LA DIRECTION</u></p>
    </div>
    <footer class="footer">
        <div class="col-md-12">
            <small>
                <b>N.B :</b> <i>Il est à noter que ceci n’est que le coût de l’intervention chirurgicale et de l’hospitalisation.
                    Nous ne sommes tenue responsable des imprévus, ni des examens de laboratoires que vous pourriez effectuer
                    éventuellement. Merci</i>
            </small>
        </div>
    </footer>
</div>
