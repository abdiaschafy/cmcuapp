<tbody>
<tr>
    <td>
        <a href="{{ route('consultations.index') }}">
            <h1 class="text-info">CONSULTATION</h1>
        </a>
    </td>
    <td></td>
</tr>

@if (count($patient->consultations))

    <tr>
        <td class="table-active"><b>DATE :</b></td>
        <td class="table-active"><b>{{ $consultations->created_at->toFormattedDateString() }}</b></td>
    </tr>
    <tr>
        <td>
            <b>NOM et PRENOM du MEDECIN :</b>
        </td>
        <td>{{ ($consultations->medecin_r) }}</td>
    </tr>
    <tr>
        <td>
            <b>MOTIF DE LA CONSULTATION :</b>
        </td>
        <td>{{ ($consultations->motif_c) }}</td>
    </tr>
    <tr>
        <td><b>ALLERGIES :</b></td>
        <td>{{ ($consultations->allergie) }}</td>
    </tr>
    <tr>
        <td><b>GROUPE SANGUIN :</b></td>
        <td>
            <span class="badge badge-primary">{{ $consultations->groupe }}</span>
        </td>
    </tr>
    <tr>
        <td><b>ANTECEDENTS MEDICAUX :</b></td>
        <td>{{ $consultations->antecedent_m }}</td>
    </tr>
    <tr>
        <td><b>ANTECEDENTS CHIRURGICAUX :</b></td>
        <td>{{ $consultations->antecedent_c }}</td>
    </tr>
    <tr>
        <td><b>INTERROGATOIRE :</b></td>
        <td>{{ ($consultations->interrogatoire) }}</td>
    </tr>
    <tr>
        <td><b>DIAGNOSTIC :</b></td>
        <td>{{ ($consultations->diagnostic) }}</td>
    </tr>
    <tr>
        <td><b>PROPOSITION THERAPEUTIQUE :</b></td>
        <td>{{ ($consultations->proposition_therapeutique) }}</td>
    </tr>
    <tr>
        <td>
            <h1 class="text-info">PARAMETRES</h1>
        </td>
        <td></td>
    </tr>

    @if (count($patient->parametres)>0)

        <tr>
            <td class="table-active"><b>DATE :</b></td>
            <td class="table-active"><b>{{ $parametres->created_at->toFormattedDateString() }}</b></td>
        </tr>
        <tr>
            <td><b>POIDS :</b></td>
            <td>{{ $parametres->poids }} Kg</td>
        </tr>
        <tr>
            <td><b>TEMPERATURE :</b></td>
            <td>{{ $parametres->temperature }} °C</td>
        </tr>
        <tr>
            <td><b>GLYCEMIE :</b></td>
            <td>{{ $parametres->glycemie }}</td>
        </tr>
        <tr>
            <td><b>SPO2 :</b></td>
            <td>{{ $parametres->spo2 }}</td>
        </tr>
        <tr>
            <td><b>TA :</b></td>
            <td>{{ $parametres->ta }}</td>
        </tr>
        <tr>
            <td><b>FR :</b></td>
            <td>{{ $parametres->fr }}</td>
        </tr>
        <tr>
            <td><b>FC :</b></td>
            <td>{{ $parametres->temperature }}</td>
        </tr>
    @else

        <tr>
            <td>
                <b>Aucun paramètre de disponible</b>
            </td>
            <td></td>
        </tr>
    @endif

    <tr>
        <td>
            <a class="btn btn-danger" href="{{ route('consultations.create', $patient->id) }}" title="Nouvelle consultation du patient">
                <i class="fas fa-book"></i> Nouvelle consultation
            </a>
        </td>
        <td>
            <a class="btn btn-success" title="Imprimer la lettre de sortie" href="{{ route('print.sortie', $patient->id) }}">
                <i class="fas fa-print"></i> Lettre de consultation
            </a>
        </td>
    </tr>

    <tr>
        <td>
            <a href="">
                <h1 class="text-info">COMPTE-RENDU</h1>
            </a>
        </td>
        <td>
            <a href="">
                <h1 class="text-info">OPERATOIRE</h1>
            </a>
        </td>
    </tr>

    @if (count($patient->compte_rendu_bloc_operatoires))
        <tr>
            <td><b>NOM ET PRENOM DU CHIRURGIEN :</b></td>
            <td>{{ $compte_rendu_bloc_operatoires->chirurgien }}</td>
        </tr>
        <tr>
            <td><b>DATE DE L'INTERVENTION :</b></td>
            <td>{{ $compte_rendu_bloc_operatoires->date_intervention }}</td>
        </tr>
        <tr>
            <td><b>DUREE DE L'INTERVENTION :</b></td>
            <td>{{ $compte_rendu_bloc_operatoires->dure_intervention }}</td>
        </tr>
        <tr>
            <td><b>COMPTE-RENDU OPERATOIRE :</b></td>
            <td>{{ $compte_rendu_bloc_operatoires->compte_rendu_o }}</td>
        </tr>
        <tr>
            <td><b>RESULTATS HISTO-PATHOLOGIQUES :</b></td>
            <td>{{ $compte_rendu_bloc_operatoires->resultat_histo }}</td>
        </tr>
        <tr>
            <td><b>SUITES OPERATOIRES :</b></td>
            <td>{{ $compte_rendu_bloc_operatoires->suite_operatoire }}</td>
        </tr>
        <tr>
            <td><b>TRAITEMENT PROPOSE :</b></td>
            <td>{{ $compte_rendu_bloc_operatoires->traitement_propose }}</td>
        </tr>
        <tr>
            <td><b>SOINS ET EXAMENS A REALISER :</b></td>
            <td>{{ $compte_rendu_bloc_operatoires->soins }}</td>
        </tr>
        <tr>
            <td><b>CONCLUSION :</b></td>
            <td>{{ $compte_rendu_bloc_operatoires->conclusion }}</td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('compte_rendu_bloc.create', $patient->id) }}" title="Rédiger un compte-rendu opératoire" class="btn btn-danger">
                    <i class="far fa-plus-square"></i> Nouveau CRO
                </a>
            </td>
            <td>
                @if (count($patient->compte_rendu_bloc_operatoires))
                    <a class="btn btn-success" title="Imprimer le compte-rendu opératoire" href="{{ route('compte_rendu_bloc_pdf.pdf', $patient->id) }}">
                        <i class="fas fa-print"></i> Imprimer le CRO
                    </a>
                @endif
            </td>
        </tr>
    @else
        <tr>
            <td>
                <a href="{{ route('compte_rendu_bloc.create', $patient->id) }}" title="Rédiger un compte-rendu opératoire" class="btn btn-danger">
                    <i class="far fa-plus-square"></i> Nouveau CRO
                </a>
            </td>
            <td></td>
        </tr>
    @endif
@else
    <tr>
        <td>
            <a class="btn btn-danger" href="{{ route('consultations.create', $patient->id) }}" title="Nouvelle consultation du patient">
                <i class="fas fa-book"></i> Nouvelle consultation
            </a>
        </td>
        <td></td>
    </tr>
@endif

</tbody>
