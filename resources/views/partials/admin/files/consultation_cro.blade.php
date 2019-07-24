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
        <td>{{ ($consultations->medecin) }}</td>
    </tr>
    <tr>
        <td>
            <b>MOTIF DE LA CONSULTATION :</b>
        </td>
        <td>{{ ($consultations->motif) }}</td>
    </tr>
    <tr>
        <td><b>ALLERGIES :</b></td>
        {{--@if (strlen($consultations->allergie)>25)--}}

        <td>{{ ($consultations->allergie) }}</td>
        {{--@endif--}}

    </tr>
    <tr>
        <td><b>GROUPE SANGUIN :</b></td>
        <td>
            <span class="badge badge-primary">{{ $consultations->groupe }}</span>
        </td>
    </tr>
    <tr>
        <td><b>ANTECEDENTS MEDICAUX :</b></td>
        {{--@if (strlen($consultations->antecedent)>25)--}}
        {{--<td>{{ str_limit($consultations->antecedent, 20) }}</td>--}}
        {{--@endif--}}
        <td>{{ $consultations->antecedent_m }}</td>
    </tr>
    <tr>
        <td><b>ANTECEDENTS CHIRURGICAUX :</b></td>
        <td>{{ $consultations->antecedent_c }}</td>
    </tr>
    <tr>
        <td><b>COMMENTAIRE :</b></td>
        <td>{{ ($consultations->commentaire) }}</td>
    </tr>
    <tr>
        <td><b>DIAGNOSTIQUE :</b></td>
        <td>{{ ($consultations->diagnostique) }}</td>
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
            <td><b>TENSION :</b></td>
            <td>{{ $parametres->tension }}</td>
        </tr>
        <tr>
            <td><b>TEMPERATURE :</b></td>
            <td>{{ $parametres->temperature }} °C</td>
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
                <i class="fas fa-print"></i> Lettre de sortie
            </a>
        </td>
    </tr>

    <tr>
        <td>
            <a href="">
                <h1 class="text-info">COMPTE RENDU</h1>
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
            <td><b>NOM DU CHIRURGIEN :</b></td>
            <td></td>
        </tr>
        <tr>
            <td><b>PRENOM :</b></td>
            <td></td>
        </tr>
        <tr>
            <td><b>DATE DE L'INTERVENTION :</b></td>
            <td></td>
        </tr>
        <tr>
            <td><b>DUREE DE L'INTERVENTION :</b></td>
            <td></td>
        </tr>
        <tr>
            <td><b>DETAILS DE L'INTERVENTION :</b></td>
            {{--@if (strlen($compte_rendu_bloc_operatoires) > 25)--}}

            <td></td>
            {{--@endif--}}

        </tr>
        <tr>
            <td><b>COUT DE L'INTERVENTION :</b></td>
            <td></td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('compte_rendu_bloc.create', $patient->id) }}" title="Rédiger un compte rendu opératoire" class="btn btn-danger">
                    <i class="far fa-plus-square"></i> Nouveau CRO
                </a>
            </td>
            <td>
                @if (count($patient->compte_rendu_bloc_operatoires))
                    <a class="btn btn-success" title="Imprimer le compte rendu opératoire" href="">
                        <i class="fas fa-print"></i> Imprimer le CRO
                    </a>
                @endif
            </td>
        </tr>
    @else
        <tr>
            <td>
                <a href="{{ route('compte_rendu_bloc.create', $patient->id) }}" title="Rédiger un compte rendu opératoire" class="btn btn-danger">
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
