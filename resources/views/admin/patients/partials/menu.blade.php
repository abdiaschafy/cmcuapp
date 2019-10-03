@can('anesthesiste', \App\Patient::class)
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
        Menu
        <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <li class="dropdown-header">Dropdown header 1</li>
        <li>
            <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#SpostAnesth"
                    title="Surveillance post anesthésique" data-whatever="@mdo">
                <i class="far fa-plus-square"></i> Surveillance post anesthésique
            </button>
        </li>
        <li>
            <a href="{{ route('premedication_adaptation.index', $patient->id) }}" title="Traitement à l'hospitalisation / adaptation au traitement personnel" class="btn btn-success mb-1">
                <i class="fas fa-eye"></i>
                PREMEDICATION
            </a>
        </li>
        <li>
            <a href="{{ route('surveillance_rapproche.index', $patient->id) }}" title="Surveillance rapprochée des paramètres" class="btn btn-primary mb-1">
                <i class="fas fa-eye"></i>
                SURVEILLANCE RAPPROCHEE
            </a>
        </li>
        <li>
            <a href="{{ route('consultations.index', $patient->id) }}" class="btn btn-success mb-1">
                <i class="fas fa-eye"></i>
                Consultations chirurgien
            </a>
        </li>
    </ul>

    <a href="{{ route('fiche_consommable.index', $patient->id) }}" class="btn btn-info">
        <i class="far fa-plus-square"></i>
        FICHES DE CONSOMMABLES
    </a>
@endcan
@can('chirurgien', \App\Patient::class)
    <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">
        Menu
        <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <button type="button" class="btn btn-primary mb-1" data-toggle="modal"
                data-target="#FicheInterventionAnesthesiste"
                title="Ajouter une fiche d'intervention" data-whatever="@mdo">
            <i class="far fa-plus-square"></i>
            Fiche d'intervention
        </button>
        <li>
            <a href="#spa" class="btn btn-success mb-1">
                <i class="fas fa-eye"></i>
                Surveillance post anesthésique
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="{{ route('consultations.index_anesthesiste', $patient->id) }}"
               class="btn btn-primary mb-1">
                <i class="fas fa-eye"></i>
                Consultations anesthésiste
            </a>
        </li>
        <li>
            <a href="{{ route('surveillance_rapproche.index', $patient->id) }}" title="Surveillance rapprochée des paramètres" class="btn btn-success mb-1">
                <i class="fas fa-eye"></i>
                SURVEILLANCE RAPPROCHEE
            </a>
        </li>
        <li>
            <a href="{{ route('consultations.index', $patient->id) }}" class="btn btn-primary mb-1">
                <i class="fas fa-eye"></i>
                Surveillance post anesthésique
            </a>
        </li>
    </ul>

{{--    LISTE DES ELEMENTS HORS MENU --}}
    <a href="{{ route('ordonance.create', $patient->id) }}" title="Nouvelle ordonnance médicale"
       class="btn btn-primary">
        <i class="far fa-plus-square"></i>
        Ordonnance
    </a>
    <button type="button" class="btn btn-primary" data-toggle="modal"
            data-target="#ordonanceModal"
            title="Prescrire un examen complémentaire" data-whatever="@mdo">
        <i class="far fa-plus-square"></i> Examens complémentaires
    </button>
    <a href="{{ route('observations_medicales.index', $patient->id) }}" class="btn btn-primary">
        <i class="far fa-plus-square"></i>
        Observations médicales
    </a>
    <a href="{{ route('fiche_consommable.index', $patient->id) }}" class="btn btn-info">
        <i class="far fa-plus-square"></i>
        FICHES DE CONSOMMABLES
    </a>
{{--    FIN DE LA LISTE DES ELEMENTS HORS MENU --}}
@endcan

@can('infirmier', \App\Patient::class)
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
        Menu
        <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <li>
            <a href="{{ route('premedication_adaptation.index', $patient->id) }}" title="Traitement à l'hospitalisation / adaptation au traitement personnel" class="btn btn-success mb-1">
                <i class="fas fa-eye"></i>
                PREMEDICATION
            </a>
        </li>
        <li>
            <a href="{{ route('surveillance_rapproche.index', $patient->id) }}" title="Surveillance rapprochée des paramètres" class="btn btn-primary mb-1">
                <i class="fas fa-eye"></i>
                SURVEILLANCE RAPPROCHEE
            </a>
        </li>
        <li>
            <a href="{{ route('consultations.index', $patient->id) }}" class="btn btn-success mb-1">
                <i class="fas fa-eye"></i>
                Consultations chirurgien
            </a>
        </li>
        <li>
            <a href="{{ route('consultations.index_anesthesiste', $patient->id) }}"
               class="btn btn-primary mb-1">
                <i class="fas fa-eye"></i>
                Consultations anesthésiste
            </a>
        </li>
    </ul>

    {{--    LISTE DES ELEMENTS HORS MENU --}}
    <a href="{{ route('observations_medicales.index', $patient->id) }}" class="btn btn-primary">
        <i class="far fa-plus-square"></i>
        Observations médicales
    </a>
    <a href="{{ route('fiche_consommable.index', $patient->id) }}" class="btn btn-info">
        <i class="far fa-plus-square"></i>
        FICHES DE CONSOMMABLES
    </a>
    {{--    FIN DE LA LISTE DES ELEMENTS HORS MENU --}}
@endcan
