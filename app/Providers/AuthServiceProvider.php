<?php

namespace App\Providers;

use App\chambre;
use App\Event;
use App\Fiche;
use App\Policies\ChambrePolicy;
use App\Policies\EventPolicy;
use App\Policies\FacturePolicy;
use App\Policies\FichePolicy;
use App\Policies\ProduitPolicy;
use App\Policies\UserPolicy;
use App\Produit;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        Produit::class => ProduitPolicy::class,
        User::class => UserPolicy::class,
        chambre::class => ChambrePolicy::class,
        Event::class => EventPolicy::class,
        Fiche::class => FichePolicy::class,
        Facture::class => FacturePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
