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
                    <a href="{{ route('users.index') }}">Liste des utlisateurs</a>
                </li>
                <li>
                    <a href="{{ route('roles.index') }}">Roles</a>
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
                    <a href="{{ route('patients.index') }}">Liste des patients</a>
                </li>
                {{--<li>--}}
                    {{--<a href="#">Consultation</a>--}}
                {{--</li>--}}
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
                    <a href="{{ route('produit.index') }}">Produits en stock</a>
                </li>
                <li>
                    <a href="{{ route('produit.pharmaceutique') }}">Produit pharmaceutiques</a>
                </li>
                <li>
                    <a href="{{ route('materiel.pharmaceutique') }}">Produit matériels</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                <i class="fas fa-users"></i>
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
                <i class="fas fa-th"></i>
                Bilan financier
            </a>
        </li>
        <li>
            <a href="{{ route('events.index') }}">
                <i class="fas fa-th"></i>
                Plages horaires
            </a>
        </li>
        <li>
            <a href="{{ route ('fiches.index')}}">
                <i class="fas fa-th"></i>
                Fiches de satisfaction
            </a>
        </li>
    </ul>
</nav>
