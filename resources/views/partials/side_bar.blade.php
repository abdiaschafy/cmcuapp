<!-- Sidebar Holder -->
<nav id="sidebar">
    <div class="sidebar-header">
        <h1>
            <a href="index.html">{{ config('app.name') }}</a>
        </h1>
        <span>M</span>
    </div>
    <img src="{{ asset('admin/images/logo.jpg') }}" class="profile-bg img-fluid">
    <ul class="list-unstyled components">
        <li class="active">
            <a href="{{ route('admin.dashboard') }}">
                <i class="fas fa-th-large"></i>
                Tableau de bord
            </a>
        </li>
        <li>
            <a href="#usersSubmenu" data-toggle="collapse" aria-expanded="false">
                <i class="fas fa-users"></i>
                Gestion des utilisateurs
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="usersSubmenu">
                <li>
                    <a href="{{ route('users.index') }}">
                        <i class="fas fa-list-ul"></i>
                        Liste des utlisateurs
                    </a>
                </li>
                <li>
                    <a href="{{ route('roles.index') }}">
                        <i class="fas fa-list-ul"></i>
                        Roles
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#patientsSubmenu" data-toggle="collapse" aria-expanded="false">
                <i class="fas fa-users"></i>
                Gestion des patients
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="patientsSubmenu">
                <li>
                    <a href="{{ route('patients.index') }}">
                        <i class="fas fa-list-ul"></i>
                        Liste des patients
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-print"></i>
                        Etats de sorties
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false">
                <i class="far fa-file"></i>
                Gestion des produits
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu1">
                <li>
                    <a href="{{ route('produit.index') }}">
                        <i class="fas fa-list-ul"></i>
                        Produits en stock
                    </a>
                </li>
                <li>
                    <a href="{{ route('produit.pharmaceutique') }}">
                        <i class="fab fa-python"></i>
                        Produit pharmaceutiques
                    </a>
                </li>
                <li>
                    <a href="{{ route('materiel.pharmaceutique') }}">
                        <i class="fas fa-cogs"></i>
                        Produit matériels
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                <i class="far fa-money-bill-alt"></i>
                Factures
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu3">
                <li>
                    <a href="login.html">Payé</a>
                </li>
                <li>
                    <a href="register.html">Impayé</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="grids.html">
                <i class="far fa-money-bill-alt"></i>
                Bilan financier
            </a>
        </li>
        <li>
            <a href="{{ route('events.index') }}">
                <i class="far fa-calendar-times"></i>
                Plages horaires
            </a>
        </li>
        <li>
            <a href="{{ route('fiches.index') }}">
                <i class="fas fa-list-ul"></i>
                Fiches de satisfaction
            </a>
        </li>
    </ul>
</nav>
